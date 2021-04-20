<?php
require 'header.php';
?>
<?php 
$requestPayLoad=file_get_contents("php://input");
$obj=json_decode($requestPayLoad,true);
if (json_last_error() === 0)
{
    	// JSON is valid
		$result=$obj['marks'];
		$domain=$obj['domain'];
		$total=$obj['total'];
		echo $result;
		$name= $_SESSION['name'];
		echo gettype($result);
		require 'includes/dbcl.php';

		$sql="SELECT * FROM highscores WHERE username=? AND domain=?";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("Location: ../loginl.php?signup=sql_error");
			exit();
		}
		mysqli_stmt_bind_param($stmt,"ss",$name,$domain);
		mysqli_stmt_execute($stmt);
		$res=mysqli_stmt_get_result($stmt);
		if($row=mysqli_fetch_assoc($res))
		{
			if($row['score']<$result)
			{
				$sql="UPDATE highscores SET score=? WHERE username=? AND domain=?";
				$stmt=mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql))
				{
					header("Location: ../signuptutorial.php?signup=sqlerror");
					exit();
				}
				/*$hashpwd=password_hash($pwd, PASSWORD_DEFAULT);*/
				mysqli_stmt_bind_param($stmt,'iss',$result,$name,$domain);
				mysqli_stmt_execute($stmt);
				exit();
			}
		}
		else
		{
				$sql="INSERT INTO highscores(username,domain, score,total) VALUES(?,?,?,?)";
				$stmt=mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql))
				{
					header("Location: ../signuptutorial.php?signup=sqlerror");
					exit();
				}
				mysqli_stmt_bind_param($stmt,'ssii',$name,$domain,$result,$total);
				mysqli_stmt_execute($stmt);
				exit();
		}
		mysqli_stmt_close($stmt);
		mysqli_close($conn);

		


}
?>