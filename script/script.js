// JavaScript Document
var sections;
var port_sections;
var content;
var ID;
var portID;
var dragger;

jQuery(document).ready(function()
	{	
		//prevent pulling of outdated data\
		 $.ajaxSetup ({
   		 // Disable caching of AJAX responses
    	cache: false
		});
		sections = $(".main_nav"); 
		port_sections = $(".submenu");
		content = $(".content");
		dragger = $(".dragger_container");
		$('#nav').accordion({
			 active: true, 
			 collapsible:true,
			header: '.port_nav', 
			navigation: false, 
			event: 'mouseover',  
			animated: 'easeslide',
			icons: {"header": "ui-icon-triangle-1-e", "headerSelected": "ui-icon-triangle-1-s"}
		}); 
		sections.click(function(){  
			//showLoading
			//fade out content
			dragger.hide();
			ID = this.id;
			$(content).fadeOut(300, function(){
					switch(ID){  
					case "home": 				
						content.load("content.html #home_content", function() {
											$(content).fadeIn(500, hideLoading);
											 $('.flexslider').flexslider({
												animation: "slide",
												start: function(slider){
												  //$('body').removeClass('loading');
												}
											});
										});   
						break;  
					case "bio":  
						content.load("content.html #bio_content", function() {
											$(content).fadeIn(500, setUpScrolling);
										});  
						break;  
					case "resume":    
						content.load("content.html #resume_content", function() {
											$(content).fadeIn(500, setUpScrolling);
										}); 
						break;
					case "contact":   
						content.load("content.html #contact_content", function() {
											$(content).fadeIn(500, hideLoading);
										}); 
						break;  
					default:  
						//hide loading bar if there is no selected section  
						hideLoading();  
						break;  
					}  
				}); 
		 });
		
		//for the portfolio sections		
		port_sections.click(function(){  
		//showLoading
			//fade out content
			dragger.hide();
			portID = this.id;
			$(content).fadeOut(300, function(){
					switch(portID)
					{
						case "web":  
							content.load("content.html #web_content",function() {
											$(content).fadeIn(500, setUpWeb);
										}); ;  
							break;  
						case "mobile":  
							content.load("content.html #mobile_content", function() {
											$(content).fadeIn(500, setUpMobile);
										}); 
							break; 	
						case "graphics":  
							content.load("content.html #graphics_content", function() {
											$(content).fadeIn(500, setUpGraphics);
										}); 
							break;
						case "research":
							content.load("content.html #research_content", function() {
											$(content).fadeIn(500, setUpResearch);
										}); 
							break;
						default:
							hideLoading();
							break;
					}
			});
		 });
});

function setUpMobile()
{
	setUpScrolling();
	setUpGallery();
	setUpHover();
}
function setUpGraphics()
{
	setUpScrolling();
	setUpGallery();
}
function setUpResearch()
{
	setUpScrolling();
}
function hideLoading()
{
	$(content).css("overflow", "hidden");
	setUpScrolling();
}
function setUpWeb()
{
	setUpScrolling();
	setUpHover();	
}
function setUpScrolling()
{
	dragger.fadeIn(300, null);
	 $("#mcs4_container").mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","yes",10);
}
function setUpGallery()
{
	//yoxview w/ options
		$("#thumbnails").yoxview({
   		 backgroundColor: 'Blue',
   		 playDelay: 5000
		});

}
function setUpHover()
{
	//create hover for portfolio images
			//initial state for overlay is hidden
		//  $('.infoOverlay').css('display','none');
		   $(".portItem").hover(
     			 function () {
			  $(".infoOverlay",this).slideToggle();
     		 }, function () {
         	$(".infoOverlay",this).slideToggle();
      }
   );
}
function preventScroll()
	{
		//alert("preventing scroll");
		$(content).onmousewheel = function(){ stopWheel(); } /* IE7, IE8 */
	if(document.addEventListener){ /* Chrome, Safari, Firefox */
    	document.addEventListener('DOMMouseScroll', stopWheel, false);
}

}
function stopWheel(e){
    if(!e){ /* IE7, IE8, Chrome, Safari */ 
        e = window.event; 
    }
    if(e.preventDefault) { /* Chrome, Safari, Firefox */ 
        e.preventDefault(); 
    } 
    e.returnValue = false; /* IE7, IE8 */
}
