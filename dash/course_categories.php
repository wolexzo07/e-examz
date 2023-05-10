<?php
if(x_validatesession("IQGAMES_ID_2018_VISION")){
		
		$userid = x_clean($_SESSION["IQGAMES_ID_2018_VISION"]);
		if(x_count("categories","added_by='$userid' LIMIT 1") > 0){
			
			if(x_validatesession("EXAMSETTINGS_BHASH") && x_validatesession("EXAMSETTINGS_BID")){
				$bid = $_SESSION["EXAMSETTINGS_BID"];
				$bh = $_SESSION["EXAMSETTINGS_BHASH"];
				$getcourse_id = x_getsingleupdate("examsettings","examcategory","batch_id='$bid' AND batch_hash='$bh'");
				if(is_numeric($getcourse_id)){
					$getCourse_name = x_getsingleupdate("categories","department","id='$getcourse_id'");
					
					foreach(x_select("id,department","categories","added_by='$userid'","100","id desc") as $key){
						$dp = $key["department"];$id = $key["id"];
						if($getCourse_name == $dp){
						 ?>
							<option selected value="<?php echo $id;?>"><?php echo $dp;?></option>
						<?php
						}
					}
				}
			}
			
		}	
}
?>