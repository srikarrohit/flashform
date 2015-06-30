$(document).ready(function(){
	var i=1;	/* variable linked to opening of description box and form */
	var j=1;	/* variable linked to opening of description box and form by changing the select option */

	
	/* On Change event of subcategory*/


	$("#subcatselect").on('change','select',function(){
		if(j==1){

		}
		else{
		$("#laterform").slideToggle(300,function(){
			$('#description').delay(500).toggle("slide",{direction:'down'},200,function(){
				$("#prodtype").slideUp(400);
			});
		});
		
		i=1;
		j=1;

		}
	});


	/* Transitions after submitting category */


	$("#submit").click(function(){
		$("#prodtype").slideDown(200,function(){
		if(i==1){
			
			$("#description").toggle("slide",{direction:'down'},200,function(){
				$("#laterform").delay(700).slideToggle(400);
			});
			i++;
		}
		else{
			
		}

		});
		j++;		


	});


	/* HOME button Transition */


	$("#glyphy-pos-div1").click(function(){
		$("#glyphy-pos-div1").addClass("arrow");
		$("#glyphy-pos-div2").removeClass("arrow");
		$("#glyphy-pos-div3").removeClass("arrow");
		$("#profile").animate({left:'100%'},800,function(){
			$("#profile").animate({zIndex:'0'},800);
			var dis1=$("#description").css("display");
			if(dis1=="block"){
				$("#laterform").css({"display":"block"});
				$("#profile").delay(500).css({"display":"none"});
			}

			else
			{
				$("#profile").css({"display":"none"});
			}
		});
		
	});


	/* Profile Page Transition */


	$("#glyphy-pos-div2").click(function(){
		$("#glyphy-pos-div2").addClass("arrow");
		$("#glyphy-pos-div1").removeClass("arrow");
		$("#glyphy-pos-div3").removeClass("arrow");
		dis=$("#laterform").css("display");
		if(dis== "none"){
			$("#profile").css({"display":"block"});
			$("#profile").animate({left:'0%'},800,function(){
				$("#profile").animate({zIndex:'10'},800);
				$("#laterform").css({"display":"none"});
			});
		}
		else{
			$("#profile").css({"top":"-142%","display":"block"});
			$("#profile").animate({left:'0%'},800,function(){
				$("#profile").animate({zIndex:'10'},800);
				$("#laterform").css({"display":"none"});
			});
		}
	});


	/* List of products page */


	$("#glyphy-pos-div3").click(function(){
		$("#glyphy-pos-div1").removeClass("arrow");
		$("#glyphy-pos-div2").removeClass("arrow");
		$("#glyphy-pos-div3").addClass("arrow");
	});

	$("#catsubmit").click(function(){
		$("#subcatselect").slideDown(500);
	});



	/* Fontsize-resize with width of the element */

	$('').flowtype({
		minFont: 1,
		maxFont: 24,
	});


/*
 	*********************************************
 	*********************************************
 	************ jquery for login page **********
	*********************************************
	*********************************************
 */


	
	/* Signup popup transition */

	$("#signup").click(function(){
		$("#top-navbar").css({"opacity":"0.5"});
		$("#logindiv,#signup").delay(500).css({"display":"none","opacity":"0.8"});
		$("#request").slideDown(500);
	});
	
	/* Signup popup close transition */
	
	$("#close").click(function(){
		$("#logindiv").css({"display":"block"});
		$("#request").slideUp(500,function(){
			$("#signup").css({"display":"block","opacity":"1"});
			$("#logindiv").css({"opacity":"1"});
		});
		$("#top-navbar").css({"opacity":"1"});
		
	})
})
