function processmediaData(formid,resultid,processingScript,Switcher){
			$("#"+formid).on('submit',(function(e) {
			e.preventDefault();
			$("#"+resultid).show("slow");
			$("#"+resultid).html("<img class='img-circle' src='img/ajax-loader.gif'/> Processing wait....");
			
			// uploading progressbar started
			$("#progress-div").show();
			$(this).ajaxSubmit({ // relies on jquery.form.js
				beforeSubmit: function() {
				  $("#progress-bar").width('0%');
				},
				uploadProgress: function (event, position, total, percentComplete){
					$("#progress-bar").width(percentComplete + '%');
					$("#progress-bar").html('<div id="progress-status">' + percentComplete +' %</div>');
				},
				success:function (){
					
				},
				resetForm: true
			});

			// uploading progressbar ended
			$.ajax({
	        	url: processingScript+"?switcher="+Switcher,
				type: "POST",
				data:  new FormData(this),
				contentType: false,
	    	    cache: false,
				processData:false,
				success: function(data){
					
					$("#progress-div").hide("slow");
					$("#"+resultid).html(data);
					setTimeout(function(){
						$("#"+resultid).hide("slow");
					},2000)
				
				},
			  	error: function(){ alert("Error: Failed to process data");}
		   });
		}));
	}


function processAjaxForm(formid,resultid,processingScript){
		$("#"+formid).on('submit',(function(e) {
		$("#"+resultid).show("slow");
		
		$("#"+resultid).html("<img class='img-circle' src='img/ajax-loader.gif'/> Processing wait....");
		e.preventDefault();
		$.ajax({
			url: processingScript,
			type: "POST",
			data:  new FormData(this),
			contentType: false,
			cache: false,
			processData:false,
			success: function(data){
				$("#"+resultid).html(data);
				if(formid == "plus-ncat"){
					$("#subjectplus").val("");
				}
				setTimeout(function(){
					$("#"+resultid).hide("slow");
				},2000)
			
			},
			
			error: function(){ alert("Error: Failed to process form");}
	   });
	}));
}	

function mediapusher(content){
		$("#"+content).submit();
}
	
function qoption(str){
	
	if(str.length == "0"){
		$(".attachit").hide("slow");
		alert("You must choose an option!");
		
	}else{
		
		if(str == "objective"){
			$(".attachit").show("slow");
			$(".true_false_based").hide("slow");
			$(".yes_no_based").hide("slow");
			$(".subjective_based").hide("slow");
			$(".objective_based").show("slow");
			
		}else if(str == "subjective"){
			$(".attachit").show("slow");
			$(".true_false_based").hide("slow");
			$(".yes_no_based").hide("slow");
			$(".subjective_based").show("slow");
			$(".objective_based").hide("slow");
			
		}else if(str == "true_false"){
			$(".attachit").show("slow");
			$(".true_false_based").show("slow");
			$(".yes_no_based").hide("slow");
			$(".subjective_based").hide("slow");
			$(".objective_based").hide("slow");
			
		}else if(str == "yes_no"){
			$(".attachit").show("slow");
			$(".true_false_based").hide("slow");
			$(".yes_no_based").show("slow");
			$(".subjective_based").hide("slow");
			$(".objective_based").hide("slow");
			
		}else{
			alert("You must choose an invalid option!");
		}
		
	}
	
}
	
	