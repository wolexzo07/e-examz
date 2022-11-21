<?php include_once("headextra.php");?>
		
<?php include_once("logo.php");?></legend>

<form method="POST" action="prologin" autocomplete="off">
  <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
  
  </div>
  <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
   <div class="row">
 
 <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
 
 <p class="txt"><i class="fa fa-user fa-2x"></i>&nbsp;&nbsp; Login ID.</p>
<input type="text" autocomplete="off" id="txtcontrol"  class="form-control" required="" placeholder="user id." name="matric"/>
 
 </div>

 
  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
 
 <p class="txt"><i class="fa fa-lock fa-2x"></i>&nbsp;&nbsp; Password.</p>
<input type="password" autocomplete="off" id="txtcontrol" class="form-control" required="" placeholder="password" name="pass"/>
 
 </div>

 </div>

 
 <input type="hidden" name="tellme" value="<?php echo sha1(uniqid());?>"/>
 <button style="height:50px;padding:10px;margin-top:30px;" class="btn btn-success btn-lg fr"><i class="fa fa-sign-in"></i> Sign In</button>

  </div>
  <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
  
  </div>
 

 </form>

<?php include_once("footextra.php");?>
   


