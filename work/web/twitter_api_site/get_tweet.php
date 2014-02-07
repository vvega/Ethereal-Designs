<?
	require_once('db_connect.php');
	$the_tweet = NULL;
	$query = "SELECT * FROM a4_tweets WHERE ViewCount = '0' LIMIT 1 ";

	$results = $mysqli->query($query);
	$numRows = mysqli_num_rows($results);
	if($numRows == 0 || empty($results) || !$results || $results == NULL || $results == "")
	{
		print "<h3>No more tweets to display.</h3>";
	}
	else
	{
		while($row = $results->fetch_array())
		{
			print "<input id = 'tweet_id' type='hidden' value ='".$row['TweetID']."'/>";
			print "<div class = 'tweet_text'>";
			print "<img class = 'tweet' src = 'img/tweet.png' alt = 'tweet' />";
            print htmlspecialchars($row['TweetText']);
			print "</div>";
			print "<br/>";
			print "Tweeted at: ".$row['Time'];
			print "<br/>";
			print "Retweeted from: <a href='http://www.twitter.com/".$row['User']."'>".$row['User']."</a>";	
			print "<br/>";	
		}
	}
?>