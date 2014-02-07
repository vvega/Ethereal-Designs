// Veronica Vega - Assignment 01 JavaScript
var fortuneGiven;
window.onload = function() {
	fortuneGiven = false;
}
function changeCursor()
{
	document.body.style.cursor = 'help';
}
function changeBack()
{
	document.body.style.cursor = 'default';
}
function getFortune()
{
	//switch image
		var img = document.getElementsByTagName('img');
		var image = img[0];
		image.src = "img/fortune_cookie_broken.png";
		
		//create request object
		var xhr = new XMLHttpRequest();
		if (xhr) {
			xhr.onreadystatechange = function() {
				//checks to see if the readyState operation is finished
				if (xhr.readyState == 4) {
						//if http request status is okay
						if (xhr.status == 200 || xhr.status == 304) {
						
							var fortuneDiv = document.getElementById("fortune");
							
						if(fortuneGiven == true)
							{
								var p1 = document.getElementById('the_fortune');
								p1.parentNode.removeChild(p1);
							}
							//splits the body so that we can isolate the section with the fortunes
							var fortune_container = xhr.responseText.split('$$');
							//splits the fortune section
							var fortune_list = fortune_container[1].split('|');
							//sets visibility to true
							fortuneDiv.style.visibility = "visible";
							//gets a random fortune
							var rand_index = parseInt(Math.floor(Math.random()*fortune_list.length));
							//displays the fortune within a paragraph tag
							fortuneDiv.innerHTML += "<p id = 'the_fortune'>" + fortune_list[rand_index] + "</p>";
							fortuneGiven = true;
						}
				}
			};
				xhr.open("GET", "fortunes.html", true);
				xhr.send(null);
				//fortune is given
				
			}
}