<?php
	include_once('includes/session.php');
?>

<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bartender Says:</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="scripts/welcome.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="wrapper" class="container">
    
    
    	<?php
			include_once("includes/header.php");
		?>
        
        <div id="main">
        	<div id="pCont">
        		<p>Welcome thirsty traveller, this is where you will fill that time waiting for your date, or friends to arrive. Fill out the the form on the next page and find out why bar jokes are a timeless classic!
                <br>
				<?php
                
					
				
				?></p>
        	</div>
            <div class="btnContainer">
            	<input type="submit" class="btn" value="Talk to your Bartender">
            </div><!--btnContainer-->
        </div><!--main-->
        
        <?php
			include_once("includes/footer.php");
		?>
        
    </div><!--wrapper-->
</body>
</html>