<?php
include_once("../../finishit.php");
if(x_validatesession("IQGAMES_ID_2018_VISION")){
		
		$userid = x_clean($_SESSION["IQGAMES_ID_2018_VISION"]);
		$by = x_clean($_SESSION["IQGAMES_MATRIC_2018_VISION"]);
		if(x_count("categories","added_by='$userid' LIMIT 1") > 0){
			foreach(x_select("id,department","categories","added_by='$userid'","100","id desc") as $key){
				$dp = $key["department"];$id = $key["id"];
				?>
				<option value="<?php echo $id;?>"><?php echo $dp;?></option>
				<?php
			}
		}
		
}
?>