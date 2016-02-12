<?php
	include_once('includes/session.php');
	
	if(!isset($_POST['noun-plural-1'])){

		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'form.php';
	
		header("Location: http://$host$uri/$extra");
		die();
	}
	
	/*session_destroy();*/
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>City in chaos</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/story.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="wrapper" class="container">
    
    	<?php
			include_once("includes/header.php");
		?>
        
       <div id="main">
        	<div id="pCont">
        		<p><span class="pFirst">C</span>ongradulations, You have turned time and changed destiny to be rewritten as you directed them. Take a gander at what your handy work has done for our companion</p>
        	</div>
            
            <img class="img-responsive border-call" src="images/border_call.svg" alt="">
            
            <div class="col-sm-2"></div>
            
            <div class="col-sm-8" id="storyCont">
            
            	<?php
					
					echo "<p>In the city where you must fight to survive. He made his living selling <span>" . $_POST['noun-plural-1'] . "</span><br> on the corner and the <span>" . $_POST['gp-1'] . "</span>, wanted in.<br>
							I don't know who this guy is but i want him and his <span>" . $_POST['noun-plural-1']." ". $_POST['con-1'] . "</span> !<br>
							He had one chance and his chance was to fight back, <span>". $_POST['celeb-1'] ."</span><br>
				            Listen to me these are my <span>" . $_POST['noun-plural-1'] ."</span> and i'm not going to let you take them.<br>
                            A block buster event with double the excitement and tripple the action."."<br> Get <span>" . $_POST['dir-1'] ."</span>...,  get <span>" . $_POST['dir-1'] ."</span> again<br>
                            Coming this <span>". $_POST['seas-1'] ."</span><br><span>". $_POST['celeb-1'] . "</span> is the <span>". $_POST['size-1'] ." ".$_POST['noun-plural-1']."</span> Boy <br>";
                            
                           
				?>
                
            </div>
            
            <div class="col-sm-2"></div>
            
            <img class="img-responsive border-call" src="images/border_call.svg" alt="">
            
        </div><!--main-->
    
    
     <?php
			include_once("includes/footer.php");
      ?>
    </div><!--end of div wrapper-->
</body>
</html>    

