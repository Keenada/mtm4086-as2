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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="wrapper" class="container">
    
    	<?php
			include_once("includes/header.php");
		?>
        
        <div id="main">
        	<div id="pCont">
        		<p>The road to the bartenders dwelling has many twists and turns. <br>If you decide to quickly, he's bound to get fed up and your bar story will sound rather strange. <br><br>
        		I know what your thinking, could it be the booze? <br>
        		Although there's no telling for sure, be rest assured, the bartender will make you laugh! </p>
        	</div>
            
            <div class="col-sm-2"></div>
            
            <div class="col-sm-8" id="storyCont">
            
            	<?php
					
					echo "<p>A <span>" . $_POST['noun-plural-1'] . "</span> walks into a bar and orders a beer, then looks into his <span>" . $_POST['place-1'] . "</span>. He does this over and over again.<br>
							Finally, the bartender asks why he orders a beer and after drinking it he looks into his <span>" . $_POST['place-1'] . "</span>. <br> The <span>" . $_POST['noun-plural-1'] . "</span> responded, I have a picture of my <span>" . $_POST['noun-1'] . "</span> in there and when it starts to look <span>" . $_POST['noun-plural-2'] . "</span> then I'll go home.<br><br>

							A very intoxicated man was bordering on absurd, when all of a sudden he stood up to leave the bar and fell flat on his face. <br> He tried to stand up again, but fell face first into <span>" . $_POST['noun-2'] . "</span> <br> Screw it he thought, I'll just crawl home. <br> The next morning, his wife found him on the <span>" . $_POST['adjective-1'] . "</span> asleep. <br>
								You went out drinking last night, didn't you? she said. <br> Uh yes he said sheepishly, how did you know? <br> You left your <span>" . $_POST['verb-1'] . "</span> at the bar again! <br><br>

							A <span>" . $_POST['number-1'] . "</span> comes into a bar and asks the bartender for <span>" . $_POST['body-part-plural-1'] . "</span>. The bartender thinks, This guys pretty pretentious and proceeds to pour him a drink of six-year-old scotch. <br>

							He gives it to the customer who takes a drink, exclaiming <br> this isn't <span>" . $_POST['body-part-plural-1'] . "</span>, this is six-year-old scotch! <br>
							<br>The bartender thinks, hey this guy knows what he's talking about, and the two of them get into a conversation about where the customer is from. <br>
							<br> At one point an old guy, who was sitting at the other end of the bar <br> comes over with a glass and hands it to the customer <br> who takes a drink then spits it out. <br> 

							This is <span>" . $_POST['verb-2'] . "</span>! he yells. <br>
							The old guy nods and says, Yeah but how old am I?</p>";
				?>
            </div>
            <div class="col-sm-2"></div>
        </div><!--main-->
        <?php
			include_once("includes/footer.php");
		?>
        
    </div><!--wrapper-->
</body>
</html>