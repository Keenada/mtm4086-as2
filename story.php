<?php
	include_once('includes/session.php');
	
	if(!isset($_POST['noun-plural-1'])){

		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'form.php';
	
		header("Location: http://$host$uri/$extra");
		die();
	}
	
	session_destroy();
?>

<!doctype html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Story Generator</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="scripts/story.js"></script>
</head>

<body>

    <?php
        include_once("includes/nav.php");
    ?>    

	<div id="wrapper" class="container-fluid">
    
    	<?php
			include_once("includes/header.php");
		?>
          
            
            
            
            
            <div class="col-sm-12 text-center">
            
             <div class="jumbotron text-center formMe">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span><h1>Your Story Is Ready!</h1>
            
<!--            <p><a class="btn btn-lg btn-danger" href="#" role="button">Let's Begin!</a></p>-->
            </div>
                
                
                <?php
					
                    echo   '<p class="textSEL">';
					echo   "After what seemed like a couple <span>" . $_POST['noun-plural-1'] . "</span>.<br>
							The super <span>" . $_POST['place-1'] . "</span>  cop approached my vehicle and asked me to step outside. <br>
							I replied  <span>" . $_POST['noun-1'] . "</span>  and proceeded to continue<br>
							<span>" . $_POST['noun-plural-2'] . "</span>. The cop was scared by all this and decided he couldn’t handle this on his own and decided to call <br>
							<span>" . $_POST['noun-2'] . "</span>. After he arrived on the scene he asked me <br>
							<span>" . $_POST['adjective-1'] . "</span>questions.  I advised him that all this was taking up too much of my time<br> and I need to return home where I can continue<br>
							<span>" . $_POST['verb-1'] . "</span>. The cop shouted back at me and told me I would be going to pay a visit to<br>
							<span>" . $_POST['number-1'] . "</span>.  I told the cop that it was nice to have a great conversation with him and off I went to <br>
							<span>" . $_POST['body-part-plural-1'] . "</span>.<br>
							That was the end of Officer <span>" . $_POST['verb-2'] . "</span></p>";
				
				?>
                
            
                
            </div>
            
            
    
        
        <?php
			include_once("includes/footer.php");
		?>
        
    </div><!--wrapper-->
</body>
</html>