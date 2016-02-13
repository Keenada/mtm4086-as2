<?php
	include_once('includes/session.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="scripts/button.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
     <link href='https://fonts.googleapis.com/css?family=Chewy|Fjalla+One' rel='stylesheet' type='text/css'>
    </head>
    
    <body>
        <div class="wrapper">
           
        <header class="row">
            <div class="col-md-12 "><h1>The Girl Who Lost her Balloon</h1></div>
        </header>
            
         <div class="row">
            <div class="col-md-2"></div>
            <main class="col-md-8">
                <h2>Provide some details for Stella's story in the form below.</h2>
           
            <div class="row">
            <div class="col-md-6">
            <form action="story.php" role="form" method="post">
                <p>City Name:  <input type="text" id="city" name="city" placeholder=" ex: Paris"></p>
                <p>Adjective:  <input type="text" id="adjective" name="adjective" placeholder="ex: Scary"></p>
                <p>Animal:  <input type="text" id="animal" name="animal" placeholder="ex: Tiger"></p>
                <p>Action Verb:  <input type="text" id="action_verb" name="action_verb" placeholder="ex: Crawl"></p>
                <p>Action Verb:  <input type="text" id="action_verb2" name="action_verb2" placeholder="ex: Sprint"></p>
               
           
            </div>
                <div class="col-md-6">
                   
                        <p>Noun:  <input type="text" id="noun" name="noun" placeholder="ex: Rock"></p>
                        <p>Body Part:  <input type="text" id="body_part" name="body_part" placeholder="ex: Arm"></p>
                        <p>An emotion:  <input type="text" id="emotion"  name="emotion" placeholder="ex: Angry"></p>
                        <p>An Object:  <input type="text" id="object" name="object" placeholder="ex: Shoe"></p>
                    </form>
                </div>
        </div>
                
                 <input type="submit" class="btn" value="Stella's Story">
             </main>
            <div class="col-md-2"></div>
            </div>
        

           </div>
    </body>
    
    <footer>
        <p> Disclosure: There were no balloons harmed in the making of The Girl Who Lost Her Balloon.</p>
    </footer>
</html>