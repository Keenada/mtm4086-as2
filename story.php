<?php
	include_once('includes/session.php');
	

	if(!isset($_POST['city'])){

		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'blanks.php';
	
		
	}
    session_destroy();

?>



     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>form</title>
          
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
                
           <?php
                echo "<p> There once was a girl named Stella. Stella lives in the beautiful city of" . $_POST['city'] . " One day while walking through the streets of" . $_POST['city'] . "with her favourite red balloon, she came across a very" . $_POST['adjective'] . $_POST['animal'] . ". The " . $_POST['animal'] . " started ". $_POST['action_verb'] . " towards Stella. Stella began to " . $_POST['action_verb2'] .  "in the other direction. Stella then tripped over a " . $_POST['noun'] . " and hit her " . $_POST['body_part'] . ". Because of this, Stella let go of her balloon and it floated off into the sky. Stella is extremely " . $_POST['feeling'] . ". The " . $_POST['animal'] . " however, did not mean to scare Stella, he felt so bad that he went out and bought her a " . $_POST['item'] . "</p>";
                
                ?>
                
            </main>
            <div class="col-md-2"></div>
            </div>
            
</body>