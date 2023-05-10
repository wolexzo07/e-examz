<?php
session_start();
include_once("../finishit.php");
if(x_validatepost("_token") && x_validatesession("IQGAMES_ID_2018_VISION") && x_validateget("switcher")){

		$getswitch = array("vi","au","im","dc");
		$switch = xg("switcher");
		
		if(!in_array($switch,$getswitch)){
			?>
			<div class="alert alert-danger"><i class="fa fa-minus-circle"></i> Invalid request detected!</div>
			<?php
			exit();
		}
		
		
		$userid = x_clean($_SESSION["IQGAMES_ID_2018_VISION"]);
		$token = x_clean(sha1($_SESSION["IQGAMES_ID_2018_VISION"].xrands(10).DATE("YmdHis")));
		$os = xos(); $ip = xip(); $br = xbr();
		$time = x_clean(x_curtime("0","1"));
		$date_time = x_clean(x_curtime("0","0"));
		$post_id = x_clean(sha1($_SESSION["IQGAMES_ID_2018_VISION"].xrands(10).DATE("YmdHis")));
		
		$createTab = x_dbtab("uploadedcontent","
		uploaded_by VARCHAR(255) NOT NULL,
		post_id TEXT NOT NULL,
		file_type ENUM('','video','photo','document','audio') NOT NULL,
		file_size VARCHAR(50) NOT NULL,
		file_extension VARCHAR(10) NOT NULL,
		file_path TEXT NOT NULL,
		posted_status ENUM('0','1') NOT NULL,
		posted_on VARCHAR(50) NOT NULL,
		post_timestamp TIMESTAMP NOT NULL,
		os VARCHAR(100) NOT NULL,
		ip VARCHAR(100) NOT NULL,
		br VARCHAR(100) NOT NULL,
		token TEXT NOT NULL
		
		","MYISAM");
	
		if(!$createTab){
				?>
			<div class="alert alert-danger"><i class="fa fa-database"></i> Failed to create table!</div>
			<?php
			exit();
		}
		
	if($switch == "im"){
			// Handling Image processing
			if(x_ischeckupload("photofile")){
					$allowed_size = get_allowed_content("mediacontrol","photo","allowed_upload_size");
					$allowed_format = get_allowed_content("mediacontrol","photo","allowed_format_second");
					xcload("photofile"); // checking upload status
					$size1 = x_size("photofile"); // get file size
					$ext = x_file("photofile"); // getting extension
					xcsize("photofile",$allowed_size); // 10 mb max file size
					xtex("$allowed_format","photofile");	// checking file extension
					$token1 = sha1(uniqid().$post_id.Date("His"));
					$path1 = x_path("photofile","contentcreated/hashedcontent/79fe255129a4d215c4b3e89c2eac8b1d8eb29c1c/$token1");
					$dbpath = x_path("photofile","contentcreated/hashedcontent/79fe255129a4d215c4b3e89c2eac8b1d8eb29c1c/$token1");
			
			xmload("photofile",$path1,"");
			
			x_insert("uploaded_by,post_id,file_type,file_size,file_extension,file_path,posted_status,posted_on,post_timestamp,os,ip,br,token","uploadedcontent","'$userid','$post_id','photo','$size1','$ext','$dbpath','0','$time','$date_time','$os','$ip','$br','$token'","&nbsp;","<div class='alert alert-danger'><i class='fa fa-trash'></i> Failed to insert data </div>");
			
			echo "<div class='alert alert-success'><i class='fa fa-check-circle'></i> 1 photo attached to the question!</div>";
			
		}else{
		?><div class="alert alert-danger"><i class="fa fa-minus-circle"></i> Failed to upload photo data!</div><?php
		}
		}

}else{
	?><div class="alert alert-danger"><i class="fa fa-minus-circle"></i> Parameter missing!</div><?php
}
