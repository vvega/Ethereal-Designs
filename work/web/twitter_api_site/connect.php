<?php

/**
 * @file
 * Check if consumer token is set and if so send user to get a request token.
 */

/**
 * Exit with an error message if the CONSUMER_KEY or CONSUMER_SECRET is not defined.
 */
require_once('config.php');
if (CONSUMER_KEY === '' || CONSUMER_SECRET === '') {
  echo 'You need a consumer key and secret to test the sample code. Get one from <a href="https://twitter.com/apps">https://twitter.com/apps</a>';
  exit;
}

/* Build an image link to start the redirect process. */
$content = '<a href="./redirect.php"><img src="./img/lighter.png" alt="Sign in with Twitter"/></a>';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Veronica's Twitter App</title>
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
  <div class = 'container_12'>
     <div id = "hdr">
     </div>
  	<div id = "main_content">
         
            <div id = 'sign_in'>
                <h2>Please sign in to use Veronica's Twitter App.</h2>
                <a href="./redirect.php"><img src="./img/lighter.png" alt="Sign in with Twitter"/></a>
            </div>
       </div>
       <div id = 'content_footer'>
       </div>
    </div>
  </body>
</html>
