<?php
session_start();
include_once("../finishit.php");
if(x_validateget("cmd") && x_validatesession("XCAPE_HACKS") && x_validatesession("LOGIN-TOKEN-GENERATOR")){
	
	$cmd = xg("cmd"); // filtering options
	$pageTokens = x_session("XCAPE_HACKS");
	$user_id = x_session("IQGAMES_ID_2018_VISION"); // current logged-in user
	$pgtokens = x_session("LOGIN-TOKEN-GENERATOR"); // current logged-in user
	
	if($cmd == "setup-exam"){
		include("setup-exampro.php"); // new exam setup
	}	
	
	if($cmd == "fetch-exams_settings"){
		include("exams_setting_loader.php"); // new exam setup
	}
	
}else{
	x_print("Parameters validation failed!");
}

?>