<?php
	include_once('includes/session.php');
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
    <script src="scripts/form.js"></script>
</head>

<body>

    <?php
        include_once("includes/nav.php");
    ?>

	<div id="wrapper" class="container-fluid">
    
    	<?php
			include_once("includes/header.php");
		?>
        
        
         <div class="jumbotron text-center formMe">
            <span class="glyphicon glyphicon-tent" aria-hidden="true"></span><h1>Enter Your Details!</h1>
            
<!--            <p><a class="btn btn-lg btn-danger" href="#" role="button">Let's Begin!</a></p>-->
        </div>
        
        
        <div class="col-sm-12 headerspace">
                    <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        </div>
                        <span>0%</span>
                    </div>
                </div>
        
        
        <form action="story.php" role="form" method="post">
       
            <div class="col-lg-4 col-md-6">
                
                 <div class="form-group">
                        <label for="noun-plural-1">Time (Month/Day/Year):</label>
                        <input type="text" id="noun-plural-1" name="noun-plural-1" class="form-control" placeholder="eg. cars, doors, plates...">
                    </div>
                    <div class="form-group">
                        <label for="noun-1">Adjective: (old,cool)</label>
                        <input type="text" id="noun-1" name="noun-1" class="form-control" placeholder="eg. house, knife, statue...">
                    </div>
                    <div class="form-group">
                        <label for="verb-1">Yes or No:</label>
                        <input type="text" id="verb-1" name="verb-1" class="form-control" placeholder="eg. run, jump, type...">
                    </div>
                    <div class="form-group">
                        <label for="adjective-1">Verb: (eating, sleeping)</label>
                        <input type="text" id="adjective-1" name="adjective-1" class="form-control" placeholder="eg. careful, slow, strong...">
                    </div>
                
                
            </div>
             
            <div class="col-lg-4 col-md-6">
                
                  <div class="form-group">
                        <label for="number-1">Noun: (Paris, Ottawa, etc..)</label>
                        <input type="text" id="number-1" name="number-1" class="form-control" placeholder="eg. six, seventeen...">
                    </div>
                    <div class="form-group">
                        <label for="noun-plural-2">A Number: (7, 100)</label>
                        <input type="text" id="noun-plural-2" name="noun-plural-2" class="form-control" placeholder="eg. cars, doors, plates...">
                    </div>
                    <div class="form-group">
                        <label for="noun-2">Verb: (eating, sleeping)</label>
                        <input type="text" id="noun-2" name="noun-2" class="form-control" placeholder="eg. house, knife, statue...">
                    </div>
                    <div class="form-group">
                        <label for="verb-2">Noun: (a place) </label>
                        <input type="text" id="verb-2" name="verb-2" class="form-control" placeholder="eg. run, jump, type...">
                    </div>
                	
                    
                
            </div>
               
            <div class="col-lg-4 col-md-12">
                
                
                <div class="form-group">
                        <label for="place-1">Noun: (a place)</label>
                        <input type="text" id="place-1" name="place-1" class="form-control" placeholder="eg. Paris, Spark St...">
                    </div>
                    
                   <div class="form-group">
                        <label for="body-part-plural-1">Friends name:</label>
                        <input type="text" id="body-part-plural-1" name="body-part-plural-1" class="form-control" placeholder="eg. arms, hairs, lungs...">
                    </div>
                    
            

            </div>
                
                <div class="col-md-12 headerspace">
                    
                    <button type="submit" class="btn btn-danger btn-lg btn-block">CONTINUE!</button>
                    </form>
                    
                </div>
                
               
        
          
    
<!--                <div class="formBtn btnContainer">-->
<!--                    <input type="submit" class="btn btn-lg btn-danger storybtn" value="CONTINUE">-->
                      
<!--                </div>btnContainer-->
                
            
          
            
           
            
        <!--main-->
        
        <?php
			include_once("includes/footer.php");
		?>
        
    </div><!--wrapper-->
</body>
</html>