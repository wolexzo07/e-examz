<?php include_once("../../finishit.php");?>
<!DOCTYPE html>
<html>
<head>
<title>E-Examz adminer : Online examination Platform</title>
      <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
<link rel="stylesheet" href="../../css/astyle.css" type="text/css" media="all"/>
        <link rel="stylesheet" href="../../css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
		
		<script src="../../js/jquery.js"></script>
		<script src="../../js/jquery.form.min.js"></script>
		
		<!-- Twitter Bootstrap -->
        <script src="../../js/bootstrap.min.js"></script>
</head>
<body>
<script src="../../js/controller.js"></script>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 place">

<?php
if(isset($_SESSION["IQGAMES_MATRIC_2018_VISION"])){
include_once("navbase.php");
}
?>

<!--<fieldset class="field"><legend class="legend"> --->