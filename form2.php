<?php
	include_once('includes/session.php');
    include_once("includes/header.php");

    $_SESSION['noun1'] = $_POST['noun1'];
    $_SESSION['emotion1'] = $_POST['emotion1'];
    $_SESSION['fm1'] = $_POST['fm1'];
    $_SESSION['fm2'] = $_POST['fm2'];
    $_SESSION['emotion2'] = $_POST['emotion2'];
?>

<body>
	<div id="wrapper" class="container">
    
        
        <div id="main">
        	<div id="pCont">
        		<p>If you noticed that your hands have turned bright pink that is most likely due to an allergic reaction to the super slick gel that was put on they keyboard. This super slick gel is supposed to help you type faster, but, if your hands get hot and sweaty, it can cause your hands to turn bright pink. Even if you did this test on a mobile device, the front-end web designers managed to get the gel on your mobile keyboard too. So if your hands are pink, just flag down a test assistant, and they will get Mark in here to give you that antidote. Once your hands are all set, you can start this next test. </p>
        	</div>
            
            <div class="col-sm-12">
            
            	<div id="prog" class="col-sm-10">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        </div>
                        <span>0%</span>
                    </div>
                </div>

            	<form action="form3.php" role="form" method="post">
                
            	<div class="col-xs-12">
                    
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="fm3">Family Memeber:</label>
                        <input type="text" id="fm3" name="fm3" class="form-control" placeholder="eg. mom, dad, uncle...">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="verb-1">Verb:</label>
                        <input type="text" id="verb-1" name="verb-1" class="form-control" placeholder="eg. sneeze, spin, sit...">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="place1">Place:</label>
                        <input type="text" id="place1" name="place1" class="form-control" placeholder="eg. Paris, Ottawa, The Moon...">
                    </div>
                    <div class="form-group col-xs-12 col-sm-6">
                        <label for="num1">Number:</label>
                        <input type="text" id="num1" name="num1" class="form-control" placeholder="eg. one, two, six hundred fifty...">
                    </div>
                    <div class="form-group col-xs-12">
                        <label for="noun-2">Noun:</label>
                        <input type="text" id="noun-2" name="noun-2" class="form-control" placeholder="eg. house, knife, statue...">
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