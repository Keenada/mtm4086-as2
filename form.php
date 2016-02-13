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
    
    <!--<div class="col-lg-1"></div>-->
            
            <div class="col-sm-12">
            
            	
    
   <form action="newdestiny.php" role="form" method="post">
       
       <div class="col-sm-6 col-lg-4">
           
           <div class="form-group">
                        <label for="name-1">Enemy's Name:</label>
                        <input type="text" id="name-1" name="name-1" class="form-control" placeholder="eg. Spongebob, Batman, Ziggy...">
            </div>
            <div class="form-group">
                        <label for="your-name">Your Name:</label>
                        <input type="text" id="your-name" name="your-name" class="form-control" placeholder="eg. Angela, Calvin, Kanye...">
                    </div>
                    <div class="form-group">
                        <label for="male-name">Male Name:</label>
                        <input type="text" id="male-name" name="male-name" class="form-control" placeholder="eg. Kobe, Anakin, George...">
                    </div>
                    <div class="form-group">
                        <label for="body-part">Body Part:</label>
                        <input type="text" id="body-part" name="body-part" class="form-control" placeholder="eg. finger, nose, leg...">
                    </div>
                    
                    <div class="form-group">
                        <label for="verb">Verb (Past Tense):</label>
                        <input type="text" id="verb" name="verb" class="form-control" placeholder="eg. shot, jumped, called...">
                    </div>
                    
           
           
       </div>
       
       <div class="col-sm-6 col-lg-4">
           
           
           <div class="form-group">
                        <label for="weapon">Weapon:</label>
                        <input type="text" id="weapon" name="weapon" class="form-control" placeholder="eg. gun, grenade, lightsaber...">
            </div>
            <div class="form-group">
                        <label for="adverb">Adverb:</label>
                        <input type="text" id="adverb" name="adverb" class="form-control" placeholder="eg. happily, sadly, annoyingly...">
                    </div>
                    <div class="form-group">
                        <label for="plural-noun">Noun (Plural):</label>
                        <input type="text" id="plural-noun" name="plural-noun" class="form-control" placeholder="eg. hippos, ferraris, teachers...">
                    </div>
                    <div class="form-group">
                        <label for="adjective">Adjective:</label>
                        <input type="text" id="adjective" name="adjective" class="form-control" placeholder="eg. ugly, blue, shiny...">
                    </div>
                    
                    <div class="form-group">
                        <label for="noun">Noun:</label>
                        <input type="text" id="noun" name="noun" class="form-control" placeholder="eg. paper, sun, mouse...">
                    </div>
           
       </div>
       
       <div class="col-sm-12 col-lg-4" id="thirdcolumn">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        </div>
                        <p>You have completed <span>0%</span></p>
                    </div>
        
        <div class="formBtn">
                    <input type="submit" class="btn btn-primary btn-large" value="Destiny Awaits...">
                </div>
                
        <img src="images/vader.svg">
        
        </div><!--End of third column-->    
       
       
       
       
   </form>
      </div>
   
  
   
   
      </div> <!--End of container-->
      
       <?php
			include_once("includes/footer.php");
		?>
   
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
   <script src="scripts/form.js"></script>
  </body>
</html>