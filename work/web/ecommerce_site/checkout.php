<!--<? 


if(isset($_POST['shop']))
{
	header('Location: home.php');
}
session_start();

$_SESSION['num_cart'] = 0;
	
?>-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BoomHeadshot Games Checkout</title>
<style type="text/css">
			 @import url("css/960.css");
		  	 @import url("css/reset.css");
		  	 @import url("css/text.css");
             @import url("css/styles.css");
 </style> 
 <script type = "text/javascript" src ="js/a2.js"></script>
</head>

<body>
    <div class = "container_12">
    	<div class = "grid_12">
        	<div id = "header">
            	<div id = "logo">
                	<a href = "index.php"><img src = "img/logo.png" alt = "BOOMHeadshot Games"/></a>
                </div>
                <div id = "cart">
                	<a href = "cart.php"><img id ="cart_img" src = "img/cart_icon.png" alt = "cart"/></a><h1>1<!--<?php print $_SESSION['num_cart']; ?>--></h1>
                	<span>You have 1<!--<?php print $_SESSION['num_cart']; ?> -->item(s) in your cart.</span>  <a id = "client" href = "client.php">Client Profile</a>
                </div>
            	<form id = "user_login" action = "client.php">
                	<div id = "login_header">
                    </div>
                	<fieldset id = "labels">
                	<p>Username:</p>
                    <p>Password:</p>
                    </fieldset>
                    <fieldset id = "fields">
                    <input id = "a2_username" type = "text"/><br/>
                     <input id = "a2_password" type = "password"/><br/>
                    <input type = "submit" id ="a2_submit" value = ""/>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class = "grid_12">
            <div id = "main_content">
              <p id ="checkout_msg">Checked out. :)</p>
       		 </div>
              <div id = "footer">
                 <p> This site is not official and is an assignment for a UCF Digital Media course.<br/>Designed by Veronica Vega.</p>
          </div>
    	</div>
    </div>
</body>
</html>