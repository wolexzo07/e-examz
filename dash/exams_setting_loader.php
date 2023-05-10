<?php
if(!isset($pageTokens)){
	exit();
}

if(x_count("examsettings","status='1' AND owner='$user_id' LIMIT 1") > 0){
	?>
	<div class="table-responsive">
	
	<!---<button id="shExams" class="btn btn-sm btn-success mb-3"><i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Create new</button>--->
		
	<div class="list-group">
	<div class="list-group-item pt-4 pb-4">
	<p class="box-header mb-4"> EXAMINATION PROFILES &nbsp;<button id="shExams" class="btn btn-sm btn-success "><i class="fa fa-plus-circle"></i> &nbsp;New</button>
		<span class="pull-right">
			<button onclick="loadpage('setup-exampages?hashkey=<?php echo $pgtokens;?>')" class="btn btn-primary btn-sm">
				<i class="fa fa-refresh"></i>
			</button>
		</span>
	</p>

	
	<table class="table table-bordered" id="e-table">
	<thead>
		<tr>
			<th>No.</th>
			<th>Title</th>
			<th>Type</th>
			<th>Category</th>
			<th>T.Questions</th>
			<th>Time(mins)</th>
			<th>Actions</th>
		</tr>
	</thead>	
	<tbody class="tbody">
	<?php
	$counter = 0;
	foreach(x_select("0","examsettings","status='1' AND owner='$user_id'","50","id DESC") as $details){
		$counter++;
		$id = $details["id"];
		$bid = $details["batch_id"];
		$bh = $details["batch_hash"];
		$title = $details["title"];
		$pin = $details["pin"];
		$timer = $details["timer"];
		$total = $details["total"];
		$etype = $details["examtype"];
		$ecat = $details["examcategory"];
		$sdate = $details["startingdate"];
		$cdate = $details["closingdate"];
		$dated = $details["created_on"];
		
		$getType = x_getsingleupdate("examtype","type","id='$etype'");
		$getCat = x_getsingleupdate("categories","department","id='$ecat'");
		?>

			<tr>
				<td><?php echo $counter;?></td>
				<td><?php echo $title;?></td>
				<td><?php echo $getType;?></td>
				<td><?php echo $getCat;?></td>
				<td><?php echo $total;?></td>
				<td><?php echo $timer;?></td>
				<td>
					<button onclick="loadpage('start_question_uploads?cmd=<?php echo $etype;?>&bid=<?php echo $bid;?>&bh=<?php echo $bh;?>')" class="btn btn-sm btn-primary" title="Upload questions"><i class="fa fa-cloud-upload"></i></button>
					
					<button onclick="window.location='start_question_uploads'" class="btn btn-sm btn-danger" title="Delete exam settings"><i class="fa fa-trash"></i></button>
				</td>
			</tr>
		
		<?php
	}
	?>
	</tbody>
	</table>
	</div>
	</div>
	</div>
	<?php
}else{
	$msg = "<script>showalert('No settings found!')</script>";
	$msg .= "<div class='row'>
		<div class='col-lg-3 col-md-3 col-12'></div>
		<div class='col-lg-6 col-md-6 col-12'>
			<img src='img/nop.png' class='img-fluid'/>
			<div class='alert alert-warning' role='alert'>No Examination was conducted! &nbsp;&nbsp;<button id='shExams' class='btn btn-sm btn-primary'><i class='fa fa-plus'></i> &nbsp;Create new</button></div>
		</div>
		<div class='col-lg-3 col-md-3 col-12'></div>
	</div>";
	echo $msg;
}

?>

<script>
$(document).ready(function(){

	dialogbox("shExams","esz","hiExams");
	
	$("#e-table").DataTable({
			lengthMenu: [
				[10, 25, 50, 100, -1],
				[10, 25, 50, 100, 'All'],
			],
		});
	
	$("#e-table_filter input").attr("placeholder","Search Anything");
	$("#e-table_filter input").attr("class","form-control form-control-sm");
	$("#e-table_filter").css({
		"margin-bottom":"20px",
		"margin-top":"20px"
	});
	$("#e-table_length").css({
		"margin-bottom":"20px",
		"margin-top":"20px"
	});
});

</script>