$(document).ready(function(){
	var i=1;	/* variable linked to opening of description box and form */
	var j=1;	/* variable linked to opening of description box and form by changing the select option */



	/* Transitions after submitting Category */

	$("#catsubmit").click(function(){
		$("#subcatselect").slideDown(500);
		$("#profile").css({"top":"-122.5%"})
	});


	

	/* Transitions after submitting subcategory */


	$("#submit").click(function(){
		$("#profile").css({"top":"-185%"})
		$("#prodtype").slideDown(200,function(){
			$("#imageupload").slideDown(200,function(){
				if(i==1){
				
				$("#description").toggle("slide",{direction:'down'},200,function(){
					$("#laterform").delay(400).slideToggle(400);
				});
				i++;
				}
				else{
				
				}

				});
				j++;		

	});
		

	});



	/* On Change event of subcategory*/


	$("#subcatselect").on('change','select',function(){
		if(j==1){

		}
		else{
		$("#laterform").slideToggle(100,function(){
			$('#description').delay(300).toggle("slide",{direction:'down'},100,function(){
				$("#imageupload").slideUp(100,function(){
					$("#prodtype").slideUp(100);
					$("#profile").css({"top":"-122.25%"})
				});
				
			});
		});
		
		i=1;
		j=1;

		}
	});





	/* HOME button Transition */


	$("#glyphy-pos-div1").click(function(){
		$("#glyphy-pos-div1").addClass("arrow");
		$("#glyphy-pos-div2").removeClass("arrow");
		$("#glyphy-pos-div3").removeClass("arrow");
		$("#profile").animate({left:'100%'},500,function(){
			$("#profile").animate({zIndex:'0'},500);
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
			$("#profile").animate({left:'0%'},500,function(){
				$("#profile").animate({zIndex:'10'},500);
				$("#laterform").css({"display":"none"});
			});
		}
		else{
			$("#profile").css({"display":"block"});
			$("#profile").animate({left:'0%'},500,function(){
				$("#profile").animate({zIndex:'10'},500);
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





	/* Adding and removing new image upload option and displaying the image */


	var input=$("#inputs");
	var imageshow=$('#imagedisplay ul')
	var k=3;
	$("#plus").click(function(){
		if(k<6){
			$('<div id="new"><input type="file" name="image'+i+'" class="images" onchange="readURL(this,'+k+')"><span id="rem" class="remove glyphicon glyphicon-remove-sign"></span></div>').appendTo(input);
			$('<li><img id ="i'+k+'" src="#"></li>').appendTo(imageshow);
			k++;
		}
		else{
			alert("Maximum of 5 images can be uploaded");
		}


		if(k==4){
			$("#description").css({"top":"-265.25%"});
			$("#laterform").css({"top":"-253%"})
			$("#profile").css({"top":"-190%"})
		}
		else if(k==5){
			$("#description").css({"top":"-274.25%"});
			$("#laterform").css({"top":"-262%"})
			$("#profile").css({"top":"-194%"})
		}
		else if(k==6){
			$("#description").css({"top":"-284.25%"});
			$("#laterform").css({"top":"-272%"})
			$("#profile").css({"top":"-199%"})
		}
	});

	$(document).on('click','.remove',function(){
		$(this).parent().remove();
		k--;
		var nam ='#imagedisplay ul li:eq('+(k-1)+')'
		$(nam).remove();

		if(k==3){
			$("#description").css({"top":"-256.25%"});
			$("#laterform").css({"top":"-245%"})
			$("#profile").css({"top":"-185%"})
		}
		else if(k==4){
			$("#description").css({"top":"-265.25%"});
			$("#laterform").css({"top":"-253%"})
			$("#profile").css({"top":"-190%"})
		}
		else if(k==5){
			$("#description").css({"top":"-274.25%"});
			$("#laterform").css({"top":"-262%"})
			$("#profile").css({"top":"-194%"})
		}
	});


	



	/* Fontsize-resize with width of the element */




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


function readURL(input,a) {
		if(input.files && input.files[0]){
			var reader=new FileReader();

			reader.onload = function(e) {
				var imgpos='#i'+a;
				$(imgpos)
				.attr('src',e.target.result)
			};
			reader.readAsDataURL(input.files[0]);
		}
	}