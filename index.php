<?php 
    include_once("includes/session.php"); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rap Libs</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel=stylesheet>
</head>

<body>
    <div class="wrapper">
        <header class="home-header">
            <div class="splash-img"></div>
            <div class="title-plate">
                <h1>Rap Libs</h1>
                <button class="btn btn-primary scroll-home-header">Scroll to drop a beat</button>
            </div>
        </header>
        <main class="home-content">
            <div class="row content-box">
                <div class="col-lg-8 col-lg-offset-2">
                    <p>Fill out all of the feilds and press the submit button. Let the robots put together your jam!</p>
                    <form action="rap.php" role="form" method="post">
                        <div class="row">
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-1"><small>Location</small></label>
                                <input type="text" class="form-control" id="lib-1" name="lib-1">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-2"><small>Famous Person</small></label>
                                <input type="text" class="form-control" id="lib-2" name="lib-2">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-3"><small>Adjective</small></label>
                                <input type="text" class="form-control" id="lib-3" name="lib-3">
                            </fieldset>
                        </div>
                        
                        <div class="row">
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-4"><small>Sound</small></label>
                                <input type="text" class="form-control" id="lib-4" name="lib-4">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-5"><small>Animal</small></label>
                                <input type="text" class="form-control" id="lib-5" name="lib-5">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-6"><small>Animal</small></label>
                                <input type="text" class="form-control" id="lib-6" name="lib-6">
                            </fieldset>
                        </div>
                        
                        <div class="row">
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-7"><small>Animal</small></label>
                                <input type="text" class="form-control" id="lib-7" name="lib-7">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-8"><small>Verb</small></label>
                                <input type="text" class="form-control" id="lib-8" name="lib-8">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-9"><small>Type of Person</small></label>
                                <input type="text" class="form-control" id="lib-9" name="lib-9">
                            </fieldset>
                        </div>
                        
                        <div class="row">
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-10"><small>Noun</small></label>
                                <input type="text" class="form-control" id="lib-10" name="lib-10">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-11"><small>Verb</small></label>
                                <input type="text" class="form-control" id="lib-11" name="lib-11">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-12"><small>Store</small></label>
                                <input type="text" class="form-control" id="lib-12" name="lib-12">
                            </fieldset>
                        </div>
                        
                        <div class="row">
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-13"><small>Race of People</small></label>
                                <input type="text" class="form-control" id="lib-13" name="lib-13">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-14"><small>Alright / Terriable</small></label>
                                <input type="text" class="form-control" id="lib-14" name="lib-14">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-15"><small>Famous Woman</small></label>
                                <input type="text" class="form-control" id="lib-15" name="lib-15">
                            </fieldset>
                        </div>
                        
                        <div class="row">
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-16"><small>Verb</small></label>
                                <input type="text" class="form-control" id="lib-16" name="lib-16">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-17"><small>Group of People</small></label>
                                <input type="text" class="form-control" id="lib-17" name="lib-17">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-18"><small>Place</small></label>
                                <input type="text" class="form-control" id="lib-18" name="lib-18">
                            </fieldset>
                        </div>
                        
                        <div class="row">
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-19"><small>Game</small></label>
                                <input type="text" class="form-control" id="lib-19" name="lib-19">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-20"><small>Setting</small></label>
                                <input type="text" class="form-control" id="lib-20" name="lib-20">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-21"><small>&mdash;ed Verb</small></label>
                                <input type="text" class="form-control" id="lib-21" name="lib-21">
                            </fieldset>
                        </div>
                        
                        <div class="row">
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-22"><small>Accomplishment</small></label>
                                <input type="text" class="form-control" id="lib-22" name="lib-22">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-23"><small>Plural Noun</small></label>
                                <input type="text" class="form-control" id="lib-23" name="lib-23">
                            </fieldset>
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="lib-24"><small>Unsuccessful Athlete</small></label>
                                <input type="text" class="form-control" id="lib-24" name="lib-24">
                            </fieldset>
                        </div>
                        
                        <div class="row">
                            <fieldset class="form-group col-sm-12 col-md-4 col-lg-4 col-lg-offset-4">
                                <label for="lib-25"><small>Adjective</small></label>
                                <input type="text" class="form-control" id="lib-25" name="lib-25"> 
                            </fieldset>
                        </div>
                        
                        <button type="submit" class="btn btn-primary center-block">Submit</button>
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <?php include("includes/footer.php"); ?>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/function.js"></script>
</body>

</html>