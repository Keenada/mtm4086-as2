<?php
    session_start();
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

                        <form action="form2.php" role="form" method="post">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name-1">Name:</label>
                                    <input type="text" id="name-1" name="name-1" class="form-control" placeholder="eg. Fox, Scully, Jean-Luc...">
                                </div>
                                <div class="form-group">
                                    <label for="noun-1">Noun:</label>
                                    <input type="text" id="noun-1" name="noun-1" class="form-control" placeholder="eg. hamburger, dog, circle">
                                </div>
                                <div class="form-group">
                                    <label for="verb-1">Verb:</label>
                                    <input type="text" id="verb-1" name="verb-1" class="form-control" placeholder="eg. run, jump, eat">
                                </div>
                            </div>
                            <!--col-sm-6-->

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="color-1">Color:</label>
                                    <input type="text" id="color-1" name="color-1" class="form-control" placeholder="eg. blue, green, red...">
                                </div>
                                <div class="form-group">
                                    <label for="adjective-1">Noun:</label>
                                    <input type="text" id="adjective-1" name="adjective-1" class="form-control" placeholder="eg. strange, mysterious, ominous...">
                                </div>
                                <div class="form-group">
                                    <label for="verb-past">Verb Past Tense:</label>
                                    <input type="text" id="verb-past" name="verb-past" class="form-control" placeholder="eg. blasted, hovered, healed...">
                                </div>
                            </div>

                            <div class="formBtn btnContainer">
                                <input type="submit" class="btn" value="CONTINUE">
                            </div>

                        </form>

                    </div>

                    <div class="col-sm-2"></div>


                </div>

                <div class="row">
                    <div class="col-sm-4"></div>
                    <nav class="pagey col-sm-4">
                        <ul class="pagination">
                            <li class="page-item active">
                                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>

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