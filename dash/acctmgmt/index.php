<?php include_once("validate.php");?>
<?php include_once("head.php");?>
<?php include_once("logo.php");?>


<div class="row">

<div class="col-md-12 dividerboss">
<button class="btn btn-warning btn-lg" id="button"><i class="fa fa-dashboard"></i>&nbsp;&nbsp; NAVIGATION MENU LIST</button>
</div>
	
<div onclick="parent.location='post_questions'" class="col-lg-3 col-md-3 col-sm-6 col-xs-6 boxbase text-center">
<p class="iconmenu"><i class="glyphicon glyphicon-edit"></i></p>
<p class="fontmenu btn btn-success "> NEW POST</p>
</div>

<div onclick="parent.location='post_csv'" class="col-lg-3 col-md-3 col-sm-6 col-xs-6 boxbase text-center">
<p class="iconmenu"><i class="glyphicon glyphicon-cloud-upload"></i></p>
<p class="fontmenu btn btn-primary ">CSV POSTING</p>
</div>

<div onclick="parent.location='approve'" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 boxbase text-center">
<p class="iconmenu"><i class="glyphicon glyphicon-tasks"></i></p>
<p class="fontmenu btn btn-info ">PENDING <i class="badge"><?php echo x_count("questionbank","status='0'");?></i></p>
</div>

<div onclick="parent.location='approvedbase'" class="col-lg-3 col-md-3 col-sm-6 col-xs-6 boxbase text-center">
<p class="iconmenu"><i class="glyphicon glyphicon-check"></i></p>
<p class="fontmenu btn btn-danger ">APPROVED  <i class="badge"><?php echo x_count("questionbank","status='1'");?></i></p>
</div>







<div onclick="parent.location='student'" class="col-lg-3 col-md-3 col-sm-6 col-xs-6 boxbase text-center">
<p class="iconmenu"><i class="fa fa-user"></i></p>
<p class="fontmenu btn btn-warning "> ADD USERS </p>
</div>



<div onclick="parent.location='credit'" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 boxbase text-center">
<p class="iconmenu"><i class="fa fa-credit-card"></i></p>
<p class="fontmenu btn btn-primary "> CREDIT WALLET </p>
</div>

<div onclick="parent.location='regist'" class="col-lg-3 col-md-3 col-sm-6 col-xs-6 boxbase text-center">
<p class="iconmenu"><i class="fa fa-users"></i></p>
<p class="fontmenu btn btn-warning "> REGISTERED  <i class="badge"><?php echo x_count("userdb_bank","status='0' OR status='1'");?></i></p>
</div>




<div class="col-md-12 dividerboss">
<button class="btn btn-info btn-lg" id="button"><i class="fa fa-signal"></i>&nbsp;&nbsp; Payment database Statistics</button>
</div>

		
		<div class="col-md-4 boxbase">
			
			<div class="panel panel-default">
			<div id="panelStyler" class="panel-heading">
			Total Payments (Online & offline)
			</div>
			<div class="panel-body">
			
			</div>
			</div>

		</div>
		
		<div class="col-md-4 boxbase">
			
			<div class="panel panel-default">
			<div id="panelStyler" class="panel-heading">
			Today online payment
			</div>
			<div class="panel-body">
			
			</div>
			</div>

		</div>
		
		<div class="col-md-4 boxbase">
			
			<div class="panel panel-default">
			<div id="panelStyler" class="panel-heading">
			Today offline payment
			</div>
			<div class="panel-body">
			
			</div>
			</div>

		</div>
		
			<div class="col-md-4 boxbase">
			
			<div class="panel panel-default">
			<div id="panelStyler" class="panel-heading">
			Today offline payment
			</div>
			<div class="panel-body">
			
			</div>
			</div>

		</div>
		
			<div class="col-md-4 boxbase">
			
			<div class="panel panel-default">
			<div id="panelStyler" class="panel-heading">
			Today offline payment
			</div>
			<div class="panel-body">
			
			</div>
			</div>

		</div>
		
			<div class="col-md-4 boxbase">
			
			<div class="panel panel-default">
			<div id="panelStyler" class="panel-heading">
			Today offline payment
			</div>
			<div class="panel-body">
			
			</div>
			</div>

		</div>
		
			<div class="col-md-4 boxbase">
			
			<div class="panel panel-default">
			<div id="panelStyler" class="panel-heading">
			Today offline payment
			</div>
			<div class="panel-body">
			
			</div>
			</div>

		</div>
		
			<div class="col-md-4 boxbase">
			
			<div class="panel panel-default">
			<div id="panelStyler" class="panel-heading">
			Today offline payment
			</div>
			<div class="panel-body">
			
			</div>
			</div>

		</div>
		
			<div class="col-md-4 boxbase">
			
			<div class="panel panel-default">
			<div id="panelStyler" class="panel-heading">
			Today offline payment
			</div>
			<div class="panel-body">
			
			</div>
			</div>

		</div>


	<div class="col-md-12 dividerboss">
<button class="btn btn-success btn-lg" id="button"><i class="fa fa-laptop"></i>&nbsp;&nbsp; Exam database Statistics</button>
</div>
		<div class="col-md-4 boxbase">
			
			<div class="panel panel-default">
			<div id="panelStyler1" class="panel-heading">
			Total Examiners
			</div>
			<div class="panel-body">
			
			</div>
			</div>

		</div>
	
	   <div class="col-md-4 boxbase">

			<div class="panel panel-default">
			<div id="panelStyler1" class="panel-heading">
			Total Students
			</div>
			<div class="panel-body">
			
			</div>
			</div>
			
	    </div>
		
		<div class="col-md-4 boxbase">

			<div class="panel panel-default">
			<div id="panelStyler1" class="panel-heading">
			Total Questions
			</div>
			<div class="panel-body">
			
			</div>
			</div>
			
	    </div>
		
		<div class="col-md-4 boxbase">

			<div class="panel panel-default">
			<div id="panelStyler1" class="panel-heading">
			Approved Questions
			</div>
			<div class="panel-body">
			
			</div>
			</div>
			
	    </div>
		
		<div class="col-md-4 boxbase">

			<div class="panel panel-default">
			<div id="panelStyler1" class="panel-heading">
			Pending Questions
			</div>
			<div class="panel-body">
			
			</div>
			</div>
			
	    </div>
		
		<div class="col-md-4 boxbase">

			<div class="panel panel-default">
			<div id="panelStyler1" class="panel-heading">
			Total Uploaded
			</div>
			<div class="panel-body">
			
			</div>
			</div>
			
	    </div>
		
		<div class="col-md-4 boxbase">

			<div class="panel panel-default">
			<div id="panelStyler1" class="panel-heading">
			Total Uploaded
			</div>
			<div class="panel-body">
			
			</div>
			</div>
			
	    </div>
		
		<div class="col-md-4 boxbase">

			<div class="panel panel-default">
			<div id="panelStyler1" class="panel-heading">
			Total Uploaded
			</div>
			<div class="panel-body">
			
			</div>
			</div>
			
	    </div>
		
		<div class="col-md-4 boxbase">

			<div class="panel panel-default">
			<div id="panelStyler1" class="panel-heading">
			Total Uploaded
			</div>
			<div class="panel-body">
			
			</div>
			</div>
			
	    </div>


<div class="col-md-12">
<hr/>
</div>

</div>

<?php include_once("footbase.php");?>
