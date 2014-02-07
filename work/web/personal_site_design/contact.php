<? session_start(); 
	//connect to the server
	$mysqli = new mysqli('localhost', 'shiala', 'vega7570', 'shiala_pfolio');
	
	 //if the submit button is pushed and you are not yet logged in...
	 if(isset($_POST['submit']) && (!$_SESSION['logged_in'])) {
			//search the database for a match
			$query = "SELECT user_id, username, password FROM shiala_users"; 
			$result = $mysqli->query($query);
			
	   	 while($row = $result->fetch_object()) {
            if ((($_POST['username']) == $row->username) && (md5($_POST['password']) == $row->password)) { 
               //set session variables
				$_SESSION['logged_in'] = true;
                $_SESSION['logged_in_user'] = $row->username;
				$_SESSION['user_id'] = $row->user_id;
			  //break out of the loop and log the user in
				break;
            } else {
               $_SESSION['logged_in'] = false;
            }
        }
	 }
	 if(isset($_POST['post']) && ($_POST['update'] != ""))
	  {
		  $query = "INSERT INTO `shiala_pfolio`.`shiala_updates` (`update_id`, `update`, `update_time`) VALUES (NULL, '".$_POST['update']."', CURRENT_TIMESTAMP);";
		  print "updated";
		  $result = $mysqli->query($query);
		  unset($_POST['post']);
		  unset($_POST['update']);  
	  }
    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
    <title>Designs by Veronica</title>
	<style>
		@import url('styles.css');
    </style>
     <script type="text/javascript" src="scripts/jquery-1.4.2.min.js"></script>
     <script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
     <script type="text/javascript" src="scripts/jquery.sidebar.js"></script>
	</head>
	<body>
        <div id = "hdr">
            <img src = "img/header_new.png" alt = "header">
        </div>
        <div id = "welcome">
        <? if($_SESSION['logged_in'] == true)
		{
			//show welcome 
			print "Welcome, ".$_SESSION['logged_in_user']."!";
			print "<br />";
			print "Click <a id = 'logout_link' href = './logout.php'>here</a> to log out.";
			//if not logged in, show login
		}
		?>
        </div>
         <div id = "login_bar">
        <? if($_SESSION['logged_in'] == false) { ?>
     		Administrator Sign-In<br /><br />
         <form method="post" action="">
            <label for="username">Username:</label>
            <input name="username" id="username" type="text" /><br />
            <label for="password">Password:</label>
            <input name="password" id="password" type="password" /><br />
            <input name="submit" id="submit" type="submit" value="Log In" />
         </form>
           <script type="text/javascript">
            $(document.body).ready(function(){
                $("div#login_bar").sidebar();
            });
			</script>
         <? } ?>
        </div>
        <br /><br />
        <div id = "nav">
            <ul>
                <li><a href ="index.php">Home</a></li>
                <li><a href ="index.php">About Me</a></li>
                <li><a href ="index.php">Portfolio</a></li>
                <li><a style = "color:#000;" href ="contact.php">Contact</a></li>
            </ul>
        </div>
        <div id = "content">
        <br/><br/>
        </div>
    </body>
</html>
<? $mysqli->close(); ?>
