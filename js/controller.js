$(document).ready(function(){
	function dialogbox(clickagentid,divclassname,closebossid){
		$("#"+clickagentid).click(function(){
		$("."+divclassname).slideToggle("slow");
		});
		$("#"+closebossid).click(function(){
			$("."+divclassname).hide("slow");
		});	
	}
	
	// Dialog Box for subject category
	dialogbox("addnewsub","openCategory","closeSub");
	// Dialog Box for user profile
	dialogbox("showprof","profiler","closeProfile");
});