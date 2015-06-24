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
		$("#prodtype").slideDown(200);
		j++;		
		if(i==1){
			$('#description').delay(400).toggle("slide",{direction:'left'},400,function(){

			});	
			$("#laterform").delay(800).slideToggle(400);
			i++;
		}
		else{
			i++;
		}

	});

	$("#glyphy-pos-div1").click(function(){
		$('body').fadeOut(500,function(){
			window.location.href="http://www.flashfetch.in";
		});
	});

	$("#glyphy-pos-div2").click(function(){
		$("#profile").css({"display":"block"});
		$("#profile").animate({left:'0%'},800,function(){
			$("#profile").animate({zIndex:'10'},800);
		});
	});

	$("#catsubmit").click(function(){
		$("#subcatselect").slideDown(500);
	});

	
	$('#personinfo').flowtype({
		minFont: 1,
		maxFont: 15
	});


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
