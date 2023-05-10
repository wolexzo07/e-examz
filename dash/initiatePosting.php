<?php
session_start();
include_once("../finishit.php");

$alertMsg = "<div class='alert alert-danger mt-4 mb-4' role='alert'>Failed to initiate Posting</div>";

if(x_validatesession("EXAMSETTINGS_BID") || x_validatesession("EXAMSETTINGS_BHASH") || x_validatesession("EXAMSETTINGS_ETYPE")){

	if(x_validateget("bhash") && x_validateget("bid") && x_validateget("cmd")){
		$bid = xg("bid");
		$bh = xg("bhash");
		$cmd = xg("cmd");
		
		if(x_validatesession("EXAM_ROLE")){ // set Examiner session
			
		}else{
			$_SESSION['EXAM_ROLE'] = "examiner";
		}
		
	}else{		
		echo $alertMsg;
		exit();
	}
	
}else{
		echo $alertMsg;
		exit();
}
// importing tinymce js library
$MCEtoken = sha1(uniqid());
include("tinymce.php");
?>




<div class="row">
<div class="col-lg-1 col-md-1 col-12"></div>
<div class="col-lg-10 col-md-10 col-12">

<?php
	$pgtokens = sha1(uniqid());
	include("add-courses.php");
?>

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
				
			

		</div>
</div>



<?php
//setting role management
$user = xclean($_SESSION["IQGAMES_MATRIC_2018_VISION"]);
if(x_count("userdata","is_post='1' AND status='1' AND matric_no='$user' LIMIT 1") > 0){
	?>

<!---<div id="resultonly"><img src="image/ajax-loader.gif"/></div>--->

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
<div class="col-lg-1 col-md-1 col-12"></div>
</div>

<script>
$(document).ready(function(){
	// Add file uploads to questions
	processmediaData("imagepostonly","loadloss","processVideoFiles","im"); 
	// Add new subject category
	processAjaxForm("plus-ncat","ncat-rex","processCategory");	
	// Dialog Box for subject category
	dialogbox("addnewsub","openCategory","closeSub");
});
</script>
