<div class="row">
	<div class="col-12 dividerboss mt-4">
		<button class="btn btn-warning btn-lg" id="button"><i class="fa fa-dashboard"></i>&nbsp;&nbsp; NAVIGATION MENU LIST</button>
	</div>

<div onclick="loadpage('setup-exampages?hashkey=<?php echo $pgtokens;?>')" class="col-lg-3 col-md-3 col-sm-6 col-xs-6  text-center mt-3">
<p class="iconmenu"><i class="fa fa-cog"></i></p>
<p class="fontmenu btn btn-primary"> SET-UP AN EXAM</p>
</div>

<div onclick="parent.location='post_questions'" class="col-lg-3 col-md-3 col-sm-6 col-xs-6  text-center mt-3">
<p class="iconmenu"><i class="fa fa-edit"></i></p>
<p class="fontmenu btn btn-warning"> NEW POST</p>
</div>

<div onclick="parent.location='post_csv'" class="col-lg-3 col-md-3 col-sm-6 col-xs-6  text-center mt-3">
<p class="iconmenu"><i class="fa fa-cloud-upload"></i></p>
<p class="fontmenu btn btn-primary ">CSV POSTING</p>
</div>

<div onclick="parent.location='approve'" class="col-lg-3 col-md-3 col-sm-6 col-xs-6  text-center mt-3">
<p class="iconmenu"><i class="fa fa-tasks"></i></p>
<p class="fontmenu btn btn-warning">PENDING <i class="badge text-bg-primary"><?php echo x_count("questionbank","status='0'");?></i></p>
</div>

<div onclick="parent.location='approvedbase'" class="col-lg-3 col-md-3 col-sm-6 col-xs-6  text-center mt-3">
<p class="iconmenu"><i class="fa fa-check"></i></p>
<p class="fontmenu btn btn-primary">APPROVED  <i class="badge text-bg-light"><?php echo x_count("questionbank","status='1'");?></i></p>
</div>

<div onclick="parent.location='student'" class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center mt-3">
<p class="iconmenu"><i class="fa fa-user"></i></p>
<p class="fontmenu btn btn-warning "> ADD USERS </p>
</div>

<div onclick="parent.location='credit'" class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center mt-3">
<p class="iconmenu"><i class="fa fa-credit-card"></i></p>
<p class="fontmenu btn btn-primary "> CREDIT WALLET </p>
</div>

<div onclick="parent.location='regist'" class="col-lg-3 col-md-3 col-sm-6 col-xs-6 text-center mt-3">
<p class="iconmenu"><i class="fa fa-users"></i></p>
<p class="fontmenu btn btn-warning "> REGISTERED  <i class="badge text-bg-primary"><?php echo x_count("userdb_bank","status='0' OR status='1'");?></i></p>
</div>

</div>