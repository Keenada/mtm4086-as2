<?php
	include_once('includes/session.php');
    include_once("includes/header.php");
	
    $noun1 = $_SESSION['noun1'];
    $emotion1 = $_SESSION['emotion1'];
    $fm1 = $_SESSION['fm1'];
    $fm2 = $_SESSION['fm2'];
    $emotion2 = $_SESSION['emotion2'];
    $fm3 = $_SESSION['fm3'];
    $verb1 = $_SESSION['verb1'];
    $place1 = $_SESSION['place1'];
    $num1 = $_SESSION['num1'];
    $noun2 = $_SESSION['noun2'];
    $_SESSION['place2'] = $_POST['place2'];
    $_SESSION['noun3'] = $_POST['noun-3'];
    $_SESSION['fm4'] = $_POST['fm4'];
    $_SESSION['verb2'] = $_POST['verb-2'];
    $_SESSION['emotion3'] = $_POST['emotion3'];
    $place2 = $_SESSION['place2'];
    $noun3 = $_SESSION['noun3'];
    $fm4 = $_SESSION['fm4'];
    $verb2 = $_SESSION['verb2'];
    $emotion3 = $_SESSION['emotion3'];

	session_destroy();
?>

        
        <div id="main">
        	<div id="pCont">
        		<p>Congratulations!! You had completed the super keyboard test. Go ahead and give yourself a pat on the back. You’ve earned it. Thankfully there should have been no side effects from completing that last test. So read your results, click finish, and a Old Billy will be happy to escort you to your next test. Yes, we found him something to do. </p>
        	</div>
            
<!--            <img class="img-responsive border-call" src="images/border_call.svg" alt="">-->
            
            
            <div class="container" id="storyCont">
            
            	<?php
					
					echo "<p>The <span>" . $noun1  . "</span>, of the Olympians, Zeus was  very<span>" . $emotion1 . "</span>, with his<span>" . $fm1 . "</span>, Kronos, because he had eaten Zues and all his brothers and <span>" . $fm2 . "</span>. And Koronos was very <span>" . $emotion2 . "</span> with Zeus and his <span>" . $fm3 . "</span> and sisters because they had <span>" . $verb1 . "</span>,
							from him. Both Zeus and Kronos wanted to rule over the <span>" . $place1 . "</span>, but only <span>" . $num1 . "</span> of them could. So there was a fight! Zeus had his siblings on his side, while Kronos had his, well the Titans. Both sides were evenly matched in the  <span>" . $noun2 . "</span>, until Zeus traveld to the <span>" . $place2 . "</span> and got more <span>" . $noun3 . "</span> from the Cyclops. Then he had his <span>" . $fm4 . "</span> and sisters were able to <span>" . $verb2 . "</span> their father and rule over the world in <span>" . $emotion3 . "</span>.</p>";
				
				?>
                
            </div>
            
<!--            <img class="img-responsive border-call" src="images/border_call.svg" alt="">-->
           <div class="btnContainer clearfix">
            	<input type="submit" class="btn" value="FINNISH">
            </div>
            
        </div><!--main-->
        
        <?php
			include_once("includes/footer.php");
		?>
   <script type="text/javascript">
       $(document).ready(function() {
	
	$(".btn").on('click', function(){
		window.location.href="index.php";
	});
	
});
</script>
    </div><!--wrapper-->
</body>
</html>