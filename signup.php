<html>
<head>
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
		
		<title>Quizzz</title>
</head>
<body>
	<main>
		<div class="quizzz-header">
			<h1 class="quizzz-brand">Quizzz</h1>
		</div>
		<script type="text/javascript">
			function validate()
			{
				var name= document.getElementById("name").value;
				var pwd= document.getElementById("pwd").value;
				var pwd_repeat= document.getElementById("pwd_repeat").value;
				var email= document.getElementById("email").value;
				if(pwd!=pwd_repeat)
				{
					document.getElementById("alert-box").innerHTML="Password does not match!";
					document.getElementById("alert-box").classList.add("alertdanger");
					return false;
				}
				else 
				{
					return true;
				}
			}
			
		</script>
		<form action="includes/signup.inc.php" method="post" class="signupform" onsubmit="return validate()">
			<div id="alert-box">
			</div>
			<div class="form-group form-box">
				<label for="name" class="form-label"><i class="fa fa-user" aria-hidden="true"></i> Username</label><br>
				<input type="text" id="name" name="name" class="form-control form-input" placeholder="username" required>
	 		</div>
			<div class="form-group form-box">
				<label for="email" class="form-label"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email-Address</label><br>
				<input type="text" id="email"  name="email" placeholder="email-id"  class="form-control form-input" required>
			</div>
			<div class="form-group form-box">
				<label for="pwd" class="form-label"><i class="fa fa-key" aria-hidden="true"></i> Password</label><br>
				<input type="Password" id="pwd"  name="pwd" placeholder="password"  class="form-control form-input" required>
			</div>
			<div class="form-group form-box">
				<label for="pwd_repeat" class="form-label"><i class="fa fa-key" aria-hidden="true"></i> Password</label><br>
				<input type="Password" id="pwd_repeat"  name="pwd_repeat" placeholder="Re-enter password "  class="form-control form-input" required>
			</div>
			<div>
				<p>Already have an account? <a href="login.php">Login</a></p>
			</div>
				<button type="submit" name="submit" class="submitbutton">submit</button>
		</form>
		<script type="text/javascript">
			const queryString = window.location.search;
			const urlParams = new URLSearchParams(queryString);
			const error = urlParams.get('signup')
			if(error=="sql___error")
			{
					document.getElementById("alert-box").innerHTML="ERROR-Try again!";
					document.getElementById("alert-box").classList.add("alertdanger");
			}
			else if(error=="username_not_available")
			{
					document.getElementById("alert-box").innerHTML="Username not available!";
					document.getElementById("alert-box").classList.add("alertdanger");
			}
			else if(error=="success")
			{
				alert("success!");
			}
		</script>
	</main>
</body>