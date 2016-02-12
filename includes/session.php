<?php
    session_start();

	if(!isset($_SESSION['rap'])){
		
		$s = $_SERVER['PHP_SELF'];
		$pgName = substr($s,strrpos($s,'/')+1);
		
		if($pgName == "index.php"){
			
			$_SESSION['rap'] = "";

		} else {
			$host  = $_SERVER['HTTP_HOST'];
			$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$extra = 'index.php';
	
			header("Location: http://$host$uri/$extra");
			die();
		}
	}
?>