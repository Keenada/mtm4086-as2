<?php
	include_once('session/session-check.php');


?>

<!doctype html>
<html lang="en">
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
        <div class="row rowse" id="form-lib">
            <div class="instruction">
                Fill out the form below. Place nouns, verbs, adjectives, etc. in the appropriate fields and see your worlds planted within a Mad Libs!
            </div>
            
            	<form action="madlibs.php" role="form" method="post">
                
            	<div class="form-fix">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="noun-1">Name:</label>
                            <input required type="text" id="noun-1" name="noun-1" class="controller" placeholder="eg. cars, doors, plates...">
                        </div>
                        <div class="form-group">
                            <label for="place-1">State/Province:</label>
                            <input required type="text" id="place-1" name="place-1"  class="controller" placeholder="eg. Omaha, Ontario, Idaho">
                        </div>
                        <div class="form-group">
                            <label for="verb-1">Verb:</label>
                            <input required type="text" id="verb-1" name="verb-1"  class="controller" placeholder="eg. run, jump, type...">
                        </div>
                        <div class="form-group">
                            <label for="noun-2">Noun:</label>
                            <input required type="text" id="noun-2" name="noun-2"  class="controller" placeholder="eg. cars, doors, plates...">
                        </div>
                        <div class="form-group">
                            <label for="prop-1">Proper Name:</label>
                            <input required type="text" id="prop-1" name="prop-1"  class="controller" placeholder="eg. Steve, Bob, Rumpelstiltskin...">
                        </div>
                        <div class="form-group">
                            <label for="verb-2">Verb:</label>
                            <input required type="text" id="verb-2" name="verb-2" class="controller" placeholder="eg. run, jump, type...">
                        </div>
                        <div class="form-group">
                            <label for="noun-3">Noun:</label>
                            <input required type="text" id="noun-3" name="noun-3" class="controller" placeholder="eg. cars, doors, plates...">
                        </div>
                        <div class="form-group">
                            <label for="verb-3">Verb:</label>
                            <input required type="text" id="verb-3" name="verb-3" class="controller" placeholder="eg. run, jump, type...">
                        </div>
                        <div class="form-group">
                            <label for="noun-4">Noun:</label>
                            <input required type="text" id="noun-4" name="noun-4" class="controller" placeholder="eg. cars, doors, plates...">
                        </div>
                        <div class="form-group">
                            <label for="part-1">Part of Body:</label>
                            <input required type="text" id="part-1" name="part-1" class="controller" placeholder="eg. leg, arm, ear...">
                        </div>
                        <div class="form-group">
                            <label for="adj-1">Adjective:</label>
                            <input required type="text" id="adj-1" name="adj-1" class="controller" placeholder="eg. smart, classy, rough...">
                        </div>  
                    </div>

                    <div class="col-md-6 push">
                        <div class="form-group">
                            <label for="rel-1">Relative:</label>
                            <input required type="text" id="rel-1" name="rel-1" class="controller" placeholder="eg. Aunt, Uncle, Niece...">
                        </div>
                        <div class="form-group">
                            <label for="act-1">Activity:</label>
                            <input required type="text" id="act-1" name="act-1" class="controller" placeholder="eg. hopscotch, driving, russian roulette...">
                        </div>
                        <div class="form-group">
                            <label for="chain-1">Chain Resturant:</label>
                            <input required type="text" id="chain-1" name="chain-1" class="controller" placeholder="eg.  McDonalds, Wendy's, Applebee's...">
                        </div>
                        <div class="form-group">
                            <label for="adj-2">Verb (Past Tense):</label>
                            <input required type="text" id="adj-2" name="adj-2" class="controller" placeholder="eg. ran, spun, grabbed...">
                        </div>
                        <div class="form-group">
                            <label for="month-1">Month:</label>
                            <input required type="text" id="month-1" name="month-1" class="controller" placeholder="eg. April, August, November...">
                        </div>
                        <div class="form-group">
                            <label for="verb-4">Verb:</label>
                            <input required type="text" id="verb-4" name="verb-4" class="controller" placeholder="eg. run, jump, type...">
                        </div>
                        <div class="form-group">
                            <label for="noun-5">Noun:</label>
                            <input required type="text" id="noun-5" name="noun-5" class="controller" placeholder="eg. cars, doors, plates...">
                        </div>
                        <div class="form-group">
                            <label for="verb-5">Verb (Past Tense):</label>
                            <input required type="text" id="verb-5" name="verb-5" class="controller" placeholder="eg. ran, spun, grabbed...">
                        </div>
                        <div class="form-group">
                            <label for="adj-3">Adjective:</label>
                            <input required type="text" id="adj-3" name="adj-3" class="controller" placeholder="eg. smart, classy, rough...">
                        </div>
                        <div class="form-group">
                            <label for="verb-6">Verb:</label>
                            <input required type="text" id="verb-6" name="verb-6" class="controller" placeholder="eg. run, jump, type...">
                        </div>
                        <div class="form-group">
                            <label for="noun-plural-1">Plural Noun:</label>
                            <input required type="text" id="noun-plural-1" name="noun-plural-1" class="controller" placeholder="eg. dogs, meteors, moose...">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default center-block sub-btn story">MAD LIBS!</button>
                </div>
                    <div class="nope"></div>
                </form>
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