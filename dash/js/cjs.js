
function dialogbox(clickagentid,divclassname,closebossid){

	$("#"+clickagentid).click(function(){
	$("."+divclassname).slideToggle("slow");
	});
	$("#"+closebossid).click(function(){
		$("."+divclassname).hide("slow");
	});	
}

function loadpage(page){
$(".load-temporary").show(500);
$(".load-temporary").html("<center><img src='img/ldg.gif' class='mini-loader'/></center>");
	$.ajax({
		type	: 'GET',
		url		: page,
		success	: function(data) {
			try {
				$(".load-temporary").hide(500);
				$(".load-pages").html(data);
			} catch (err) {
				alert(err);
			}
		}
	});
}

	