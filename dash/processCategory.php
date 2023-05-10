<?php
include_once("../finishit.php");
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
			
			$response = "<script>showalert('Subject/Course ($subject) was created before');</script>";
			echo $response;
			
		}else{
			// Handling category restrictions on account
			// First getting user account type
			$getaccountType = x_getsingleupdate("userdata","is_premium_account","id='$userid'");
			
			$allowed = array(0,1,2,3);
			
			if(in_array($getaccountType , $allowed)){
				
				if($getaccountType == "0"){
					
					$acctType = "free";
				
				}elseif($getaccountType == "1"){
					
					$acctType = "premium1";
				
				}elseif($getaccountType == "2"){
					
					$acctType = "premium2";
					
				}else{
					
					$acctType = "premium3";
					
				}
				
				// Now checking category restrictions based on user current plan
				
				if(isset($acctType) && !empty($acctType)){
					
					$current_allowed_value = x_getsingleupdate("control_limit","allowed_value","accounttype='$acctType' AND limit_for='subjectCategories' AND status='1'");
					
					if(is_numeric($current_allowed_value)){
						
						// checking for the total entry inorder not to exceed the limited value based on user current plan
						
						if(x_count("categories","added_by='$userid'") < $current_allowed_value){
							
							$success = "<script>showalert('Subject/Course ($subject) Added')</script>";
							
							// Adding Entry after passing all validations
							x_insert("department,added_by,added_on,timed_on,os,ip,br","categories","'$subject','$userid','$time','$timer','$os','$ip','$br'","$success","Failed to create subject / course");
							
						}else{
							$response = "<script>showalert('Subjects/Courses allowed limit is reached');</script>";
							echo $response;
						}
						
					}else{
						$response = "<script>showalert('Error:: allowed limit value invalid');</script>";
						echo $response;
					}
				}
				
				
			}else{
				$response = "<script>showalert('Restriction issues encountered!');</script>";
				echo $response;
			}
			
		}
		
	}else{
		x_print("Failed to create table!");
	}
	
}else{
	x_print("Parameter Missing!");
}

?>