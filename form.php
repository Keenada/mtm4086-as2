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
            /*need to add a system to say this is page X e.g. page 2 so displays correct image*/
			include_once("includes/header.php");
		?>
        
        <div id="main">
        	<div id="nds1" class="text-center">
        		<p class="intro"><span class="firstLetter">M</span>ake the changes to save our character!</p>
        	</div><!--nds1-->
            <img class="img-responsive" src="images/border_call.svg">
            <div class="text-center" id="nds2">
            	  <div class="col-sm-2"></div>
            
           
                
            <div class="col-sm-8 text-center">           
            	<form action="story.php" role="form" method="post">
                
            	<div class="col-sm-12 text-center">
                    <div class="form-group">
                        <label for="noun-plural-1">1. Noun (Plural):</label>
                        <input type="text" id="noun-plural-1" name="noun-plural-1" class="form-control" placeholder="eg. cars, doors, plates...">
                    </div>
                    <div class="form-group">
                        <label for="gp-1">2. Group of people:</label>
                        <input type="text" id="gp-1" name="gp-1" class="form-control" placeholder="eg. irish, french, mafia...">
                    </div>
                    <div class="form-group">
                        <label for="con-1">3. Human Condition</label>
                        <input type="text" id="con-1" name="con-1" class="form-control" placeholder="eg. asleep, sick, dead...">
                    </div>
                    <div class="form-group">
                        <label for="celeb-1">4. Male Celebrity:</label>
                        <input type="text" id="celeb-1" name="celeb-1" class="form-control" placeholder="eg. Harrison Ford, Christian Bale, Jesus Christ...">
                    </div>
                    <div class="form-group">
                        <label for="dir-1">5. direction:</label>
                        <input type="text" id="dir-1" name="dir-1" class="form-control" placeholder="eg. left, up, down...">
                    </div>
                    
                    <div class="form-group">
                        <label for="seas-1">6. Season:</label>
                        <input type="text" id="seas-1" name="seas-1" class="form-control" placeholder="eg. spring, winter, summer...">
                    </div>
                    <div class="form-group">
                        <label for="size-1">7. Size:</label>
                        <input type="text" id="size-1" name="size-1" class="form-control" placeholder="eg. large, small, avarage...">
                    </div>
                
                
                    <div class="formBtn btnContainer">
                        <input type="submit" class="btn" value="CONTINUE">
                    </div><!--btnContainer-->
                    </div><!--end of div col-sm-8-->
                </form>
            </div><!--col-sm-8-->
            
            <div class="col-sm-2"></div>
            
                
                
                
                
                    
                
                
                
                </form><!--end of div form-->
            </div><!-- nds2-->
            <img class="img-responsive" src="images/border_call.svg">
        </div><!--main-->
        
        <?php
			include_once("includes/footer.php");
		?>
        
    </div><!--wrapper-->
</body>
</html>