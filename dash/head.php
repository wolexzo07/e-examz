<?php include_once("../finishit.php");?>
<!DOCTYPE html>
<html>
<head>
<title>E-Examz adminer : Online examination Platform</title>
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width"/>
	<link rel="stylesheet" href="../css/astyle.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/pagination.css"/>
	<link rel="stylesheet" href="css/common.css"/>
	
	<link rel="stylesheet" href="css/Toast.min.css"/>
	<link rel="stylesheet" href="css/toastify.min.css"/>
	
	<link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>

</head>
<body>

 <style>
 .m-Icon{width:60px;}
 .mini-loader{width:60px;margin-top:20%;}
 .load-temporary{
	 width:100%;
	 height:100%;
	 background:black;
	 position:fixed;
	 top:0%;
	 left:0%;
	 bottom:0%;
	 right:0%;
	 z-index:10000;
	 opacity:0.7;
	 }
 </style>

<?php
if(isset($_SESSION["IQGAMES_MATRIC_2018_VISION"])){
	include_once("navbase.php");
}
?>
