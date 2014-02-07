<!--<? session_start();

$_SESSION['num_cart'] = 1;

	//creates mysql connection
	$mysqli = new mysqli('localhost','ve137619','vega7570','ve137619');
	if(!$mysqli)
	{
		print "Unable to connect";
	}
	//builds query for the catalog depending on the keyword given by the link clicked
	$query = "SELECT * FROM products WHERE category='".$_GET['keyword']."'";
	//stores results
	$result = $mysqli->query($query);
	
	//checking for a keyword
	if($_GET['keyword']=="")
	{
		$_GET['keyword'] = "Catalog";
	}
	else
	{
		$_GET['keyword'] = $_GET['keyword']."s";
	}
?>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BoomHeadshot Games Catalog - Veronica Vega</title>
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
                	<span>You have 1<!--<?php print $_SESSION['num_cart']; ?>--> item(s) in your cart.</span>
                      <a id = "client" href = "client.php">Client Profile</a>
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
            <div class = "grid_4">
                    <div id = "nav">
                    	<ul>
                        	<li id = "vg"><a href = "JavaScript:void(0);" >Video Games</a></li>
                            	<li class = "sub"><a href = "catalog.php?keyword=Videogame">Games</a></li>
                                <li class = "sub"><a href = "catalog.php?keyword=Console">Consoles</a></li>
                            <li><a href = "catalog.php?keyword=Boardgame">Board Games</a></li>
                            <li><a href = "catalog.php?keyword=Handheld">Handheld Games</a></li>
                        </ul>
                    </div>
                    <div id = "search_container">
                    	<form id = "search" action = "catalog.php?keyword='Result'">
                            <input id = "a2_search" type = "text"/><br/>
                            <input type = "submit" id ="search_submit" value = ""/>
                      </form>
                    </div>
                </div>
                <div class = "grid_7">
                	<div id = "catalog_listing">
                    <div id = "catalog_title">
                   <!--	 <? print "<h1>".$_GET['keyword']."</h1>"; ?>-->
                    </div>
                   <!-- <?
						//print results
						while($row = $result->fetch_array())
						{
						  print "<div class ='product'>";
						  	
							  
							//product info div
							  print "<img src = '".$row['product_image']."' alt = '".$row['product_name']."'/>";
							  print "<form name = '".$row['sku']."' class='add_form' method = 'post' action ='cart.php?item=".$row['sku']."'>";
							  print  "<h5>".htmlentities($row['product_name'])."</h5>";
							  print $row['product_description']."<br/>";
							 //check for sale item
							  if($row['sku'] == 1)
							  {
								  print "<STRIKE><em>$".$row['price']."</em></STRIKE><br/>";
								  print "<strong>$".round(floatval($row['price']*.75),2)."</em></strong><br/>";
							  }
							  else
							  {
							  	print "<em>$".$row['price']."</em><br/>";
							  }
							  print "<input class = 'add' type = 'submit' value = ''></form>";
							  //rating div
							  print "<div class = 'rating'>";
							  print "<form name = '".$row['sku']."rating' action = '' onsubmit = 'return false'>";
							  print $row['thumbs_up'];
							  print "<input name = '".$row['sku']."_thumbsup' class = 'up' type = 'submit' value = ''/>";
							  print "<input name = '".$row['sku']."_thumbsdown' class = 'down' type = 'submit' value = ''/>";
							  print $row['thumbs_down'];
							  print "</form>";
							  print "</div>";
						 print "</div>";
						}
					  ?>-->
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