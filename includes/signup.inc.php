<html>
<head>
	<title>signup</title>
	<meta charset="utf-8">
</head>
<body>

<?php
if(isset($_POST['submit']))
{
		require 'dbcl.php';
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
		$pwd_repeat=$_POST['pwd_repeat'];


		$sql="SELECT username FROM user WHERE username=?";
		$stmt=mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("Location: ../signup.php?signup=sql___error");
			exit();
		}
		mysqli_stmt_bind_param($stmt,"s",$name);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_store_result($stmt);
		$n=mysqli_stmt_num_rows($stmt);
		if($n>0)
		{
			header("Location: ../signup.php?signup=username_not_available");
			exit();
		}		
		else
		{
			$sql="INSERT INTO user(username, email, pwd) VALUES(?,?,?)";
			$stmt=mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql))
			{
				header("Location: ../signup.php?signup=sqlerror");
				exit();
			}
			/*$hashpwd=password_hash($pwd, PASSWORD_DEFAULT);*/
			mysqli_stmt_bind_param($stmt,"sss",$name,$email,$pwd);
			mysqli_stmt_execute($stmt);
			header("Location: ../signup.php?signup=success");
			exit();
			
		}
	
	mysqli_stmt_close($stmt);
	mysqli_close($conn); 
}


	?>

</body>
</html>



	