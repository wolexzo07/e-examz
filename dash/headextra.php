<?php 
session_start();
include_once("../finishit.php");
$pageToken = sha1(uniqid()).md5(uniqid());
if(!isset($_SESSION['XCAPE_HACKS'])){
	$_SESSION['XCAPE_HACKS'] = $pageToken;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>E-Examz adminer : Online examination Platform</title>
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width"/>
	<link rel="stylesheet" href="../css/astyle.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="css/Toast.min.css"/>
	<link rel="stylesheet" href="css/toastify.min.css"/>

	<script src="js/Toast.min.js" type="text/javascript"></script>
	<script src="js/toastify-js.js" type="text/javascript"></script>
	<script src="js/animate-page.js" type="text/javascript"></script>
</head>
<body>
<script src="../js/controller.js"></script>

