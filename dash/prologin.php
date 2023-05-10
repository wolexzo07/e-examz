<?php
if(!isset($pageTokens)){
	exit();
}
if(x_validatepost("lp-appToken")){
	
	// unsetting the previously generated login tokens + token renewal
	
	if(isset($_SESSION['LOGIN-TOKEN-GENERATOR'])){
		unset($_SESSION['LOGIN-TOKEN-GENERATOR']);
	}
	
	$matric = xp("matric");	
	$pass = xp("pass"); 
	$dated = x_curtime(0,1);
	$passkey = sha1(xp("pass"));
	
	if(x_count("userdata","matric_no='$matric' AND password='$passkey' LIMIT 1") > 0){

if(x_count("userdata","matric_no='$matric' AND password='$passkey' AND status='0' LIMIT 1") > 0){
	//finish("logon_checker","Your account is inactive!");
}else{
	foreach(x_select("0","userdata","matric_no='$matric' AND password='$passkey'","1","fullname") as $key){
	$id = $key["id"];
	$dept = $key["role"];
	$name = $key["fullname"];
	$matric = $key["matric_no"];
	
	$mobile = $key["mobile"];
	$date = $key["dated_on"];
	$wallet = $key["wallet_amount"];
	$wtype = $key["wallet_type"];
	$ph = $key["photo_path"];
	xstart("0");
	//session_write_close();
	$_SESSION["IQGAMES_ID_2018_VISION"] = $id;
	$_SESSION["IQGAMES_DEPT_2018_VISION"] = $dept;
	$_SESSION["IQGAMES_NAME_2018_VISION"] = $name;
	$_SESSION["IQGAMES_MATRIC_2018_VISION"] = $matric;
	
	$_SESSION["IQGAMES_DATE_2018_VISION"] = $date;
	$_SESSION["IQGAMES_MOBILE_2018_VISION"] = $mobile;
	$_SESSION["IQGAMES_WALLET_2018_VISION"] = $wallet;
	$_SESSION["IQGAMES_WTYPE_2018_VISION"] = $wtype;
	$_SESSION["IQGAMES_PHOTO_2018_VISION"] = $ph;
	$_SESSION['LOGIN-TOKEN-GENERATOR'] = sha1($id).md5(uniqid());
	
	xstart("1");
	
	unset($_SESSION['XCAPE_HACKS']); // bypassing session Hijacking
	
	// renewing + Generating new login tokens
	
	$pgtokens = $_SESSION['LOGIN-TOKEN-GENERATOR'];
	?>
		<script>
		function startApp(){
			showalert("Login was successful!");
			setTimeout(function(){
				window.location = "./?rtokens=<?php echo $pgtokens;?>";
			},3000);
		}
		startApp();
		</script>
	<?php
	}
	
}	
	
}else{
	echo "inc"; // invalid credentials
	}
	
}else{	
	echo "missing"; // parameter missing!
}
?>