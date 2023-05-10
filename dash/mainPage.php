<?php
session_start();
include_once("../finishit.php");
if(!isset($_SESSION["IQGAMES_MATRIC_2018_VISION"]) || !isset($_SESSION["LOGIN-TOKEN-GENERATOR"])){
	exit();
}
$pgtokens = $_SESSION['LOGIN-TOKEN-GENERATOR'];
?>
<?php //include("paymentDashboard.php");?>
<?php include("examDashboard.php");?>
<?php include("mainDashboard.php");?>