<?php
session_start();
include_once("../finishit.php");
if(!isset($_SESSION["IQGAMES_MATRIC_2018_VISION"]) || !isset($_SESSION["LOGIN-TOKEN-GENERATOR"])){
	?>
	<div class="alert alert-danger" role="alert">
		Invalid s-parameter OR lp-parameter!
	</div>
	<?php
	exit();
}

if(x_validateget("hashkey")){}else{exit();}
$pgtokens = $_SESSION['LOGIN-TOKEN-GENERATOR'];
$hk = xg("hashkey");

if($pgtokens != $hk){
	?>
	<div class="alert alert-danger" role="alert">
		Invalid menuKey!
	</div>
	<?php
	exit();
}
?>