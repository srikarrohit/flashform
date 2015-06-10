$(document).ready(function(){
	$("#submit").click(function(){
		var i=1;
		$("#prodtype").slideDown(400);		
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

	$('#prodtype').on('change','select', function(){
		$('#description').toggle("slide",{direction:'left'},400);
		$("#laterform").delay(500).slideToggle(500,function(){
			$('#description').toggle("slide",{direction:'left'},400);
			$("#laterform").delay(500).slideToggle(500);
		});
	})

})
