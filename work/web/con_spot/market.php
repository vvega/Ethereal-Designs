<!--<? session_start(); 
	require_once('db_connect.php');
	
	$somethingMissing = false;
	
	if(isset($_POST['register']))
		{
		//validate fields
			if($_POST['name'] == "")
			{
				$_SESSION['somethingMissing'] = true;
			}
			if($_POST['description'] == "")
			{
				$_SESSION['somethingMissing'] = true;			
			}
			if($_POST['price'] == "")
			{
				$_SESSION['somethingMissing'] = true;
				
			}	
			if($_POST['image'] == "")
			{
				$_SESSION['somethingMissing'] = true;
			
			}			
		}
	
	if(isset($_POST['submit_item']) && $_SESSION['somethingMissing'] == true)
	{
		print "<p class = 'error'>Please make sure all fields are complete and valid!</p>";
	}
	else if(isset($_POST['register']) && $_SESSION['somethingMissing'] == false)
	{
		
		$query = "INSERT INTO conspot_items (name, price, description, image_url, user_id)
		VALUES ('".$_POST['name']."', '".$_POST['price']."', '".$_POST['description']."','".$_POST['image_url']."','".$_SESSION['UserID']."')";
		$mysqli->query($query);
	}
?>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The ConSpot - Market</title>
	<style type = "text/css">
		@import url('css/styles.css');
	</style>
</head>

<body>
	 <div id = "container">
    	<div id = "header">
        	 <form id = "login" method='post' action = "index.php">
             
        	<div id = "welcome">
<!-- <? if($_SESSION['loggedIn'] != true) { ?> 
        
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
        	<h1>- Market -</h1>   
        	Here you can view, sell, and buy any cosplay items for all of your convention needs!
    	   <div id = "home_content">
          <!-- <?
               $query = "SELECT * FROM conspot_items";
				$select_result = $mysqli->query($query);
			?>
            <div id ="user_items">
				<table id = "items" cellpadding='5'>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Seller</th>
                    <th>Purchase</th>
                </tr>
                <?	while($row = $select_result -> fetch_array()) {
				 ?>					   
                            <tr>
                           		    <td><? print "<img src = '".$row['image_url']."' alt = 'item".$row['id']."'/>"; ?></td>
									<td><? print $row['name']; ?></td>
                                    <?	$original_price = floatval($row['price']);
										$sales_price = round($original_price,2); ?>
									<td><? print "$".$original_price; ?></td>
                                    <td width = '300'><? print $row['description']; ?></td>
                                    <? $mini_query = "SELECT * FROM conspot_users WHERE id = '".$row['user_id']."'";
									 $mini_result = $mysqli->query($mini_query);
                                    while($mini_row = $mini_result->fetch_array())
									{?>
										<td width = '100'><? print $mini_row['username']; ?></td>
                                   <? } ?>
                                     <td><input type = "submit" name ="item_<? print $row['id']; ?>" value = "Purchase"/></td>
							</tr>                         
							           
                 <? } ?>
                 </table>-->
           </div>        
        <!--   <? if($_SESSION['loggedIn']){?> <h3>Sell an Item</h3>
                 <form id = "sell_form" method='post' action="">
                 	Item Name:<br/>
                 	<input id = "name" name = "name" type = "text" /><br/>
                    Description:<br/>
                    <input id = "description" name = "description" type = "text" />     <br/>         
                    Price:<br/>
                    <input id = "price" name = "price" type = "text" /><br/>
                    Image URL(150px x 150px, please):<br/>
                    <input id = "image" name = "image" type = "text" /><br/>
                    <input type = "submit" name = "submit_item" id = "submit_item" value = "Submit Item"/>
                 </form><? } ?>-->
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
