// A3 JS
var name = new Array();
var type = new Array();
var price = new Array();
var image = new Array();
var description = new Array();
var isOpen = false;

jQuery(document).ready(function()
	{		
		//hide the detail div
		$('#details').hide();
		
		//get info
		$.ajax({
			type: "GET",
			url: "products.xml",
			dataType: "xml",
			success: xmlParser
		});
	});
	
function xmlParser(xml)
{
	//loops through each item
	var i = 0;
	$(xml).find('item').each(function(){
			name[i] = $(this).find("name").text();
			type[i] = $(this).find("type").text();
			price[i] = $(this).find("price").text();
			image[i] = $(this).find("image").text();
			description[i] = $(this).find("description").text();
			i++;
		});

		 $('#lamp').attr('title','Click the button to see details about the '+name[0]+".");
		 $('#sofa').attr('title','Click the button to see details about the '+name[1]+".");
		 $('#chair').attr('title','Click the button to see details about the '+name[2]+".");
		 
		//sets up the rest of the page
		pageSetup();
 		
}
function pageSetup()
{
	//assign tooltips				
	$('#main').tooltip({ // tweak the position
   // use the "slide" effect
   effect: 'slide',
   direction: 'up',
   offset: [760, 2]
	});	
		$('#lamp').tooltip({ // tweak the position
   offset: [10, 2],

   // use the "slide" effect
   effect: 'slide'
		});
		
		$('#chair').tooltip({ // tweak the position
   offset: [10, -70],

   // use the "slide" effect
   effect: 'slide'
		});
		
		$('#sofa').tooltip({ // tweak the position
   offset: [10, 2],

   // use the "slide" effect
   effect: 'slide'
		});
		
		$('#kitty').tooltip({ // tweak the position
   offset: [10, 2],

   // use the "slide" effect
   effect: 'slide'
		});
		
		$('#the_couch').tooltip({ // tweak the position
   offset: [10, 2],

   // use the "slide" effect
   effect: 'slide'
		});
		
		
	//set listeners
	$('#detail1').click(setContent(getContent,0));
	$('#detail2').click(setContent(getContent,1));
	$('#detail3').click(setContent(getContent,2));
	$('#home').click(getHome);
	$('#gallery').click(getGallery);
	
}
function setContent(fn,param)
{
	return function()
	{
		return fn(param);
	}
}
function getContent(index)
{
	closeOverlay();
	//hide the other elements
	$('#detail1').fadeOut();
	$('#lamp').hide();
	$('#detail2').fadeOut();
	$('#sofa').hide();
	$('#detail3').fadeOut();
	$('#chair').hide();

//animate out main, change the background image, fade back in
	$('#main').animate({
	opacity: 0.0,
    width: '50',
	height: '50'
  }, 500, function() {
    $('#main').css('background-image','url('+image[index]+')');
	$('#main').animate({
		opacity: 1.0,
		width: '1024',
		height: '768'
	}, 500, function(){	
		$("#details").fadeIn(700);
		//adjust detail div position according to view
		switch(index)
		{
			case 0:
				$("#details").css('float','right');
				$("#details").css('margin-top','300px');
				break;
			case 1:
				$("#details").css('float','left');
				$("#details").css('margin-top','0');
				break;
			case 2:
				$("#details").css('float','left');
				$("#details").css('margin-top','0');
			default:
				break;
		}
		$("#details").html('<h3>'+name[index]+'</h3>'+'<p>Type: <em>'+type[index]+'</em><br/>Price: <em>$'+price[index]+'</em><br/>Description:<br/><em>'+description[index]+'</em>');
	})
  });
  
  //set information for the detail

	
}
function getHome()
{
	closeOverlay();
	$("#details").fadeOut(100);
//animate out main, change the background image, fade back in
	$('#main').animate({
	opacity: 0.0,
    width: '50',
	height: '50'
  }, 500, function() {
    $('#main').css('background-image','url(img/main_room.png)');
	$('#main').animate({
		opacity: 1.0,
		width: '1024',
		height: '768'
	}, 500, function(){
		//bring elements back
		$('#detail1').fadeIn();
		$('#lamp').show();
		$('#detail2').fadeIn();
		$('#sofa').show();
		$('#detail3').fadeIn();
		$('#chair').show();	
		})
  }); 
}
function getGallery()
{
	//create div to be populated with details
	var infoDiv = document.createElement('div');
	
	if(isOpen == false)
	{
					//flag variable for window
		isOpen = true;
			
		$('.overlay').fadeIn();
		//for each image on the image array
		$(image).each(function (index, src)
		{
			//creates element
			var div = document.createElement('div');
			var img = document.createElement('img');
			//adjust height and attributes and append it to the container div
			$(img).width(150).height(100).attr('src',src);
			$(div).width(150).height(100).attr('class','thumb').attr('title',index).append($(img));
			$('.overlay').append($(div));
		}
		);	
		
			$(infoDiv).attr('id','infoDiv');
			
			//set listeners
			$('.thumb').mouseover(function()
			{
				//bounce on mouseover
				 $(this).effect("bounce", {distance:20, times: 1}, 500);
				 
				 //show details on mouseover
				 var theIndex = $(this).attr('title');
				$(infoDiv).html('<h3>'+name[theIndex]+'</h3>'+'<p>Type: <em>'+type[theIndex]+'</em><br/>Price: <em>$'+price[theIndex]+'</em><br/>Description:<br/><em>'+description[theIndex]+'</em>'); 
				$('.overlay').append($(infoDiv));
			});
			$('.thumb').mouseout(function()
			{
				//stop animation on mouseout
				 $(this).stop(false,true);
			});
			
			//listener for exit button
			$('#exit').click(closeOverlay);
	}
	else
	{
		closeOverlay();
	}
}
function closeOverlay()
{
	//clean (we can keep the exit div) and close the overlay
		$('.overlay').html("<div id = 'exit'></div>");
		$('.overlay').fadeOut();
		isOpen = false;
}