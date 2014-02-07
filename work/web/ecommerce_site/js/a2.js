// DIG4530c Assignment 2 JS
var vgClicked = false;
window.onload = function()
{
	//controls cart image changes
	var cart_img = document.getElementById('cart_img');
	cart_img.onmouseover = function()
	{
		cart_img.setAttribute('src', "img/cart_icon_over.png"); 
	}
	cart_img.onmouseout = function()
	{
		cart_img.setAttribute('src', "img/cart_icon.png"); 
	}
	cart_img.onmousedown = function()
	{
		cart_img.setAttribute('src', "img/cart_icon_down.png"); 
	}
	cart_img.onmouseup = function()
	{
		cart_img.setAttribute('src', "img/cart_icon_over.png"); 
	}
	
	if(window.location == "client.php")
	{
		//by default, personal info will be displayed first
		var p_link = document.getElementById('p_link');
		p_link.style.backgroundPosition = "-205px 0px";
		p_link.onclick = pclientClick;
		
		var a_link = document.getElementById('a_link');
		a_link.onclick = aclientClick;
	}
	
	//controls navigation effects
	var vg_link = document.getElementById('vg');
	vg_link.onclick = vgClick;
	

}
function vgClick()
{
	var list_items = document.getElementsByTagName('li');
	var games = list_items[1];
	var consoles = list_items[2];
	
	if(vgClicked == false)
	{
		//controls videogame link effects
		this.style.backgroundPosition = "-205px 0px";
		
		games.style.fontSize = "13px";
		games.style.marginLeft = "60px";
		games.style.visibility = "visible";
		games.style.width = "166px";
		games.style.height = "36px";
		
		consoles.style.fontSize = "13px";
		consoles.style.marginLeft = "60px";
		consoles.style.visibility = "visible";
		consoles.style.width = "166px";
		consoles.style.height = "36px";
		vgClicked = true;
	}
	else
	{
		//resets 
		this.style.backgroundPosition = "0px 0px";
		this.onmouseover = function()
		{
			this.style.backgroundPosition = "-205px 0px";
		}
		this.onmouseout = function()
		{
			this.style.backgroundPosition = "0px 0px";
		}
		
		games.style.visibility = "hidden";
		games.style.width = "0px";
		games.style.height = "0px";
		
		

		consoles.style.visibility = "hidden";
		consoles.style.width = "0px";
		consoles.style.height = "0px";
		vgClicked = false;
		
	}
}
	function pclientClick()
	{

			var a_link = document.getElementById('a_link');

			this.style.backgroundPosition = "-205px 0px";
			a_link.style.backgroundPosition = "0px 0px";
			
			var account = document.getElementById('account_info');
			var personal = document.getElementById('personal_info');
			
			account.style.visibility = "collapse";
			personal.style.visibility = "visible";
	}
	function aclientClick()
	{
			var p_link = document.getElementById('p_link');
		
			this.style.backgroundPosition = "-205px 0px";
			p_link.style.backgroundPosition = "0px 0px";
			
			var account = document.getElementById('account_info');
			var personal = document.getElementById('personal_info');
			
			account.style.visibility = "visible";
			personal.style.visibility = "collapse";
	}
