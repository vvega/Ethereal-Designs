<? session_start();
	
   include_once('db_connect.php');
   
   $y_query = "SELECT * FROM a4_would";
   $n_query = "SELECT * FROM a4_wouldnt";
   
   $y_results = $mysqli->query($y_query);
   $n_results = $mysqli->query($n_query);
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Veronica's Twitter OAuth Site</title>
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
          <div class = 'grid_6'>
                <div id = 'yes'>
                       <img class = 'result_hdrs' src = 'img/yes_hdr.png' alt = 'results header' />
                    <? 
                        while($row = $y_results->fetch_array())
                        {
                      
						print "<div class = 'tweet_text'>";
					    print "<img class = 'tweet' src = 'http://sulley.dm.ucf.edu/~ve137619/dig4503/assignment4/img/tweet.png' alt = 'tweet' />";
                        print $row['TweetText'];
						print "</div>";
                        print "Tweeted on: ".$row['Time'];
                        print "<br/>";
                        print "Retweeted from: <a href='http://www.twitter.com/".$row['User']."'>".$row['User']."</a>";		
                        print "<br/>";
                        }
                        ?>
                  </div>
          </div>
          <div class = 'grid_6'>
            <div id = 'no'>
                    <img class = 'result_hdrs' src = 'img/no_hdr.png' alt = 'results header' />
                    <?
                    
                        while($row = $n_results->fetch_array())
                        { 
							print "<div class = 'tweet_text'>";
						    print "<img class = 'tweet' src = 'http://sulley.dm.ucf.edu/~ve137619/dig4503/assignment4/img/tweet.png' alt = 'tweet' />";
                            print htmlspecialchars($row['TweetText']);
							print "</div>";
                            print "<br/>";
                            print "Tweeted at: ".$row['Time'];
                            print "<br/>";
                            print "Retweeted from: <a href='http://www.twitter.com/".$row['User']."'>".$row['User']."</a>";	
                            print "<br/>";	
            
                        }
                    ?>
             </div>
         </div>
       </div>
            <div id = 'content_footer'>
            <p id = "goback"><a href = 'index.php'>&lt; Go back</a></p>
         </div>  
       </div>
   </body>
</html>