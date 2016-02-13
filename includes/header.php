<header>
    <?php include_once("includes/nav.php"); ?>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <img class="first-slide" src="images/bar.jpeg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Beer</h1>
              <p>The cause of, and solution to, all of life's problems.</p>
              <p><div class="btnContainer">
            	<input type="submit" class="btn" value="Talk to your Bartender">
            </div><!--btnContainer--></p>
            </div>
          </div>
        </div>
        <div class="item active">
          <img class="second-slide" src="images/beerslinedup.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Wait..</h1>
              <p>So the bartender said what?</p>
              <p><div class="btnContainer">
            	<input type="submit" class="btn" value="Talk to your Bartender">
            </div><!--btnContainer--></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/whiskey.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>It's the Weekend!</h1>
              <p>When you think you've heard it all!</p>
              <p><div class="btnContainer">
            	<input type="submit" class="btn" value="Talk to your Bartender">
            </div><!--btnContainer--></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</header>