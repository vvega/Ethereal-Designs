<?
error_reporting(0);

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//make query according to the variables passed
$yql_query = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20upcoming.events%20where%20category_id%20%3D8%20and%20location%20%3D%20%22".rawurlencode($_GET['loc'])."&diagnostics=true";//%22%20and%20start_date%20%3D%22".date('Y-m-d')."%22%20LIMIT%206&diagnostics=true";

//send query
    curl_setopt($ch, CURLOPT_URL, $yql_query);
	$curl_response = curl_exec($ch);
	
//get xml	
$xmlObject = simplexml_load_string($curl_response);
/*	//echo $xmlObject->results->event[0]->attributes()->name;
if($xmlObject)
{
	//parse events
		$i = 0;
		var_dump($xmlObject); 	
	
			foreach($xmlObject->results->event as $event)
			{
					$source = null;
					$i++;
					$description = $event->attributes()->description;
					echo $event->attributes()->category_id;
					$name = $event->attributes()->name;
				//find keywords in description to direct to the correct icon sources
					if (preg_match("/basketball/", strtolower($description), $matches) || preg_match("/basketball/", strtolower($name), $matches)) {
						 //basketball event
						  $source = "img/basketball.png";
					}
					else if(preg_match("/baseball|world\sseries|yankees/", strtolower($description), $matches) || preg_match("/baseball|world\sseries/", strtolower($name), $matches)) {
						 //baseball event
						  $source = "img/baseball.png";
					}
					else if(preg_match("/football|super\sbowl/", strtolower($description), $matches) || preg_match("/football|super\sbowl/", strtolower($name), $matches)) {
						 //football event
						  $source = "img/football.png";
					}
					else if(preg_match("/soccer|world\scup/", strtolower($description), $matches) || preg_match("/soccer|world\scup/", strtolower($name), $matches)) {
						 //soccer event
						  $source = "img/soccer.png";
					}
					else if(preg_match("/lacrosse/", strtolower($description), $matches) || preg_match("/lacrosse/", strtolower($name), $matches)) {
						 //lacrosse event
						  $source = "img/lacrosse.png";
					}
					else if(preg_match("/tennis|world\stour/", strtolower($description), $matches) || preg_match("/tennis|world\stour/", strtolower($name), $matches)) {
						 //tennis event
						  $source = "img/tennis.png";
					}
					else if(preg_match("/wrestling|boxing/", strtolower($description), $matches) || preg_match("/wrestling|boxing/", strtolower($name), $matches)) {
						 //boxing event
						  $source = "img/boxing.png";
					}
					else if(preg_match("/hockey/", strtolower($description), $matches) || preg_match("/hockey/", strtolower($name), $matches)) {
						 //hockey event
						  $source = "img/boxing.png";
					}
					else {
						 //unknown event
						  $source = "img/unknown.png";
					}
					print "<img src ='".$source."' />".$i.") ".$name;
					print "<br/>";
			}
	
	}
	else
	{
		echo "received no response.";
	}

		
curl_close($ch);	
?>
*/