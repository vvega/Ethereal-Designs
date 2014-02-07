<!--<? session_start(); 
	
	require_once('db_connect.php');
	//cart display
	if(isset($_SESSION['loggedIn']))
	{
		$useri = $_SESSION['UserID'];
	}
		//Check for registration
	$_SESSION['is_registered'] = false;
	
	if(isset($_POST['register']))
		{
		//validate fields
			if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['user']))
			{
				$_SESSION['somethingMissing'] = true;
				print "<p class = 'error'>* need valid username.</p>";
			}
			if(!preg_match("/^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email']))
			{
				$_SESSION['somethingMissing'] = true;
				print "<p class = 'error'>* need valid email.</p>";
			}			
		}
	
	if(isset($_POST['register']) && $_SESSION['somethingMissing'] == true)
	{
		print "<p class = 'error'>Please make sure all fields are complete and valid!</p>";
	}
	else if(isset($_POST['register']) && $_SESSION['somethingMissing'] == false)
	{
		$user = htmlentities($_POST['user']);
		$pass = htmlentities($_POST['pass']);		
		$email = htmlentities($_POST['email']);
		
		$query = "INSERT INTO conspot_users (username, password, email)
		VALUES ('".$user."', '".$pass."', '".$email."')";
		$mysqli->query($query);
		
		//set the registration flag
		$_SESSION['is_registered'] = true;
	}

	//FIELD VALIDATION
	$_SESSION['somethingMissing'] = false;
		
?>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The ConSpot - Profile</title>
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
        	<h1>- User Profile -</h1>   
         <div id = "registration_content">
                <p id = "resource_text">
               <!--  <? //if user is logged in, display the info
				if($_SESSION['loggedIn']){				
				 //get user info
				$query = "SELECT * FROM conspot_users where id='".$_SESSION['UserID']."'";
				$select_result = $mysqli->query($query);
				
				while($row = $select_result -> fetch_array()) {
				 ?>
                         <div id = "user_info">
                         <h3>My Info</h3>
                         	<table id = "info" cellpadding='5'>
                            <tr>
								<th>Email Address</th>
                                <th>Username</th>
                             </tr>
                             <tr>
								<td><? print $row['email']; ?></td>
								<td><? print $row['username']; ?></td>
								</tr>                         
							</table>
                         </div> 
               <? }
				
				//get user info
				$query = "SELECT * FROM conspot_items where user_id='".$_SESSION['UserID']."'";
				$select_result = $mysqli->query($query);
				?>-->
				<!--<div id ="user_items">
                <h3>My Items</h3>
				<table id = "items" cellpadding='5'>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
               <!-- <?	while($row = $select_result -> fetch_array()) {
				 ?>					   
                            <tr>
                           		    <td><? print "<img src = '".$row['image_url']."' alt = 'item".$row['id']."'/>"; ?></td>
									<td><? print $row['name']; ?></td>
                                    <?	$original_price = floatval($row['price']);
										$sales_price = round($original_price,2); ?>
									<td><? print "$".$original_price; ?></td>
                                    <td width = '450'><? print $row['description']; ?></td>
							</tr>                         
							           
                 <? } ?>
                 </table>
           </div>  <? 
				
				 } else if($_SESSION['is_registered']== false && $_SESSION['loggedIn'] == false) { ?>
                 <h3>ConSpot Registration</h3>
                 <p>Registering with us will allow us to send you special offers and discounts on future conventions!</p>
                        <form id = "registration" method = "post" action = "profile.php">
                        			
                                    Email: <br/>
                                      <? if(isset($_POST['register']) && $_POST['email'] == ""){ $_SESSION['somethingMissing'] = true; print ">"; } ?>
                                            <input id = "email" name = "email" type = "text" value="<? if(isset($_POST['email'])) {
                                                                                                     print $_POST['email'];
                                                                                                     } ?>"/><br/>
                                    	Desired Username:<br/>
                                         <? if(isset($_POST['register']) && $_POST['user'] == ""){ $_SESSION['somethingMissing'] = true; print ">"; } ?>
                                        <input id = "user" name = "user" type = "text" value="<? if(isset($_POST['user'])) {
                                                                                                     print $_POST['user'];
                                                                                                     } ?>" /><br/>
                                        Desired Password:<br/>
                                        <? if(isset($_POST['register']) && $_POST['pass'] == ""){ $_SESSION['somethingMissing'] = true; print ">"; } ?>
									    <input id = "pass" name = "pass" type = "password" value="<? if(isset($_POST['pass'])) {
                                                                                                     print $_POST['pass'];
                                                                                                     } ?>"/><br/>
                                        Confirm Password:<br/>
                                         <? if(isset($_POST['register']) && $_POST['conf_pass'] == ""){ $_SESSION['somethingMissing'] = true; print ">"; } ?>
                                        <input id = "conf_pass" name = "conf_pass" type = "password" value="<? if(isset($_POST['conf_pass'])) {
                                                                                                     print $_POST['conf_pass'];
                                                                                                     } ?>"/> 
                                        <? if(isset($_POST['register']) && $_POST['pass'] != $_POST['conf_pass']){ $_SESSION['somethingMissing'] = true; print ">Passwords do not match."; }?>  <br/><br/>
                                        
                                   
                    <input id = 'register_submit' type = 'submit' name = 'register' value='Register' />
                               </form>
              <? }  else if($_SESSION['somethingMissing'] == false && isset($_POST['register'])){ 
						//if registered
                    	print "<div id = 'hi'>";
                       	print "<h4>Thanks for registering with The ConSpot, ".$_POST['user']."!</h4>";
						print "<h5>Click <a href = 'index.php'><em>here</em></a> to go to the home page and log in.</h5>";
                        print "</div>";
						
						//reset registration page
						$_SESSION['is_registered'] = false;
						$_SESSION['somethingMissing'] = true;
						unset($_POST['user']); 
						unset($_POST['pass']); 
						unset($_POST['email']);

					 } ?> -->
                     </div>
           <div id = "logo">
               <p>Powered by:</p>
           </div>
         </div>   
        <div id = "footer">
        </div>
    
    </div>
</body>
</html>
