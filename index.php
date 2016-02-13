<?php
	include_once('includes/session.php');
//	include_once('includes/session.php');
?>

<!doctype html>
<html class="bg">
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
    <script src="scripts/welcome.js"></script>
</head>

<body>

   
   
    <?php
        include_once("includes/nav.php");
    ?>

	<div id="wrapper" class="container-fluid">
    
        
    
    	<?php
			include_once("includes/header.php");
		?>
       
   
        
         <div class="jumbotron">
            <h1>Create A Great Story!</h1>
            <p class="lead">We take pride in creating stories and sharing them with you, but now it's your turn to create a story. Whenever your ready hit the button to continue.</p>
<!--            <p><a class="btn btn-lg btn-danger" href="#" role="button">Let's Begin!</a></p>-->
        </div>
        


                <button type="button" class="btn btn-danger btn-lg btn-block">Let's Begin!</button>
         

<!--
        <div class="row">
            <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Lorem Ipsum!</p>
              
            </div>
            </div>
            </div>
            
            <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Lorem Ipsum!</p>
             
            </div>
            </div>
            </div>
            
            <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <p>Lorem Ipsum!</p>
             
            </div>
            </div>
            </div>
        </div>
-->

<!--
            <div class="btnContainer">
            	<input type="submit" class="btn btn-lg btn-success" value="CHALLENGE DESTINY">
            </div>
-->
            
    
        
        <?php
			include_once("includes/footer.php");
		?>
        
    </div><!--wrapper-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
</body>
</html>