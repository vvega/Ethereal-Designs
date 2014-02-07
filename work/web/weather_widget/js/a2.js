
function getQuery(e)
{
	e.preventDefault();
	
	var loc = document.getElementById('location').value;
	
	//if null
	if(loc == "" || loc == null)
	{
		alert('The location is blank. Please enter a valid location.');
		return;
	}
	//match with city,state or city,(space)state and also any 5-digit zip
	else if(loc.search(/^\w+(,)\s?\w+$|^\d{5}$/) == -1)
	{
		alert('Please enter a valid location.');
		return;
	}
	
	//if no error, proceed with fetching data
	var xhr = new XMLHttpRequest();
	var e_xhr = new XMLHttpRequest();

	if(xhr)
	{
		xhr.onreadystatechange = function(){ 
				displayResponse(xhr);
					}
					//pass the variables to the PHP file to process
					xhr.open("GET", "weather.php?loc="+loc, true);
					xhr.send(null);	
					document.getElementById('progress').style.visibility = "visible";						
	}
	if(e_xhr)
	{
		e_xhr.onreadystatechange = function(){ 
				displayEvents(e_xhr);
					}
				
					e_xhr.open("GET", "events.php?loc="+loc, true);
					e_xhr.send(null);	
	}
	
}
function displayResponse(xhr) {
				if (xhr.readyState == 4) {
					document.getElementById('progress').style.visibility = "hidden";	
					if (xhr.status == 200 || xhr.status == 304) {
						
						//get the temperature
						var container = document.getElementById('results_container');
						container.innerHTML = xhr.responseText;
						var response = xhr.responseText;
														
						if(response != "")
						{
							//get temp
							var forecast = response.split("h1");
							var temp = forecast[1].split("<");
							var temp_int = temp[0].split(">");
							var temp_final = parseInt(temp_int[1]);	
							
							var conditions = forecast[2].split("<BR />");							
			
						
							//determine design
							if(temp_final < 50)
							{
								//cold
								if(conditions[0].search(/Cloudy|Showers|Rain/i)==-1)
								{
									//NOT cloudy
									document.getElementById("main_container").style.backgroundImage = "url('img/bg_sunny_cold.png')";
								document.getElementById("events_title").style.backgroundImage = "url('img/events_cold.png')";
								}
								else
								{	
								//cloudy
								document.getElementById("main_container").style.backgroundImage = "url('img/bg_cloudy.png')";
								document.getElementById("events_title").style.backgroundImage = "url('img/events_cloudy.png')";
									
								}
							}
							else
							{
								//warm
								if(conditions[0].search(/Cloudy|Showers|Rain/i)==-1)
								{
									//NOT cloudy
									document.getElementById("main_container").style.backgroundImage = "url('img/bg_warm.png')";
								document.getElementById("events_title").style.backgroundImage = "url('img/events_warm.png')";
								}
								else
								{
									//cloudy		
								document.getElementById("main_container").style.backgroundImage = "url('img/bg_cloudy.png')";
								document.getElementById("events_title").style.backgroundImage = "url('img/events_cloudy.png')";
									
								}
							}
						}
							

						container.innerHTML = response;
						
					}
					else if (xhr.status == 404) {
						alert("Oops, file not found!");
					}
				}
				loc = "";
			}
			
function displayEvents(e_xhr)
{
	if (e_xhr.readyState == 4) {
					if (e_xhr.status == 200 || xhr.status == 304) {
						//get the temperature
						var container = document.getElementById('events_container');									
												
						alert(forecast);
						container.innerHTML = e_xhr.responseText;
	
					}
					else if (xhr.status == 404) {
						alert("Oops, file not found!");
					}
				}
				loc ="";
			
}
window.onload = function()
{
	// Create an event handler for submitting the form  
	var form = document.getElementById('weatherform');  
	form.addEventListener('submit',getQuery,false); 
}
