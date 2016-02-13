<?php

	include_once('includes/session.php');
    include_once("includes/header.php");

?>
    

        
        <div id="main">
        <h2>Usability Testing Center</h2>
        	<div id="pCont">
        		<p>Hello and Welcome to the <span class="logo">koskicreations</span> usability test center. You are here because we needed the best, and you ARE IT!. You will be taking part in a variety of different usability tests to insure our products are top quality. During your 6 month stay, feel free to take part in some of our leisure activities like laying by the pool, rock stacking, and our special cake baking classes. <br>
Your first test starts right here! So when you're ready, scroll down to the big red button, click it, and you can start the first test.
                </p>
        	</div>
            
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:30px;">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                     <h3>Enjoy a swim at the pool!</h3>
                      <img src="images/pool.jpg" alt="Pool side">
                      
                    </div>

                    <div class="item">
                     <h3>Have a nice massage.</h3>
                      <img src="images/massage.jpg" alt="Massage">
                      
                    </div>

                    <div class="item">
                     <h3>Make a cake!</h3>
                      <img src="images/cake.jpg" alt="Cake">
                      
                    </div>

                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
            </div>
            
            <h2>Meet the test assistants!</h2>
            <div class="card col-xs-12 col-sm-6 col-md-3">
              <img class="card-img-top" src="images/s1.jpg" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">John Wilding</h4>
                <p class="card-text">John has been here since the begining. He has helped us test over 300 products and I don't think he's going anywhere anytime soon.</p>
              </div>
            </div><div class="card col-xs-12 col-sm-6 col-md-3">
              <img class="card-img-top" src="images/s2.jpg" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Mark McFinn</h4>
                <p class="card-text">Mark is the doctor. He's the guy you call over or go see if you get hurt during any of these tests. </p>
              </div>
            </div><div class="card col-xs-12 col-sm-6 col-md-3">
              <img class="card-img-top" src="images/s3.jpg" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Old Billy</h4>
                <p class="card-text">We're not quite sure why Old Billy is here. One day he walked in and asked for a job and we said "SURE!". So we brought him in, gave him a lab coat, and sat him on the bench.</p>
              </div>
            </div><div class="card col-xs-12 col-sm-6 col-md-3">
              <img class="card-img-top" src="images/s4.jpg" alt="Card image cap">
              <div class="card-block">
                <h4 class="card-title">Liddy Sergio</h4>
                <p class="card-text">Liddy is one of our top test assistance. Don't ask her too many questions tho. She doesn't like that.</p>
              </div>
            </div>
            
            

            <div class="btnContainer clearfix">
            	<input type="submit" class="btn" value="START TEST">
            </div><!--btnContainer-->

        </div><!--main-->
        
        <?php
			include_once("includes/footer.php");
		?>
      
        
    </div>
<script src="scripts/welcome.js"></script>
</body>
</html>