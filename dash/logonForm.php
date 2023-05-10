<?php
if(!isset($pageToken)){
	exit();
}
?>

<div class="row">
	 <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12"></div>
	 <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
		
		<div class="list-group mt-4">
			<div class="list-group-item main-lp">
			
				<center>
					<img src="img/undraw_Thought_process_re_om58.png" class="adminLogo img-fluid mt-3 mb-4"/>
				</center>
				<form method="POST" id="validate-appLogin" autocomplete="off">
				 
					<input type="text" autocomplete="off" id="txtcontrol"  class="form-control username" required="" placeholder="Enter username" name="matric"/>
						
					<img src="../image/l6.png" class="siteLogo pull-right"/>
						
					<input type="password" autocomplete="off" id="txtcontrol" class="form-control passkey mt-4" required="" placeholder="Enter password" name="pass"/>
					
					<img src="../image/l6.png" class="siteLogo-2 pull-right"/>
					
					<input type="hidden" name="lp-appToken" value="<?php echo sha1(uniqid());?>"/>
				 
					<button class="btn btn-primary btn-lg btn-custom w-100 mt-3"><i class="fa fa-sign-in"></i>&nbsp;&nbsp; Sign In</button>
					<div class="x-result mt-2"></div>
				</form>
			
			</div>
			<div class="list-group-item text-center">
			e-Examz Admin Portal <b>&copy; <?php echo DATE("Y");?></b>
			</div>
		</div>
		
	 </div>
	 <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12"></div>
</div>

<style>
.main-lp{
	padding-bottom:20pt;
}
.adminLogo{
	
}
.btn-custom{
	height:50px;
	padding:10px;
}
.siteLogo{
	width:30px;
	margin-top:-15px;
}
.siteLogo-2{
	width:30px;
	margin-top:-15px;
}
</style>

<script>
$(document).ready(function(){
	formpusher("#validate-appLogin",".x-result","lg-validator");
});
 function formpusher(formid,resultid,cmdvalue){
	  $(formid).submit(function(e){
			e.preventDefault();
			let cmd = cmdvalue;
			$(resultid).html("<img src='img/ajax-loader.gif' style='width:;'/> awaiting response...");
			$.ajax({
				method:"POST",
				url:"manageUserController?hashkey=<?php echo $_SESSION['XCAPE_HACKS'];?>&cmd="+cmd,
				data:new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				success:function(response){
					//$(resultid).html(response);
					$(resultid).html("");
					
					if((cmd == "lg-validator")){
						if(response == "inc"){
							showalert("Invalid credentials! Try again");
						}else if(response == "missing"){
							showalert("Login parameter missing!");
						}else{
							$(resultid).html(response);
							$(".username").val("");
							$(".passkey").val("");
							$(".username").attr("disabled","disabled");
							$(".passkey").attr("disabled","disabled");
						}
					}
					
				},
				error:function(){}
			});
		});
    }
</script>