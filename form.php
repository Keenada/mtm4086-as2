<?php
	include_once('includes/session.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bartender Says:</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="scripts/form.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id="wrapper" class="container">
    
    	<?php
			include_once("includes/header.php");
		?>
        
        <div id="main">
        	<div id="pCont">
        		<p>You have made a brave choice, traveller. The fates are not always kind to those who challenge them. Complete the information below as you see fit, and discover the rewards for your actions! And the consequences...</p>
        	</div>
            
            <img class="img-responsive border-call" src="images/border_call.svg" alt="">
            
            <div class="col-sm-2"></div>
            
            <div class="col-sm-8">
            
            	<div class="col-sm-12">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        </div>
                        <span>0%</span>
                    </div>
                </div>
            
            	<form action="story.php" role="form" method="post">
                
            	<div class="col-sm-4">
                <h2>Story 1</h2>
                    <div class="form-group">
                        <label for="noun-plural-1">A....</label>
                        <input type="text" id="noun-plural-1" name="noun-plural-1" class="form-control" placeholder="eg. An Animal, person, or thing...">
                    </div>
                    <div class="form-group">
                        <label for="noun-1">His...</label>
                        <input type="text" id="noun-1" name="noun-1" class="form-control" placeholder="eg. Coat, bag, wallet...">
                    </div>
                    <div class="form-group">
                        <label for="verb-1">Looks...</label>
                        <input type="text" id="verb-1" name="verb-1" class="form-control" placeholder="eg. Wife, face, house...">
                    </div>
                </div><!--col-sm-6-->
                
                <div class="col-sm-4">
                <h2>Story 2</h2>
                    <!--next story-->
                    <div class="form-group">
                        <label for="adjective-1">Into something...</label>
                        <input type="text" id="adjective-1" name="adjective-1" class="form-control" placeholder="eg. soup, bushes, monkey cage...">
                    </div>
                    <div class="form-group">
                        <label for="number-1">Object...</label>
                        <input type="text" id="number-1" name="number-1" class="form-control" placeholder="eg. Rock, car, rug...">
                    </div>
                    <div class="form-group">
                        <label for="noun-plural-2">Whip...</label>
                        <input type="text" id="noun-plural-2" name="noun-plural-2" class="form-control" placeholder="eg. Wheelchair LOL, scooter, bike...">
                    </div>
                </div>
                <h2>Story 3</h2>
                <!--next story-->
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="noun-2">Person, animal or thing...</label>
                        <input type="text" id="noun-2" name="noun-2" class="form-control" placeholder="eg. Person, animal or thing...">
                    </div>
                	<div class="form-group">
                        <label for="verb-2">Drink, map, food...</label>
                        <input type="text" id="verb-2" name="verb-2" class="form-control" placeholder="eg. Drink, map or food...">
                    </div>
                    <div class="form-group">
                        <label for="place-1">A liquid...</label>
                        <input type="text" id="place-1" name="place-1" class="form-control" placeholder="eg. Piss, milkshake, soup...">
                    </div>
                    <div class="form-group">
                        <label for="noun-plural-1">A something...</label>
                        <input type="text" id="noun-plural-1" name="noun-plural-1" class="form-control" placeholder="eg. person, animal or thing...">
                    </div>
                </div>
                
                <div class="formBtn btnContainer">
                    <input type="submit" class="btn" value="CONTINUE">
                </div><!--btnContainer-->
                
                </form>
                <br><br>
            </div><!--col-sm-8-->
            
            <div class="col-sm-2"></div>
            
        </div><!--main-->
        <?php
			include_once("includes/footer.php");
		?>
        
    </div><!--wrapper-->
</body>
</html>