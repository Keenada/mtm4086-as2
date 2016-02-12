<?php 

    $class="page-1";
    $err="";


    //Start a session
    session_start();


    //Check to see if the start button was clicked
    //If it was, change the class from page-1 to page-2
    if(isset($_POST['start-btn'])){
        $class="page-2";
    }

    //Check to see if the create button was selected, validate the form fields
    if(isset($_POST['create-btn'])){
    
	//Check if all fields are filled
    if(($_POST["noun-1"]) != "" && ($_POST["noun-2"]) != "" && 
       ($_POST["adjective-1"]) != "" && ($_POST["place-1"]) != "" && 
       ($_POST["adjective-2"]) != "" && ($_POST["adjective-3"]) != "" &&
       ($_POST["weapon"]) != "" && ($_POST["number"]) != "" && ($_POST["verb"]) != ""){
        
       $class="page-3";	
        
    } else {   
        $err= "Please fill in the fields";
        $class="page-2";
    }
        

    //Couldn't get this to work:

    /*// required fields
    $required = array('noun-1', 'noun-2', 'adjective-1', 'place-1', 'adjective-2', 'adjective-3', 'weapon', 'number', $_POST['KLFJHSOD']);

   
    //Loop through text fields
    //Check to see if create button is clicked
    //If they are filled, change class from page-2 to page-3

    foreach($required as $v){ 

        if(isset($_POST[$v])){
                
                $class="page-3";

            } else {
                $class="page-2";
                $err = '<p>STOOOOP</p>';    //add error message
        }

    } */   
        
   
    } 

    //Check if the back button was clicked, if it was, show the user the first page and destroy the session
   if(isset($_POST['back-btn'])){
        $class="page-1";
        session_destroy();
    }


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
      
      
    <!-- Scripts -->  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
      
    <!-- Custom Scripts-->
    <script src="scripts/story-script.js"></script>  

    <!-- Bootstrap Links -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      
      <script>$('.carousel').carousel({
          interval: 2000
        })</script>
   
    <!-- Custom CSS --> 
    <link rel="stylesheet" href="story-styles.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>  
      
  </head>
  <body>
    <header>
        <h1><a href="story-index.php"><img src="imgs/wolf-03.svg"></a>Stories for Realists</h1>
    </header>
    <div class="content">  
        <?php  if ($class =='page-1'){ ?>  
        <div class="page-1">
        <div class="row">
            <div class="col-xs-12">
                 <h2>Welcome!</h2>
            </div>    
        </div>
        <div class="row">
           <div class="col-xs-12 col-sm-8"> 
                <p>Ah, the pleasures of reading a good story...</p>
                <p>Nothing quite matches the joy of a light-hearted, feel good anecdote. Except, maybe, the truth. Life is not a fairytale. There aren't any wizards or fairy-godmothers to bail us out of dire situations. No genies or princes turned frogs to grant our wishes. We have to face the cold, hard world on our own. We have to work endlessly to achieve our goals. Why do we fill our heads with nonsense that does nothing but build up our expectations and our sense of entitlement? Our children have become numbed to the harsh reality that 9 times out of 10 things won't work out in their favour. Click the start button below to build a story with a real moral.</p><br>
               
               <blockquote>“The secret of happiness is to face the fact that the world is horrible, horrible, horrible.” ― Bertrand Russell</blockquote>

               <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">   
                    <input type="submit" id="start-btn" name="start-btn" value="Start">
                </form>    
            </div>
            <div class="col-xs-12 col-sm-4">
                 <img src="imgs/trees-02.svg">
            </div>    
            </div>  
        </div>
        <?php } ?>   

        <?php  if ($class =='page-2'){ ?> 
        <div class="page-2">  
            <form method="post" id="myForm" action="<?php $_SERVER["PHP_SELF"] ?>">
                <h2>Enter the following</h2>          
                <div class="col-xs-12">
                    <img class="book img" src="imgs/book-01.svg">
                </div>  
                <div class="form-inline">
                    <div class="char-box">    
                        <h3>Pick a Character:</h3>
                            <p>Pig</p>
                            <input type="radio" id="pig" name="noun-1" value="pig" checked>
                               <p>Sloth</p>
                            <input type="radio" id="sloth" name="noun-1" value="sloth">
                               <p>Unicorn</p>
                            <input type="radio" id="unicorn" name="noun-1" value="unicorn">
                    </div>    
                </div>

                <div class="form-group">
                     <div class="form-inline">
                        <span class="icon"><img class="small-icon" src="imgs/book_icon-02.svg"></span>
                        <input type="text" id="adjective-1" class="form-control" name="adjective-1" placeholder="noun">
                    </div>
                </div> 

                <div class="form-group">
                    <div class="form-inline">
                        <span class="icon"><img class="small-icon" src="imgs/house_icon-03.svg"></span>
                        <input type="text" id="place-1" class="form-control" name="place-1" placeholder="place or thing">
                    </div>
                </div> 

                <div class="form-group">
                    <div class="form-inline">
                        <span class="icon"><img class="small-icon" src="imgs/book_icon-02.svg"></span>
                        <input type="text" id="adjective-2" class="form-control" name="adjective-2" placeholder="adjective">
                    </div> 
                </div> 

                <div class="form-group">
                    <div class="form-inline">
                        <span class="icon"><img class="small-icon" src="imgs/book_icon-02.svg"></span>
                        <input type="text" id="adjective-3" class="form-control" name="adjective-3" placeholder="adjective">
                    </div>
                </div> 

                <div class="form-group">
                    <div class="form-inline">
                        <span class="icon"><img class="small-icon" src="imgs/book_icon-02.svg"></span>
                        <input type="text" id="noun-2" class="form-control" class="form-control" name="noun-2" placeholder="noun, plural">
                    </div>
                </div> 

                <div class="form-group">
                    <div class="form-inline">
                        <span class="icon"><img class="small-icon" src="imgs/axe_icon-05.svg"></span>
                        <input type="text" id="weapon" class="form-control" name="weapon" placeholder="weapon">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-inline">
                        <span class="icon"><img class="small-icon" src="imgs/pound_icon-04.svg"></span>
                        <input type="text" id="number" class="form-control" name="number" placeholder="number larger than one">
                    </div>    
                </div> 

                <div class="form-group">
                    <div class="form-inline">
                        <span class="icon"><img class="small-icon" src="imgs/book_icon-02.svg"></span>
                        <input type="text" id="verb" class="form-control" name="verb" placeholder="verb, past-tense">
                    </div>    
                </div>  
                
               <input type="submit" id="create-btn" name="create-btn" value="Create">
                
                 <?php     
                    if(isset($err)){
                        echo "<div class='err-msg'> $err </div>";
                    } ?>
            </form>
        </div>
        <?php } ?>        

        <?php  if ($class =='page-3'){ ?>  
        <div class="page-3">
            <div class="story-box">
                <h1>YOUR STORY</h1>
                <div class="row">
                    <div  class='col-sx-4 col-sm-4'>
                        <img class="character img" src="imgs/<?php echo $_POST['noun-1'] ?>.svg">
                    </div>    
                    <?php
                        echo
                            "<div  class='col-sx-8 col-sm-7'><p>Once upon a time there was a little " . $_POST['noun-1'] . " that lived in a " . $_POST['adjective-1'] . " " . $_POST['place-1'] . " in the hills. He was very " . $_POST['adjective-2'] . " and " . $_POST['adjective-3'] . ", and lived a happy, peaceful life. One day, the little " . $_POST['noun-1'] . " decided to go visit his cousin in the city. His trip took him through a dense forest filled with aggressive " . $_POST['noun-2'] . " However, he was prepared! He had smartly packed a/an " . $_POST['weapon'] . " in his bag before he left. During his walk through the forest, the little " . $_POST['noun-1'] . " bumped into a gigantic wolf with " . $_POST['number'] . " big teeth. The wolf gobbled up his bag in one bite! He " . $_POST['verb'] . " as fast as he could to get away from being eaten…  but didn’t make it. Life’s tough so be smarter than the little " . $_POST['noun-1'] . ". The end.</p></div>";
                    ?>
                </div>
                <div class="row">
                    <div class="wteeth">
                        <img class="wolf img col-md-6" src="imgs/angry-wolf.svg">
                        <img class="teeth img col-md-6" src="imgs/teeth-05.svg">
                    </div>
                </div>
                <form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">   
                    <input type="submit" id="back-btn" name="back-btn" value="Do It Again!">
                </form>
            </div>
        <?php } ?>
      </div>
    <footer>
        <p>&#169; REALISTS' FOUNDATION FOR A REALER FUTURE</p
    </footer>    
    </div>    
 
      
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>