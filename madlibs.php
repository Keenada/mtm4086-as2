<?php
	include_once('session/session-check.php');
	
	if(!isset($_POST['noun-1'])){

		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'mad-form.php';
	
		header("Location: http://$host$uri/$extra");
		die();
	}
	
	session_destroy();
?>

<!doctype html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mad Libs</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/home.js"></script>
    <script src="scripts/madform.js"></script>
</head>
<body>
    <div class="row rowse">
        <div class="col-md-12 header-back"></div>
        <div class="col-md-12 header-top">
            <div class="head-img">
                <img src="pictures/Mad-Libs.png" alt="Mad Libs">
            </div>            
            <div class="legend">Mad Libs Generator</div>
            <div class="legend" id="slogan">Let your imagination do the talking!</div>
        </div>
    </div> 
        <div class="instruction">
               Check Out your Story Below and be Sure to check out the Official Mad Libs Website!!!
            </div>
        <div class="mad-libs-story">
            
            	<?php
					
					echo "<p>A <span>" . $_POST['noun-1'] . "</span> in <span>" . $_POST['place-1'] . "</span> was arrested this morning after he <span>" . $_POST['verb-1'] . "</span> a bystander<br>
							in front of  a <span>" . $_POST['noun-2'] . "</span> . <span>" . $_POST['prop-1'] . "</span> , had a history of <span>" . $_POST['verb-2'] . "</span> , but<br>
							no one-not even his <span>" . $_POST['noun-3'] . "</span> -ever imagined he'd <span>" . $_POST['verb-3'] . "</span> with a <span>" . $_POST['noun-4'] . "</span><br>
                            stuck in his <span>" . $_POST['part-1'] . "</span><br>
							
                            I always thought he was <span>" . $_POST['adj-1'] . "</span> , but I never thought he'd do something<br>
                            like this. Even his <span>" . $_POST['rel-1'] . "</span> was surprised.<br>
                            
							After a breief <span>" . $_POST['act-1'] . "</span>, cops followed him to a <span>" . $_POST['chain-1'] . "</span>, where he reportedly<br>
                            <span>" . $_POST['adj-2'] . "</span> in the frying machine.<br>
                            
                            In <span>" . $_POST['month-1'] . "</span>, a woman was charged with a similar crime. But rather than<br>
                            <span>" . $_POST['verb-4'] . "</span> with a <span>" . $_POST['noun-5'] . "</span>, she <span>" . $_POST['verb-5'] . "</span> with a <span>" . $_POST['adj-3'] . "</span><br>
                            dog.<br>
                            
                            Either way. we imagine that after witnessing him <span>" . $_POST['verb-6'] . "</span> with a cat, there<br>
                            are probabaly a whole lot of <span>" . $_POST['noun-plural-1'] . "</span> that are going to need some therapy.</p>";
                            
				?>
                
            </div>
    <div class="ham-btn">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="side-bar" data-state="closed">
        <div class="link-wrapper">
            <a class="links homer">Home</a>
            <a class="links former">Mad Libs Generator</a>
            <a class="links">About</a>
            <a href="http://www.madlibs.com/"  target="_blank" class="links">Mad Libs Website</a>
        </div>
    </div>
</body>
</html>