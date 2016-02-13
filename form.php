<?php
	include_once('includes/session.php');
    include_once("includes/header.php");
?>

<body>
	<div id="wrapper" class="container">
    
        
        <div id="main">
        	<div id="pCont">
        		<p>On this first test we are having you test the durability of the keyboard that's right in-front of you. So we will need you to go ahead a fill out the form below. This is a new type of keyboard that's supposed to be really durable. So go ahead and type away! </p>
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
            	<form action="form2.php" role="form" method="post">
                
            	<div class="col-xs-12">
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="noun1">Noun</label>
                        <input type="text" id="noun1" name="noun1" class="form-control" placeholder="eg. car, door, plate...">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="emotion1">Emotion:</label>
                        <input type="text" id="emotion1" name="emotion1" class="form-control" placeholder="eg. happy, sad, confused...">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="fm1">Family Memeber:</label>
                        <input type="text" id="fm1" name="fm1" class="form-control" placeholder="eg. mom, dad, uncle...">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="fm2">Family Memeber:</label>
                        <input type="text" id="fm2" name="fm2" class="form-control" placeholder="eg. mom, dad, uncle...">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="emotion2">Emotion:</label>
                        <input type="text" id="emotion2" name="emotion2" class="form-control" placeholder="eg. happy, sad, confused...">
                    </div>
                    
                </div>

                
                <div class="formBtn btnContainer" style="margin-bottom:20px;">
                    <input type="submit" class="btn" value="NEXT TEST">
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