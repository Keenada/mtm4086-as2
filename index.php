<?php
	include_once('includes/session.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Create your own Destiny</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
      
    <div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
       
    
    <div class="jumbotron" id="home-jumbotron">
  <h1 class="display-3">Create your own Destiny!</h1>
  <p class="lead">Welcome civilian. A war is brewing in the galaxy. Do you have what it takes to save the galaxy from destruction...or will you join the other side? It's up to you. </p>
  <hr class="m-y-2">
  <p class="lead">
    <input type="submit" class="btn btn-primary btn-lg formButton" value="Let's Begin">
  </p>
</div>
   
   
   
   <?php
			include_once("includes/footer.php");
		?>
   
   
   
   
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <script src="scripts/begin.js"></script>
  </body>
</html>