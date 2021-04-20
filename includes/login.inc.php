<?php 
if(isset($_POST['submit']))
{
	require 'dbcl.php';

	$userid=$_POST['userid'];
	$pwd=$_POST['pwd'];


		$sql=" SELECT * FROM user WHERE username=? OR email=?";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql))
		{
			header("Location: ../login.php?login=sql_error");
			exit();
		}
		mysqli_stmt_bind_param($stmt,"ss",$userid,$userid);
		mysqli_stmt_execute($stmt);
		$result=mysqli_stmt_get_result($stmt);
		if($row=mysqli_fetch_assoc($result))
		{
			if($pwd==$row['pwd'])
			{
				session_start();
				$_SESSION['logged_in']=true;
				$_SESSION['name']=$row['username'];
				$_SESSION['email']=$row['email'];
				header("Location: ../userindex.php");
				exit();
			}
			else
			{
				header("Location: ../login.php?login=wrongpassword");
				exit();
			}
		}
		else
		{
			header("Location: ../login.php?login=invaliduserid");
			exit();
		}
	
	
}
?>
