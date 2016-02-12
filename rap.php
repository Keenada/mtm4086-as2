<?php
    include_once('includes/session.php');

    if(
        (!isset($_POST['lib-1']) || empty($_POST['lib-1'])) ||
        (!isset($_POST['lib-2']) || empty($_POST['lib-2'])) ||
        (!isset($_POST['lib-3']) || empty($_POST['lib-3'])) ||
        (!isset($_POST['lib-4']) || empty($_POST['lib-4'])) ||
        (!isset($_POST['lib-5']) || empty($_POST['lib-5'])) ||
        (!isset($_POST['lib-6']) || empty($_POST['lib-6'])) ||
        (!isset($_POST['lib-7']) || empty($_POST['lib-7'])) ||
        (!isset($_POST['lib-8']) || empty($_POST['lib-8'])) ||
        (!isset($_POST['lib-9']) || empty($_POST['lib-9'])) ||
        (!isset($_POST['lib-10']) || empty($_POST['lib-10'])) ||
        (!isset($_POST['lib-11']) || empty($_POST['lib-11'])) ||
        (!isset($_POST['lib-12']) || empty($_POST['lib-12'])) ||
        (!isset($_POST['lib-13']) || empty($_POST['lib-13'])) ||
        (!isset($_POST['lib-14']) || empty($_POST['lib-14'])) ||
        (!isset($_POST['lib-15']) || empty($_POST['lib-15'])) ||
        (!isset($_POST['lib-16']) || empty($_POST['lib-16'])) ||
        (!isset($_POST['lib-17']) || empty($_POST['lib-17'])) ||
        (!isset($_POST['lib-18']) || empty($_POST['lib-18'])) ||
        (!isset($_POST['lib-19']) || empty($_POST['lib-19'])) ||
        (!isset($_POST['lib-20']) || empty($_POST['lib-20'])) ||
        (!isset($_POST['lib-21']) || empty($_POST['lib-21'])) ||
        (!isset($_POST['lib-22']) || empty($_POST['lib-22'])) ||
        (!isset($_POST['lib-23']) || empty($_POST['lib-23'])) ||
        (!isset($_POST['lib-24']) || empty($_POST['lib-24'])) ||
        (!isset($_POST['lib-25']) || empty($_POST['lib-25']))
    ){
		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'index.php';
        
		header("Location: http://$host$uri/$extra");
		die();
	}

	session_destroy();
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
        <main class="rap-content">
            <div class="row">

                <div class="vidbg">
                    <video autoplay loop id="bgvid">
                        <source src="video/ItWasAGoodDay.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="col-lg-8 col-lg-offset-2 col-md-12, col-sm-12 rap">
                    <?php echo "<p>Just waking up in the <span class='word'>".$_POST['lib-1']."</span>, gotta thank <span class='word'>".$_POST['lib-2']."</span>. I don't know, but today seems kinda <span class='word'>".$_POST['lib-3']."</span>. No <span class='word'>".$_POST['lib-4']."</span> from the <span class='word'>".$_POST['lib-5']."</span>, no smog, and momma cooked a breakfast with no <span class='word'>".$_POST['lib-6']."</span>. I got my grub on, but I didn't <span class='word'>".$_POST['lib-7']."</span> out. Finally got a call from a girl I want to <span class='word'>".$_POST['lib-8']."</span>. Hooked it up for later as I hit the door, thinking <em>Will I live to see another <span class='word'>".$_POST['lib-9']."</span>?</em> I gotta go 'cause I got me a <span class='word'>".$_POST['lib-10']."</span>, and if I hit the switch I can make the ass <span class='word'>".$_POST['lib-11']."</span>. Had to stop at a <span class='word'>".$_POST['lib-12']."</span>; looking in the mirror, not a <span class='word'>".$_POST['lib-13']."</span> in sight and everything is <span class='word'>".$_POST['lib-14']."</span>. I got a beep from <span class='word'>".$_POST['lib-15']."</span> and she can <span class='word'>".$_POST['lib-16']."</span> all night. Calling up the <span class='word'>".$_POST['lib-17']."</span> and I'm asking y'all, \"Which <span class='word'>".$_POST['lib-18']."</span> are y'all playing <span class='word'>".$_POST['lib-19']."</span>?\". Get me on the <span class='word'>".$_POST['lib-20']."</span> and I'm trouble. Last week, <span class='word'>".$_POST['lib-21']."</span> around and got a <span class='word'>".$_POST['lib-22']."</span>. Freaking <span class='word'>".$_POST['lib-23']."</span> every way like <span class='word'>".$_POST['lib-24']."</span>. I can't believe today was a <span class='word'>".$_POST['lib-25']."</span> day.</p>"; ?>
                </div>
            </div>
        </main>

       <footer>
           <?php include("includes/footer.php") ?>
       </footer>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="js/function.js"></script>
    </body>

    </html>