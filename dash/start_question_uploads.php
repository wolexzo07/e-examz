<?php
session_start();
include_once("../finishit.php");
if(x_validateget("cmd") && x_validatesession("XCAPE_HACKS") && x_validatesession("LOGIN-TOKEN-GENERATOR") && x_validateget("bid") && x_validateget("bh") && x_validatesession("IQGAMES_ID_2018_VISION")){
	
	$cmd = xg("cmd"); // exam type
	$bid = xg("bid"); // batch_id
	$bh = xg("bh"); // batch hash
	$pageTokens = x_session("XCAPE_HACKS");
	$user_id = x_session("IQGAMES_ID_2018_VISION"); // current logged-in user
	$pgtokens = x_session("LOGIN-TOKEN-GENERATOR"); // current logged-in user
	
	if(x_count("examsettings","batch_hash='$bh' && batch_id='$bid'") > 0){
		$_SESSION["EXAMSETTINGS_BID"] = $bid;
		$_SESSION["EXAMSETTINGS_BHASH"] = $bh;
		$_SESSION["EXAMSETTINGS_ETYPE"] = $cmd;
		
		?>
		<div class="alert alert-light" role="alert">Settings validated...Redirecting <img src="img/ajax-loader.gif"/></div>
		<script>
		setTimeout(function(){
			loadpage("initiatePosting?cmd=<?php echo $cmd;?>&bid=<?php echo $bid;?>&bhash=<?php echo $bh;?>"); // redirection to posting section
		},1000);
		</script>
		<?php
	}else{
		?>
		<div class="alert alert-danger" role="alert">Failed to validate examination settings</div>
		<?php
	}
}
?>