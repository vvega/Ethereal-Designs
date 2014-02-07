<?
error_reporting(0);

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//make query according to the variables passed
$yql_query = "http://query.yahooapis.com/v1/public/yql?q=select%20item%20from%20weather.forecast%20where%20location%20%3D%20'".$_GET['loc']."'&diagnostics=true";
//send query

    curl_setopt($ch, CURLOPT_URL, $yql_query);
	
	$curl_response = curl_exec($ch);	

//get xml	
$xmlObject = simplexml_load_string($curl_response);
if($xmlObject)
	{
			$item = $xmlObject->results->channel->item[0];
			$yweather = $item->children('http://xml.weather.yahoo.com/ns/rss/1.0');	
			echo "<h7>".$item->title."</h7>";
			echo "<div id = 'temp'><h1>".$yweather->condition->attributes()->temp."&deg; F</h1></div>";
			echo "<div id = 'description'>".$item->description."</div>";	
	}
		
curl_close($ch);	
?>
