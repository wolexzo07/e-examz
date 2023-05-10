<?php
session_start();
include_once("../../finishit.php");
if(isset($_POST["getitnow"]) && !empty($_POST["getitnow"])){
	
	function hashans($value){
		$salt = "AdvsagssnahaamywuwtyGtHuKiOLk415262540983?@#$%";
		return md5(sha1($value).$salt).md5($value);
	}
	
	$by = x_clean($_SESSION["IQGAMES_ID_2018_VISION"]); // post owner
	$cat = xp("cat"); // course categories
	$q = xp("q"); // questions
	$a = xp("a"); // option a 
	$b = xp("b"); // option b 
	$c = xp("c"); // option c 
	$d = xp("d"); // option d
	
	// checking if option e is enabled
	if(x_count("controllerbase","user_id='$by' AND enable_option_e='1' LIMIT 1") > 0){
		$e = xp("e"); // option e
		$is_enabled = "1";
	}else{
		$e = "";
		$is_enabled = "0";
	}
	
	$correct = hashans(xp("correct"));
	
	$time= x_curtime(0,1);
	
	$create = x_dbtab("questionbank","
		batch_id varchar(255) NOT NULL,
		batch_hashkey text NOT NULL,
		post_id varchar(255) NOT NULL,
		is_option_e_enabled enum('0','1') NOT NULL,
		question_level enum('live','demo') NOT NULL,
		paper_type enum('objective','subjective','yn','tf') NOT NULL,
		category varchar(200) NOT NULL,
		question text NOT NULL,
		score int(11) NOT NULL,
		option_a text NOT NULL,
		option_b text NOT NULL,
		option_c text NOT NULL,
		option_d text NOT NULL,
		option_e text NOT NULL,
		correct_option text NOT NULL,
		timer varchar(200) NOT NULL,
		updated_on varchar(200) NOT NULL,
		status enum('0','1') NOT NULL,
		posted_by varchar(200) NOT NULL,
		os varchar(70) NOT NULL,
		br varchar(200) NOT NULL,
		ip varchar(20) NOT NULL,
		device_info text NOT NULL,
		qtoken text NOT NULL
	","innoDB");
	
	$batch_id = sha1($by).md5(uniqid()).md5($cat);
	$batch_hashkey = ;
	$post_id = ;
	$qtoken = ;
	
	if($create){
		if(x_count("questionbank","question='$q' AND category='' AND  LIMIT 1 ") > 0){
			finish("post_questions","Duplication detected in the databank");
		}else{
			
	x_insert("category,question,option_a,option_b,option_c,option_d,option_e,correct_option,status,timer,posted_by,is_option_e_enabled","questionbank","'$cat','$q','$a','$b','$c','$d','$e','$correct','0','$time','$by','$is_enabled'","<script>alert('Question uploaded successfully');window.location='post_questions';</script>","<script>alert('Failed to upload');window.location='post_questions';</script>");
		
		}
		
		
	}else{
		
		finish("post_questions","Failed to create table");
	}
	
}

?>