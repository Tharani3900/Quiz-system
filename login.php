<!doctype html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="styleboot1.css">
		<link rel="stylesheet" type="text/css" href="styleboot1.css">
	    <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" type="text/css" href="styleboot1.css">
        <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.structure.css">
        <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.theme.css">
        <script src="https://code.jquery.com/jquery-3.4.1.js" type="text/Javascript"></script>
        <script src="jqueryui/jquery-ui.js" type="text/Javascript"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<title>Login page</title>
</head>
<body>
	<form action="includes/login.inc.php" method="post" class="loginform">
			<div id="alert-box">
			</div>
			<div class="form-group form-box">
				<label for="name" class="form-label"><i class="fa fa-user" aria-hidden="true"></i> Username</label><br>
				<input type="text" id="name" name="userid" class="form-control form-input" placeholder="username" required>
	 		</div>
	 		<div class="form-group form-box">
				<label for="pwd" class="form-label"><i class="fa fa-key" aria-hidden="true"></i> Password</label><br>
				<input type="Password" id="pwd"  name="pwd" placeholder="password"  class="form-control form-input" required>
			</div>
			<button type="submit" name="submit" class="submitbutton">submit</button>
	</form>
	<script type="text/javascript">
			const queryString = window.location.search;
			const urlParams = new URLSearchParams(queryString);
			const error = urlParams.get('login')
			if(error=="sql___error")
			{
					document.getElementById("alert-box").innerHTML="ERROR-Try again!";
					document.getElementById("alert-box").classList.add("alertdanger");
			}
			else if(error=="wrongpassword" || error=="invaliduserid")
			{
					document.getElementById("alert-box").innerHTML="Invalid username or password!";
					document.getElementById("alert-box").classList.add("alertdanger");
			}
			else if(error=="success")
			{
				alert("success!");
			}
		</script>
</body>
</html>
	


	