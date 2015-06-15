
$(document).ready(function(){
	var i=1;
	var j=1;
	$("#subcatselect").on('change','select',function(){
		if(j==1){

		}
		else{
		$("#laterform").slideToggle(400);
		$('#description').delay(500).toggle("slide",{direction:'left'},400);
		$("#prodtype").slideUp(400);
		i=1;
		}
	});
	$("#submit").click(function(){
		$("#prodtype").slideDown(400);
		j++;		
		if(i==1){
			$('#description').toggle("slide",{direction:'left'},400);
			$("#laterform").delay(500).slideToggle(500);
			i++;
		}
		else{
			i++;
		}

	});

	$("#catsubmit").click(function(){
		$("#subcatselect").slideDown(500);
	})

	/*
	$('#prodtype').on('change','select', function(){
		$('#description').toggle("slide",{direction:'left'},400);
		$("#laterform").delay(500).slideToggle(500,function(){
			$('#description').toggle("slide",{direction:'left'},400);
			$("#laterform").delay(500).slideToggle(500);
		});
	})  */

/* jquery for login page*/
	$("#signup").click(function(){
		$("#top-navbar").css({"opacity":"0.5"});
		$("#logindiv,#signup").delay(500).css({"display":"none","opacity":"0.8"});
		$("#request").slideDown(500);
	});
	
	$("#close").click(function(){
		$("#logindiv").css({"display":"block"});
		$("#request").slideUp(500,function(){
			$("#signup").css({"display":"block","opacity":"1"});
			$("#logindiv").css({"opacity":"1"});
		});
		$("#top-navbar").css({"opacity":"1"});
		
	})	
})
