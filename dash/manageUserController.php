<?php
session_start();
include_once("../finishit.php");
if(x_validateget("cmd") && x_validatesession("XCAPE_HACKS")){
	
	$cmd = xg("cmd"); // filtering options
	$pageTokens = x_session("XCAPE_HACKS");
	
	if($cmd == "lg-validator"){
		include("prologin.php"); // login script imported
	}
	
}else{
	x_print("Parameters validation failed!");
}

?>