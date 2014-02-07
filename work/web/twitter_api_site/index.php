<?php

/* Load required lib files. */
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');
require_once('db_connect.php');



//keeps track of whether or not the tweets were already acquired
$_SESSION['got_tweets'];

/* If access tokens are not available redirect to connect page. */
if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./clearsessions.php');
}
/* Get user access tokens out of the session. */
$access_token = $_SESSION['access_token'];

/* Create a TwitterOauth object with consumer/user tokens. */
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
$connection->format = 'xml';

$content = $connection->get('statuses/user_timeline', array('user_id' => '276545798', 'include_rts' => 'true', 'count' => '50', 'trim_user', '1'));

if(!isset($_SESSION['got_tweets']))
{
	//clear all existing tweets from the DB and fill if a new session
$query = "TRUNCATE TABLE a4_tweets";
$mysqli->query($query);
$query = "TRUNCATE TABLE a4_would";
$mysqli->query($query);
$query = "TRUNCATE TABLE a4_wouldnt";
$mysqli->query($query);

	$xmlObject = simplexml_load_string($content);
	foreach($xmlObject->status as $status) {
					//insert tweets into the database
					$query = "INSERT INTO a4_tweets (TweetText, ViewCount, Time, User) VALUES ('".$status->text."', '0','".$status->created_at."','".$status->retweeted_status->user->screen_name."')";
					$mysqli->query($query);
				}
	//one fill per session
	$_SESSION['got_tweets'] = true;				
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Veronica's Twitter OAuth Site</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <style type = "text/css">
		@import url('css/reset.css');
		@import url('css/960.css');
		@import url('css/text.css');
		@import url('css/style.css');
	</style>
    <script type ="text/javascript" src="js/jquery-1.5.2.min.js"></script>
    <script type ="text/javascript" src="js/jquery.tools.min.js"></script>
    <script type ="text/javascript" src="js/jquery-ui-1.8.11.custom.min.js"></script>      
	<script type="text/javascript" src='js/a4.js'> </script>
  </head>
  <body>
  <div class = "container_12">
   <div id = "hdr">
    </div>
    <div id = "main_content">
           <div class = "grid_12">
                <div id = 'tweet'>
                </div>
                <form id = 'the_form' action = ''>
                	<fieldset>
                      	<p><input type = 'submit' id = 'yes_btn' name = 'would' value = '' />
                        <input type = 'submit' id = 'no_btn' name = 'wouldnt' value = '' /></p>
                        <a href = "results.php">Click to see the results!</a>
                    </fieldset>
                </form>
                
            </div>
     </div>
     <div id = 'content_footer'>
     </div>  
   </div>	
  </body>
</html>