<?php
    session_start();
    $name1 = $_SESSION['name-1'];
    $noun1 = $_SESSION['noun-1'];
    $verb1 = $_SESSION['verb-1'];
    $color1 = $_SESSION['color-1'];
    $adjective1 = $_SESSION['adjective-1'];
    $verbPast = $_SESSION['verb-past'];

    $_SESSION['adjective-2'] = $_POST['adjective-2'];
    $_SESSION['color-2'] = $_POST['color-2'];
    $_SESSION['number-1'] = $_POST['number-1'];
    $_SESSION['noun-2'] = $_POST['noun-2'];
    $_SESSION['adjective-3'] = $_POST['adjective-3'];
    $_SESSION['plural-noun-1'] = $_POST['plural-noun-1'];

    if(!isset($_POST['adjective-2'])){

		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'form2.php';
	
		header("Location: http://$host$uri/$extra");
		die();
	}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style2.css" type="text/css">
    </head>

    <body>



        <div class="container">

            <?php
			     include_once("includes/nav.php");
            ?>

                <div class="row lil-ufo-row">
                    <div class="col-md-1 col-sm-2 col-xs-2 lil-ufo-col"><img class="lil-ufos" src="images/UFO.png"></div>
                    <div class="col-md-1 col-sm-2 col-xs-2"><img class="lil-ufos" src="images/UFO2.png"></div>
                    <div class="col-md-1 col-sm-2 col-xs-2"><img class="lil-ufos" src="images/UFO3.png"></div>
                    <div class="col-md-1 col-sm-2 col-xs-2"><img class="lil-ufos" src="images/UFO.png"></div>
                    <div class="col-md-1 col-sm-2 col-xs-2"><img class="lil-ufos" src="images/UFO2.png"></div>
                    <div class="col-md-1 col-sm-2 col-xs-2"><img class="lil-ufos" src="images/UFO3.png"></div>
                    <div class="col-md-1 col-sm-2 col-xs-2"><img class="lil-ufos" src="images/UFO.png"></div>
                    <div class="col-md-1 col-sm-2 col-xs-2"><img class="lil-ufos" src="images/UFO2.png"></div>
                    <div class="col-md-1 col-sm-2 col-xs-2"><img class="lil-ufos" src="images/UFO3.png"></div>
                    <div class="col-md-1 col-sm-2 col-xs-2"><img class="lil-ufos" src="images/UFO.png"></div>
                    <div class="col-md-1 col-sm-2 col-xs-2"><img class="lil-ufos" src="images/UFO2.png"></div>
                    <div class="col-md-1 col-sm-2 col-xs-2"><img class="lil-ufos" src="images/UFO3.png"></div>
                </div>

                <div class="row">
                    <div class="col-sm-2"></div>
                    <p class="intro col-sm-8">
                        Before revealing this top-secret report to you, we require that you pass our security screening questions provided below:
                    </p>
                    <div class="col-sm-2"></div>
                </div>

                <div class="row">

                    <div class="col-sm-2"></div>

                    <div class="col-sm-8">

                        <form action="story.php" role="form" method="post">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="adjective-4">Adjective:</label>
                                    <input type="text" id="adjective-4" name="adjective-4" class="form-control" placeholder="eg. careful, slow, strong...">
                                </div>
                                <div class="form-group">
                                    <label for="noun-3">Noun:</label>
                                    <input type="text" id="noun-3" name="noun-3" class="form-control" placeholder="eg. hoola-hoop, candy cane...">
                                </div>
                                <div class="form-group">
                                    <label for="plural-noun-2">Plural Noun:</label>
                                    <input type="text" id="plural-noun-2" name="plural-noun-2" class="form-control" placeholder="eg. hoola-hoops, candy canes...">
                                </div>
                            </div>
                            <!--col-sm-6-->

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="plural-noun-3">Plural Noun:</label>
                                    <input type="text" id="plural-noun-3" name="plural-noun-3" class="form-control" placeholder="eg. hoola-hoops, candy canes...">
                                </div>
                                <div class="form-group">
                                    <label for="body-part">Body Part:</label>
                                    <input type="text" id="body-part" name="body-part" class="form-control" placeholder="eg. nose, eye, arm...">
                                </div>
                                <div class="form-group">
                                    <label for="emotion">Emotion:</label>
                                    <input type="text" id="emotion" name="emotion" class="form-control" placeholder="eg. joy, agony, sorrow...">
                                </div>
                            </div>

                            <div class="formBtn btnContainer">
                                <input type="submit" class="btn" value="CONTINUE">
                            </div>
                            <!--btnContainer-->

                        </form>
                    </div>
                    <!--col-sm-8-->

                    <div class="col-sm-2"></div>

                </div>

                <div class="row">
                    <div class="col-sm-4"></div>
                    <nav class="pagey col-sm-4">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">3 <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="col-sm-4"></div>
                </div>

                <footer>
                    <p>&copy; Copyright 2016 - MTM4053</p>
                    <!-- Glyphicons support is dropped. Use font-awesome instead. -->
                    <p class="social-icons">
                        <a href="#" data-toggle="tooltip" title="facebook" class="social-icon-item"><i class="fa fa-facebook fa-lg"></i></a>
                        <a href="#" data-toggle="tooltip" title="google plus" class="social-icon-item"><i class="fa fa-google-plus-square fa-lg"></i></a>
                        <a href="#" data-toggle="tooltip" title="linkedin" class="social-icon-item"><i class="fa fa-linkedin-square fa-lg"></i></a>
                    </p>
                </footer>
        </div>
        <div class="pulseLayer">
        </div>



        <!-- jQuery first, then Bootstrap JS. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
        <script src="scripts/jsoverson-jquery.pulse.js-e1044ad/jquery.pulse.js"></script>

    </body>

    </html>