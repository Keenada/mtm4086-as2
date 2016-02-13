<?php
	/*include_once('includes/session.php');*/

    session_start();
    
    $name1 = $_SESSION['name-1'];
    $noun1 = $_SESSION['noun-1'];
    $verb1 = $_SESSION['verb-1'];
    $color1 = $_SESSION['color-1'];
    $adjective1 = $_SESSION['adjective-1'];
    $verbPast = $_SESSION['verb-past'];
    $adjective2 = $_SESSION['adjective-2'];
    $color2 = $_SESSION['color-2'];
    $number1 = $_SESSION['number-1'];
    $noun2 = $_SESSION['noun-2'];
    $adjective3 = $_SESSION['adjective-3'];
    $pluralNoun1 = $_SESSION['plural-noun-1'];

    $_SESSION['adjective-4'] = $_POST['adjective-4'];
    $_SESSION['noun-3'] = $_POST['noun-3'];
    $_SESSION['plural-noun-2'] = $_POST['plural-noun-2'];
    $_SESSION['plural-noun-3'] = $_POST['plural-noun-3'];
    $_SESSION['body-part'] = $_POST['body-part'];
    $_SESSION['emotion'] = $_POST['emotion'];
	
	session_destroy();
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

                    <div class="col-sm-8" id="storyCont">

                        <?php

                            echo "<p class='story'>On November 6, 1975, " . $name1 . "  had finished working and was walking home when a large glowing object that resembled a " . $noun1 . " appeared floating in the sky above a clearing. " . $name1 . " attempted to " . $verb1 . " when a " . $color1 . " beam struck out of the " . $adjective1 . " object and " . $verbPast . " " . $name1 .  ". " . $name1 . " was helpless as they were abducted by the aircraft. Inside, " . $name1 . " was met with " . $adjective2 . " beings with " . $color2 . " skin who had " . $number1 . " eyes and " . $noun2 . " shaped bodies. The ship was filled with " . $adjective3 . " " . $pluralNoun1 . " and had a/an " . $_SESSION['adjective-4'] . " smell. One of the beings pointed a " . $_SESSION['noun-3'] . " at " . $name1 . " and blasted them with " . $_SESSION['plural-noun-2'] . " leaving them paralyzed. " . $name1 . " was then laid down on an operating table. As " . $name1 . " lay there paralyzed, the beings inserted " . $_SESSION['plural-noun-3'] . " into " . $name1 ."’s " . $_SESSION['body-part'] . ". "  . $name1 . " screamed with " . $_SESSION['emotion'] . ". " . $name1 . " has no memory of the following events. " . $name1 . " reappeared five days later, returning with apparent weight loss and a story about his time inside the UFO. Doctors had to remove the " . $_SESSION['plural-noun-3'] . " from " . $name1 . "’s " . $_SESSION['body-part'] . ".</p>";
				
				        ?>

                    </div>

                    <div class="col-sm-2"></div>

                </div>

                <div class="row">
                    <div class="btnContainer col-xs-12">
                        <input type="submit" class="btn" value="Back">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card card-block">
                            <h3 class="card-title">UFO Sightings</h3>
                            <p class="card-text">Thousands of UFO sighting reports from around world can be found here.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card card-block">
                            <h3 class="card-title">Alien Artifacts</h3>
                            <p class="card-text">Did ancient aliens bring civilization to man? See a collection of alien artifacts.</p>
                            <a href="#" class="btn btn-primary">Learn more</a>
                        </div>
                    </div>
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
        <script>
            $(document).ready(function () {

                $(".btn").on('click', function () {
                    window.location.href = "index.php";
                });

            });
        </script>

    </body>

    </html>