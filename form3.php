<?php
	include_once('includes/session.php');
    include_once("includes/header.php");


    $noun1 = $_SESSION['noun1'];
    $emotion1 = $_SESSION['emotion1'];
    $fm1 = $_SESSION['fm1'];
    $fm2 = $_SESSION['fm2'];
    $emotion2 = $_SESSION['emotion2'];
    $_SESSION['fm3'] = $_POST['fm3'];
    $_SESSION['verb1'] = $_POST['verb-1'];
    $_SESSION['place1'] = $_POST['place1'];
    $_SESSION['num1'] = $_POST['num1'];
    $_SESSION['noun2'] = $_POST['noun-2'];


?>

<body>
	<div id="wrapper" class="container">
    
        
        <div id="main">
        	<div id="pCont">
        		<p>If you have any questions on this last test just let your test assistance know and we’ll get Liddy here to answer any questions you might have. Once your all done, click the RESULTS button below to see how you did.</p>
        	</div>

            
            <div class="col-sm-12">
            
            	<div id="prog" class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        </div>
                        <span>0%</span>
                    </div>
                </div>
            <div id="el">
                
            </div>
            	<form action="story.php" role="form" method="post">
                
            	<div class="col-xs-12">
                    
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="place2">Place:</label>
                        <input type="text" id="place2" name="place2" class="form-control" placeholder="eg. home, bathroom, classroom...">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="noun-3">Noun:</label>
                        <input type="text" id="noun-3" name="noun-3" class="form-control" placeholder="eg. house, knife, statue...">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="fm4">Family Member:</label>
                        <input type="text" id="fm4" name="fm4" class="form-control" placeholder="eg. mom, dad, brother...">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="verb-2">Verb:</label>
                        <input type="text" id="verb-2" name="verb-2" class="form-control" placeholder="eg. sneeze, spin, sit...">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="emotion3">Emotion:</label>
                        <input type="text" id="emotion3" name="emotion3" class="form-control" placeholder="eg. happy, sad, confused...">
                    </div>
                </div>
                

                
                <div class="formBtn btnContainer" style="margin-bottom:20px;">
                    <input type="submit" class="btn" value="RESULTS">
                </div>
                
                </form>
            </div>
            
            
            
            
        </div>
        
        <?php
			include_once("includes/footer.php");
		?>
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="jquery.hexagonprogress.js"></script>
<script src="scripts/form.js"></script>

    </div>
</body>
</html>