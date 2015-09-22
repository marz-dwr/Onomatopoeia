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
		else if($request == "viewjobcategory"){
			include_once('pages/jobcategory.php');
		}
		else if($request == "viewmessages"){
			include_once('pages/messages.php');
		}
	}
