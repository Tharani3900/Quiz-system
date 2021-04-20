<?php 
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    	<!-- Required meta tags -->
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

        <!-- title -->
		<title>Header</title>
  </head>
  <body>

    
        <nav class="navbar navbar-expand-md  bg-dark my-navbar">
          <div class="navbar-brand my-navbar-brand">
              <p class="brand">Quizzz</p>
          </div>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarmenu">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarmenu">
            <div class="navbar-nav ml-auto my-navbar-nav" >
                <div class="nav-item">
                    <a href="userindex.php" class="nav-link">Practice</a>
                </div>
                <div class="nav-item">
                    <a href="Highscores.php" class="nav-link">Highscore</a>
                </div>
                <div class="nav-item">
                    <?php if(  isset($_SESSION['logged_in'])  &&   $_SESSION['logged_in']==true) : ?>
                    <a href="#" class="nav-link"><?php echo $_SESSION['name']; ?></a>
                    <?php endif; ?>
                </div>
                <div class="nav-item">
                    <?php if(  isset($_SESSION['logged_in'])  &&   $_SESSION['logged_in']==true) : ?>
                    <a href="includes/logout.php" class="nav-link">Logout</a>
                    <?php endif; ?>
                </div>
            </div>
          </div>
        </nav>


  </body>
</html>