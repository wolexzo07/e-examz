<?php
include("pagesValidation.php");
// importing tinymce js library
$MCEtoken = sha1(uniqid());
include("tinymce.php");

?>

<?php 
	$pgtokens = sha1(uniqid());
	//include("add-courses.php");
?>

<div id="openCategory" class="openCategory">
	<i class="fa fa-remove pull-right" id="closeSub"></i>
	<div class="row">
		<div class="col-md-3 col-lg-3 col-12"></div>
		<div class="col-md-6 col-lg-6 col-12">

			<div class="card mt-5">
				<div class="card-body pb-5">
				
					<p class="hd-text mb-4"><i class="fa fa-plus-circle"></i> ADD COURSE / SUBJECT 
					<button onclick="loadpage('initiatePosting?cmd=<?php echo $cmd;?>&bid=<?php echo $bid;?>&bhash=<?php echo $bh;?>')" class="btn btn-sm btn-primary pull-right"><i class="fa fa-refresh" ></i></button></p>

					<form method="POST" id="plus-ncat">
							<input type="text" class="form-control" placeholder="New Course | Subject" name="subject"  />
							<input type="hidden" name="_token" value="<?php echo sha1(uniqid());?>"/>
							<input type="hidden" name="owner" value="<?php echo $_SESSION["IQGAMES_MATRIC_2018_VISION"];?>"/>
							
							<button  class="btn btn-success btn-sm mt-4"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp; ADD ENTRY</button>
					</form>
				
				</div>
			</div>
		
		<div id="ncat-rex" class="mt-3 mb-3"></div>
		
		</div>
		<div class="col-md-3 col-lg-3 col-12"></div>
	</div>
	
</div>

<div id="esz" class="esz">

<div class="container-fluid">
<div class="row mt-0">

		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			
		
					<p class="box-header mb-5">NEW EXAMS SETTINGS 
					<span class="pull-right">
						<button class="btn btn-danger btn-sm" id="hiExams">
							<i class="fa fa-remove"></i>
						</button>
					</span>
					</p>
					
					<form class="exam-setup" method="POST" id="exam-setup">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<input type="text" name="title" id="title" class="form-control" placeholder="Exam Title" maxlength="30" required=""/>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-11 col-xs-11">
								<select class="form-control" name="e-category" required id="e-category">
									<option value="">Course categories...</option>
									<?php
									if(x_count("categories","status='1'") > 0){
										$by = x_clean($_SESSION["IQGAMES_ID_2018_VISION"]);
										foreach(x_select("0","categories","status='1' AND added_by='$by'","20","id") as $cat){
											$id = $cat["id"];
											$dept = $cat["department"];
											?>
											<option value="<?php echo $id;?>"><?php echo $dept;?></option>
											<?php
										}
									}
									?>
								</select>
							</div>
							<div class="col-1">
								<a href="#" id="addnewsub" class="btn btn-sm btn-info"><i class="fa fa-plus"></i></a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
								<input type="number" name="timer" id="timer" class="form-control" placeholder="Exam Time (minutes)" min="1" max="" required />
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
								<input type="text" name="pin" id="pin" class="form-control" placeholder="Exam Pin (4-Digit)" maxlength="4" required=""/>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
								<input type="number" name="total" id="total" class="form-control" placeholder="Number of questions" min="1" max=""  required=""/>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
								<input type="number" name="totalstd" id="totalstd" class="form-control" placeholder="Total students" min="1" max="500"  required=""/>
							</div>
							<div class="col-12 mt-4">
								<select class="form-control" required id="e-type" name="e-type">
									<option value="">Choose exam type...</option>
									<?php
									if(x_count("examtype","status='1'") > 0){
										foreach(x_select("0","examtype","status='1'","5","id") as $etype){
											$id = $etype["id"];
											$typ = $etype["type"];
											$sh = $etype["short"];
											?>
											<option value="<?php echo $id;?>"><?php echo $typ;?></option>
											<?php
										}
									}
									?>
								</select>
							</div>
						
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-1">
							<p class="mt-3 mb-3 exms-txt">Starting Date:</p>
							<input type="date" required class="form-control" name="startingdate" id="startdate"/>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-1">
							<p class="mt-3 mb-3 exms-txt">Closing Date:</p>
							<input type="date" required class="form-control" name="closingdate" id="closedate"/>
							</div>
							<div class="col-12 mt-1">
							<p class="mt-3 mb-3 exms-txt">Description / Instructions:</p>
								<textarea name="des" placeholder="Description / Instructions" col=""></textarea>
							</div>
							
							
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<input type="hidden" name="_token" value="<?php echo sha1(uniqid().$by);?>"/>
								<button class="btn btn-info mt-4 w-100"><i class="fa fa-plus"></i> &nbsp;&nbsp;Create</button>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 x-create"></div>
						</div>
					</form>
				
			
		</div>
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
	
</div>
</div>

</div>

<div class="row">
	<div class="col-12 mt-5 exam-settings"></div>
</div>

<script>
$(document).ready(function(){
	$("#addnewsub").click(function(){
		$("#esz").hide();
	});
	dialogbox("addnewsub","openCategory","closeSub");
	pushContent("#exam-setup",".x-create","setup-exam");
	getContent(".exam-settings","fetch-exams_settings");
	processAjaxForm("plus-ncat","ncat-rex","processCategory");	

});

function getContent(result,cmd){
		$(result).html("<img src='img/ajax-loader.gif' style='width:;'/> awaiting response...");
		$.ajax({
				url:"examinerProcessor?hashkey=<?php echo $_SESSION['XCAPE_HACKS']?>&cmd="+cmd,
				method:"GET",
				success:function(response){
					$(result).html(response);
				},
				error:function(){}
			});
	}
  
  
  function pushContent(formid,resultid,cmdvalue){
	  $(formid).submit(function(e){
			e.preventDefault();
			let cmd = cmdvalue;
			$(resultid).html("<img src='img/ajax-loader.gif' style='width:;'/> awaiting response...");
			$.ajax({
				method:"POST",
				url:"examinerProcessor?hashkey=<?php echo $_SESSION['XCAPE_HACKS']?>&cmd="+cmd,
				data:new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				success:function(response){
					$(resultid).html(response);
					
					if(cmd == "setup-exam"){
						getContent(".exam-settings","fetch-exams_settings");
						$("input").val("");
						$("select").val("");
						$("textarea").val("");
						setTimeout(function(){
							$("#esz").hide("slow");
						},2000);
					}
				},
				error:function(){}
			});
		});
    }
</script>

<style>
#esz{
	overflow:auto;
	display:none;
	z-index:100;
	position:fixed;
	background:aqua;
	opacity:1;
	top:0%;
	left:0%;
	width:100%;
	height:100%;
	right:0%;
	padding-top:100px;
	padding-bottom:40px;
	padding-right:0px;
	padding-left:0px;
	box-shadow:2px 2px 2px 2px gray;
	-moz-box-shadow:2px 2px 2px 2px gray;
	margin:0pt;
}
</style>