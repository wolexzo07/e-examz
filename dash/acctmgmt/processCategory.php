<?php
include_once("../../finishit.php");
include_once("../../domingos_sp_functions.php"); // Just for domingos
xstart("0");
if(x_validatepost("_token") && x_validatesession("IQGAMES_ID_2018_VISION") && x_validatepost("subject")){
	
	$subject = strtoupper(xp("subject"));
	$userid = x_clean(x_session("IQGAMES_ID_2018_VISION"));
	$time = x_curtime("0","1");
	$timer = x_curtime("0","0");
	$os = xos();$ip = xip();$br = xbr();
	
	$create = x_dbtab("categories","
	department VARCHAR(255) NOT NULL,
	added_by VARCHAR(200) NOT NULL,
	added_on VARCHAR(200) NOT NULL,
	timed_on DATETIME NOT NULL,
	os VARCHAR(100) NOT NULL,
	ip VARCHAR(20) NOT NULL,
	br VARCHAR(100) NOT NULL
	","MYISAM");
	
	if($create){
		
		if(x_count("categories","department='$subject' AND added_by='$userid' LIMIT 1") > 0){
			
			x_print("Subject/course $subject was created before!");
			
		}else{
			x_insert("department,added_by,added_on,timed_on,os,ip,br","categories","'$subject','$userid','$time','$timer','$os','$ip','$br'","Subject/course ($subject) added successfully","Failed to create subject / course");
		}
		
	}else{
		x_print("Failed to create table!");
	}
	
}else{
	x_print("Parameter Missing!");
}

?>