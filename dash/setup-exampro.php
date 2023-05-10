<?php
if(!isset($pageTokens)){
	exit();
}
if(x_validatepost("_token")){
	$by = x_clean($_SESSION["IQGAMES_ID_2018_VISION"]);
	$title = x_clean(x_post("title"));
	$timer = x_clean(x_post("timer"));
	$salt = "AGodNeverFailsButyouhavegotten1234567890?#@?";
	$pin = x_clean(x_post("pin"));
	$hash = sha1($pin).md5($pin);
	$total = x_clean(x_post("total"));
	$etype = x_clean(x_post("e-type"));
	$ecat = x_clean(x_post("e-category"));
	$cdate = x_clean(x_post("closingdate"));
	$sdate = x_clean(x_post("startingdate"));
	
	$totalstd = x_clean(x_post("totalstd"));
	$des = x_clean(x_post("des"));
	
	
	$batch_id = $by."-".strtoupper(uniqid()).str_shuffle(DATE("YmdHis"));
	$batch_hash = sha1($batch_id).md5($batch_id);
	
	$created_on = x_curtime(0,1);
	
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
	status ENUM('0','1') NOT NULL,
	created_on VARCHAR(255) NOT NULL
	","innoDB");
	
		if($create){
			
			if(x_count("examsettings","batch_hash='$batch_hash' OR batch_id='$batch_id' LIMIT 1") > 0){
				?>
					<script>
					showalert("Exam settings was Taken!");
					</script>
				<?php
			}else{
				$success = "<script>showalert('Exam settings was created! Start questions upload!');</script>";
				$failed = "<script>showalert('Exam settings Failed to create!');</script>";
				x_insert("batch_id,batch_hash,owner,title,timer,pin,total,examtype,examcategory,startingdate,closingdate,status,created_on,description,total_participants,total_submitted_script","examsettings","'$batch_id','$batch_hash','$by','$title','$timer','$hash','$total','$etype','$ecat','$sdate','$cdate','1','$created_on','$des','$totalstd','0'","$success","$failed");
			}
			
		}else{
			?>
				<script>
				showalert("Failed to create Table!");
				</script>
			<?php
		}
	
	
}

?>