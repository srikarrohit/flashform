
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

})
