<? 
	require_once('db_connect.php');
	$decision = $_GET['decision'];
	$id = $_GET['id'];
	
	//get the appropriate tweet data
	$query = "SELECT * FROM a4_tweets WHERE TweetID ='".$id."'";
	$results = $mysqli->query($query);
	while($row = $results->fetch_array())
	{
		$text = $row['TweetText'];
		$date = $row['Time'];
		$user = $row['User'];
	}
	
	
	if($decision == 'yes_btn')
	{
		
		//update viewcount in tweet table
		$query = "UPDATE a4_tweets SET ViewCount = '1' WHERE TweetID = '".$id."'";
		$mysqli->query($query);
		//put into the "would" table
		$query = "INSERT INTO a4_would (TweetText, ViewCount, Time, User) VALUES ('".$text."', '1','".$date."','".$user."')";
		$mysqli->query($query);
	}
	else
	{
		//update viewcount in tweet table
		$query = "UPDATE a4_tweets SET ViewCount = '1' WHERE TweetID = '".$id."'";
		$mysqli->query($query);
		//put into the "wouldnt" table
		$query = "INSERT INTO a4_wouldnt (TweetText, ViewCount, Time, User) VALUES ('".$text."', '1','".$date."','".$user."')";
		$mysqli->query($query);
	}
	
	//deletes this tweet form the tweet table
	$query = "DELETE FROM a4_tweets WHERE TweetID ='".$id."'";
	$mysqli->query($query);
?>