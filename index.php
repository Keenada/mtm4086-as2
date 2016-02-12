<?php
	include_once('session/session-check.php');
?>

<!doctype html>
<html lang="en">
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mad Libs</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/home.js"></script>
</head>

<body>
	<div class="row rowse">
        <div class="col-md-12 header-back"></div>
        <div class="col-md-12 header-top">
            <div class="head-img">
                <img src="pictures/Mad-Libs.png" alt="Mad Libs">
            </div>            
            <div class="legend">Mad Libs Generator</div>
            <div class="legend" id="slogan">Let your imagination do the talking!</div>
        </div>
    </div>
    <div class="row rowse">
        <div class="col-md-12 welcome">
            <div class="intro">Welcome to Mad Libs Generator!</div>
            <div class="int-para">
             We are a little ____________ but we hope you have fun. Give us a ____________ and have fun using your ____________ . Mad Libs loves to have ____________ and we know you will too! Take a look at our ____________ and lose your self with the power of ____________ and ____________ . 
            </div>
        </div>
    </div>
    <div class="row rowse" id="spacer"></div>
    <div class="row rowse" id="body-con">
        <div class="col-md-6 create">
            <div class="create-title">Try Our Generator!</div>
            <div class="create-info">Click the button below and get taken to our Mad Lib gnerator fill out a form with nouns, adjective, verbs, names, etc. and see them placed within a Mad Libs Story!. Have fun and be creative. Remember: in the world of Mad Libs anything and everything can be a story!</div>
            <button type="submit" class="btn btn-default center-block form">MAD LIBS!</button>
        </div>
        <div class="col-md-6 test">
            <div class="create-title">Testamonials</div>
            <div class="rickity-rick col-sm-12">
                
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <div class="ricky pics"></div>
      <div class="carousel-caption">
          <h3>
                <blockquote>
                    <p>M...Mmmm...Morty *blurp* what is this stupid game? Whabba lubba dub dub!</p>
                    <footer>Rick Sanchez</footer>
                </blockquote>
          </h3>
      </div>
    </div>
    <div class="item">
        <div class="micky pics"></div>
      <div class="carousel-caption">
          <h3>
                <blockquote>
                    <p>Look at Me! I'm Mr. Meekseeks! Oh Boy!</p>
                    <footer>Mr. Meekseeks</footer>
                </blockquote>
          </h3>
      </div>
    </div>
    <div class="item">
    <div class="jerry pics"></div>
      <div class="carousel-caption">
          <h3>
                <blockquote>
                    <p>Beth! Morty! Summer! What is this game? I'm confused!</p>
                    <footer>Jerry</footer>
                </blockquote>
          </h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->
            </div>
        </div>
    </div>
    <div class="ham-btn">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="side-bar" data-state="closed">
        <div class="link-wrapper">
            <a class="links homer">Home</a>
            <a class="links former">Mad Libs Generator</a>
            <a class="links">About</a>
            <a href="http://www.madlibs.com/"  target="_blank" class="links">Mad Libs Website</a>
        </div>
    </div>
</body>
</html>