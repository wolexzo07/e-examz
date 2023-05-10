<?php
include_once("../finishit.php");
$create = x_dbtab("examsettings","
	batch_id TEXT NOT NULL,
	batch_hash TEXT NOT NULL,
	owner INT NOT NULL,
	title VARCHAR(255) NOT NULL,
	timer INT NOT NULL,
	pin TEXT NOT NULL,
	total INT NOT NULL,
	examtype INT NOT NULL,
	examcategory INT NOT NULL,
	startingdate DATE NOT NULL,
	closingdate DATE NOT NULL,
	description TEXT NOT NULL,
	total_participants INT NOT NULL,
	total_submitted_script INT NOT NULL,
	status ENUM('0','1') NOT NULL,
	created_on VARCHAR(255) NOT NULL
	","innoDB");
	
	if($create){
		echo "<h5>Table generated successfully!</h5>";
	}else{
		echo "<h5>Failed to generate table!</h5>";
	}

?>