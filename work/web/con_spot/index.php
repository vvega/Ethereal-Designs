<!--<? session_start();

	//creates mysql connection
	require_once('db_connect.php');

	$select_query = "SELECT * FROM conspot_users"; 
    $select_result = $mysqli->query($select_query);

	while($row = $select_result -> fetch_object()) {
		
		if (($_SESSION['loggedIn'] != true) && isset($_POST['login_btn'])) {
		/*	print "LOGGING IN";		
			print "Comparing:".$row->username.$_POST['username']."<br/>";
			print "Comparing ".$_POST['password']." to ".$row->password;*/

			if (($_POST['username'] == $row->username) && ($_POST['password'] == $row->password)){
				$_SESSION['loggedIn'] = true;
				$_SESSION['UserID'] = $row -> id;
				$_SESSION['userName'] = $_POST['username'];
			}
		}
	}
	
	if($_POST['comment'] != "" && isset($_POST['submit_comment']))
	{
		if($_SESSION['loggedIn'])
		{
			$query = "INSERT INTO conspot_comments (username, comment, time)
			VALUES ('".$_SESSION['userName']."', '".$_POST['comment']."', 'CURRENT_TIMESTAMP')";
		}
		else
		{
			$query = "INSERT INTO conspot_comments (username, comment, time)
			VALUES ('Guest', '".$_POST['comment']."', 'CURRENT_TIMESTAMP')";
		}
		$mysqli->query($query);
	}
?>-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The ConSpot - Home</title>
	<style type = "text/css">
		@import url('css/styles.css');
	</style>
</head>
<body>
	 <div id = "container">
    	<div id = "header">
        	 <form id = "login" method='post' action = "index.php">
             
        	<div id = "welcome">
      <!--  <? if($_SESSION['loggedIn'] != true) { ?> 
        
               	<div id ="new"> New to ConSpot? Register <a href = "profile.php">here</a>!</div>
                 <fieldset id = "username_field">
                    Username:<br/>
                    <input type = "text" id = "username" name = "username" />
                </fieldset>
                <fieldset id = "password_field">
                    Password:<br/>
                    <input type = "password" id = "password" name = "password"/>
                </fieldset>              
               <input type = "submit" name = "login_btn" id = "login_btn" value = "Log In"/>
					<? } else { ?> 
                <a id = "logout" href = "logout.php">Log Out</a> 
                <br/>
                Welcome back, <? print $_SESSION['userName'];?>! 
                <br/><br/><br/>
				<? }?>-->
           	</div>
            	
            </form>
        	<ul id = "nav">
            	<li id = "home" onclick = "location.href='index.php'"><a href= "index.html" ></a> </li> 
                <li id = "about" onclick = "location.href='about.php'"><a href= "about.html" > </a> </li> 
                <li id = "resources" onclick = "location.href='resources.php'"><a href= "resources.html"> </a> </li>
                <li id = "market" onclick = "location.href='market.php'"><a href= "market.html"> </a> </li>
                <li id = "profile" onclick = "location.href='profile.php'"><a href= "profile.html"> </a> </li>
            </ul>
        </div>
        <div id = "content"> 
        	<h1>- Home -</h1>   
        	<div id = "banner"><img src = 'img/con_banner.jpg' alt = "banner"/>
            </div>
    	   <div id = "home_content">          
               <div id ="social_feed">
				<table id = "comments" cellpadding='5'>
                <tr>
                    <th>Con Gossip!</th>
                </tr>
                <tr><td>Comment</td></tr>
                <tr><td>Comment</td></tr>
                 <tr><td>Comment</td></tr>
                <tr><td>Comment</td></tr>
                 <tr><td>Comment</td></tr>
                <tr><td>Comment</td></tr>
                 <tr><td>Comment</td></tr>
                <tr><td>Comment</td></tr>
                 <tr><td>Comment</td></tr>
                <tr><td>Comment</td></tr>
                 <tr><td>Comment</td></tr>
                <tr><td>Comment</td></tr>
             <!--   <?	
				
				 $query = "SELECT * FROM conspot_comments";
				 $select_result = $mysqli->query($query);
				
					while($row = $select_result -> fetch_array()) {
				 ?>					   
                            <tr>
									<td><? print htmlentities($row['comment'])."<br/> -- <strong>".$row['username']."</strong>, ".date("F j, Y, g:i a",$row['time']); ?></td>
							</tr>                         
							           
                 <? } ?>-->
                 </table>               
                </div> 
                <form id = "comment_form" method='post' action="">
                 	<input style = "width:200px;margin-left:-15px" id = "comment" name = "comment" type = "text" />
                    <input type = "submit" name = "submit_comment" id = "submit_comment" value = "Post Comment"/>
                 </form><h3>Welcome to the ConSpot!</h3><p>The ConSpot is your #1 resource for all convention, cosplaying, and community needs! We specialize in online cosplay supply sales, a vast opportunity to network with fellow congoers, convention scheduling and guides, and even the chance to earn coupons and discounts for your next big event. Sponsored by the new media technology powerhouse, Tri-Helix Media, registering with with the ConSpot guarantees access to all the latest and up-to-date features of web and mobile networking, electronic coupons, efficient and quick sharing.</p>         
           <div id = "logo">
               <p>Powered by:</p>
         		</div>
                </div>     
        <div id = "footer">
        </div>
          
   	   </div>
    </div>
</body>
</html>
