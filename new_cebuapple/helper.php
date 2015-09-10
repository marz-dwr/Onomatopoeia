<?php

$request = $_POST['request'];

if(isset($request))
	{
		if($request=="viewprofile"){
			include_once('pages/profile.php');
		}
		else if($request == "viewhome"){
			include_once('pages/home.php');
		}
		else if($request == "viewsaved"){
			include_once('pages/savedjobs.php');
		}
	}
