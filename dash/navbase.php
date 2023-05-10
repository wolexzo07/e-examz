<?php include("NavbarMenu.php");?>

<!-----------Profile Dialog Box------------------>

<div id="profiler" class="profiler">
<i class="fa fa-remove pull-right" id="closeProfile"></i>
<p><i class="fa fa-user"></i> &nbsp;&nbsp;PROFILE MANAGER</p>
<hr/>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
		<?php 
			$id = x_clean($_SESSION["IQGAMES_ID_2018_VISION"]);
			if(x_count("userdata","id='$id' LIMIT 1") > 0){
				
				foreach(x_select("0","userdata","id='$id'","1","id") as $key){
					$id = $key["id"];$name = $key["fullname"];
					$role = $key["role"];$userid = $key["matric_no"];
					$reg = $key["dated_on"];
					?>
					<img src="img/logo.png" class="img-responsive adjustpic"/><br/>
					<button class="btn btn-success mt-3 mb-3"><i class="fa fa-upload"></i> Photo update</button>
					<table class="table table-striped mt-2">
						<tr>
						<th>Name</th>
						<th class="color-g"><?php echo $name;?></th>
						</tr>
						<tr>
						<th>User ID</th>
						<th class="color-g"><?php echo $userid;?></th>
						</tr>
						<tr>
						<th>Role</th>
						<th class="color-p"><?php echo $role;?></th>
						</tr>
						<tr>
						<th>Reg Date</th>
						<th class="color-g"><?php echo $reg;?></th>
						</tr>
					</table>
					<?php
				}
				
			}else{
				x_print("<p class='text-center'><i class='fa fa-user' style='font-size:50pt;'></i><br/><br/>No valid profile found</p>");
			}
		?>
		
</div>
<div class="col-md-3"></div>
</div>
</div>



