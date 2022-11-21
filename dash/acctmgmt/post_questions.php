<?php include_once("../../finishit.php");?>
<?php include_once("validate.php");?>
<?php include_once("head.php");?>

<?php
if(!isset($_SESSION['XELOW_DOMINGOS_USER_ID'])){
	$_SESSION['XELOW_DOMINGOS_USER_ID'] = "admin";
}

?>
	<?php include_once("logo.php");?>
	
	<script src="tinymce/js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
	


<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-10">
<h4 class="tutor_renew"><i class="fa fa-laptop"></i> POST <font class="spart">QUESTIONS</font></h4>


<div id="openCategory" class="openCategory">
	<i class="glyphicon glyphicon-remove-sign pull-right" id="closeSub"></i>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<hr/>
		<i class="fa fa-plus-circle"></i> ADD COURSE | SUBJECT 
	<hr/>
		<form method="POST" id="addnewcat">
		<input type="text" class="form-control" placeholder="Add new course | subject" name="subject" id="subjectplus" />
		<input type="hidden" name="_token" value="<?php echo sha1(uniqid());?>"/>
		<input type="hidden" name="owner" value="<?php echo $_SESSION["IQGAMES_MATRIC_2018_VISION"];?>"/>
		
		<button style="padding:12px;margin-top:10pt;" class="btn btn-success"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp; ADD NEW SUBJECT </button>
		</form>
		<p id="resultproof"></p>
		</div>
		<div class="col-md-3"></div>
	</div>
	
	

</div>



<div class="row">
		<div class="col-md-12">

				<form class="choose_paper_type" id="choose_paper_type" onsubmit="return qoption()">
				<p class="txt">Select question type:</p>
				<select id="slect" onchange="return qoption(this.value)" class="form-control">
				<option value="">Choose question type</option>
				<option value="objective">Objective Questions</option>
				<option value="subjective">Subjective Questions</option>
				<option value="true_false">True / False Questions</option>
				<option value="yes_no">Yes / No Questions</option>
				</select>
				</form>
				
				<script type="text/javascript" src="../../js/test.js"></script>

		</div>
</div>

<!--------Removing tinymce label------------>
<style type="text/css">
.mce-branding{
	display:none;
}
</style>

<?php
//setting role management
$user = xclean($_SESSION["IQGAMES_MATRIC_2018_VISION"]);
if(x_count("userdata","is_post='1' AND status='1' AND matric_no='$user' LIMIT 1") > 0){
	?>

<div id="resultonly"><img src="image/ajax-loader.gif"/></div>

<form method="POST" id="imagepostonly">
	<input type="file" id="fileuploader_photo" name="photofile" id="photofile" accept=".png,.gif,.jpg,.jpeg" onchange="return mediapusher('imagepostonly')"/>
	<input type="hidden" name="_token" value="<?php echo sha1(uniqid());?>"/>
</form>
<?php include("images_attachment.php");?>


<div class="true_false_based">
<?php include_once("tf_ques_loader.php");?>
</div>

<div class="yes_no_based">
<?php include_once("yn_ques_loader.php");?>
</div>

<div class="subjective_based">

<?php include_once("subjective_ques_loader.php");?>

</div>

<div class="objective_based">

<?php include_once("objective_ques_loader.php");?>

</div>

	<?php
}else{
x_print("<p class='hubmsg text-center'><i style='font-size:70pt;' class='fa fa-briefcase'></i><br/>You are not authorized to Post.</p>");
}
?>

</div>
<div class="col-md-1">
</div>
</div>



<?php include_once("footbase.php");?>
