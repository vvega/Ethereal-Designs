<? session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BoomHeadshot Games Client - Veronica Vega</title>
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
                	<a href = "cart.php"><img id ="cart_img" src = "img/cart_icon.png" alt = "cart"/></a><h1><?php print $_SESSION['num_cart']; ?></h1>
                	<span>You have <?php print $_SESSION['num_cart']; ?> item(s) in your cart.</span>  <a id = "client" href = "client.php">Client Profile</a>
                </div>
            	<form id = "user_login" action = "admin.php">
                	<div id = "login_header">
                    </div>
                	<fieldset id = "labels">
                	<p>Username:</p>
                    <p>Password:</p>
                    </fieldset>
                    <fieldset id = "fields">
                    <input id = "a2_username" type = "text" value ="admin"/><br/>
                     <input id = "a2_password" type = "password" value = "admin"/><br/>
                    <input type = "submit" id ="a2_submit" value = ""/>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class = "grid_12">
            <div id = "main_content">
                <div id = "client_header">
                </div>   
            	<div id = "client_nav">
                	<ul>
                    	<li id = 'p_link' onclick = "pclientClick()"><a href = "JavaScript:void(0);">Personal Info</a></li>
                        <li id = 'a_link' onclick = "aclientClick()"><a href = "JavaScript:void(0);">Account Info</a></li>
                    </ul>
                <div id ="personal_info">
                	<table id = "p_info">
                    	<tr>
                            <td class = "client_hdr">First Name</td>
                            <td>Veronica</td>
                        </tr>
                        <tr>
                            <td class = "client_hdr">Last Name</td>
                            <td>Vega</td>
                        </tr>
                         <tr>
                            <td class = "client_hdr">Address</td>
                            <td>Wouldn't you like to know!</td>
                        </tr>
                         <tr>
                            <td class = "client_hdr">City</td>
                            <td>Wouldn't you like to know!x3</td>
                        </tr>
                         <tr>
                            <td class = "client_hdr">Zip</td>
                            <td>Wouldn't you like to know!x4</td>
                        </tr>
                        <tr>
                            <td class = "client_hdr">Phone Number</td>
                            <td>Wouldn't you like to know!x5</td>
                        </tr>
                        <tr>
                            <td class = "client_hdr">Email Address</td>
                            <td>vvega(at)knights.ucf.edu</td>
                        </tr>
                    </table>
                    <form id = "personal_form" action=''  onsubmit='return false'>
                    	<input id = 'p_edit' name = 'p_edit' type = 'submit' value=''/>
                    </form>
                </div>
                <div id ="account_info">
                	<table id = "a_info">
                    <tr>
                            <td class = "client_hdr">Username</td>
                            <td>admin</td>
                        </tr>
                        <tr>
                            <td class = "client_hdr">Password</td>
                            <td>admin</td>
                        </tr>
                         <tr>
                            <td class = "client_hdr">Date Registered</td>
                            <td>3/1/2011</td>
                        </tr>
                    </table>
                     <form id = "account_form" action ='' onsubmit='return false'>
                    	<input id = 'a_edit' name = 'a_edit' type = 'submit' value=''/>
                    </form>
                </div>
             </div>
          </div>
                           <div id = "footer">
                 <p> This site is not official and is an assignment for a UCF Digital Media course.<br/>Designed by Veronica Vega.</p>
        </div>
      </div>
	</div>
</body>
</html>