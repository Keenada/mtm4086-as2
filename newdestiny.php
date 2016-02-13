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
       
    <?php
			include_once("includes/header.php");
		?>
   
    <div class="container">
    <div id="newDestiny">
        <?php
            echo "<p>[<span>" . $_POST['name-1'] . "</span> has just cut off <span>" . $_POST['your-name'] . "</span>'s <span>" . $_POST['body-part'] . "</span>, which was holding the <span>" . $_POST['weapon'] . "</span>]<br><span>" . 
$_POST['name-1'] . "</span>: There is no escape! Don't make me destroy you. <span>" . $_POST['your-name'] . "</span>, you do not yet realize your importance. You've only begun to discover your <span>" . $_POST['noun'] . "</span>! Join me, and I will complete your training! With our combined <span>" . $_POST['plural-noun'] . "</span>, we can end this destructive conflict, and bring order to the galaxy.<br><span>" . $_POST['your-name'] . "</span>: [<span>" . $_POST['adverb'] . "</span>] I'll never join you! <br><span>"
. $_POST['name-1'] . "</span>: If only you knew the <span>" . $_POST['noun'] . "</span> of the <span>" . $_POST['adjective'] . "</span> Side. <span>" . $_POST['male-name'] . "</span> never told you what happened to your father.<br><span>
" . $_POST['your-name'] . "</span>: He told me enough! He told me you <span>" . $_POST['verb'] . "</span> him!<br><span>"
. $_POST['name-1'] . "</span>: No, I am your father. <br><span>
" . $_POST['your-name'] . "</span>: [shocked] No. No! That's not true! That's impossible! <br><span>"
. $_POST['name-1'] . "</span>: Search your feelings; you know it to be true! <br><span>
" . $_POST['your-name'] . "</span>: NOOOOOOO! NOOOOOOOO!!!"


        ?>
        
        </div>
        
   
<div class="jumbotron" id="playagain">
  <p class="lead">
    <a class="btn btn-primary btn-lg formButton" href="#" role="button">Play Again</a>
  </p>
  
</div>
  
<h2>Other Stories</h2>
 <div class="col-lg-4 col-sm-6">
        <div class="card card-inverse">
  <img class="card-img" src="images/castle.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4> </h4>
    <a href="#" class="btn btn-primary-outline">Dragon War</a>
  </div>
</div>
        
    </div>   
    
    <div class="col-lg-4 col-sm-6">
        <div class="card card-inverse">
  <img class="card-img" src="images/pirate.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4></h4>
    <a href="#" class="btn btn-primary-outline">Pirate's Life</a>
  </div>
</div>
        
    </div>
    
    <div class="col-lg-4 col-sm-6">
        <div class="card card-inverse">
  <img class="card-img" src="images/map.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4></h4>
    <a href="#" class="btn btn-primary-outline">American Dream</a>
  </div>
</div>
        
    </div>
   
</div><!--End of container-->
   
   <?php
			include_once("includes/footer.php");
		?>
   
   
   
   
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <script src="scripts/begin.js"></script>
  </body>
</html>