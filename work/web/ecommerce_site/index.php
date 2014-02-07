<!--<? session_start();

	$_SESSION['num_cart'] = 1;
	//creates mysql connection
	$mysqli = new mysqli('localhost','ve137619','vega7570','ve137619');
	if(!$mysqli)
	{
		print "Unable to connect";
	}
	//builds query for the catalog depending on the keyword given by the link clicked
	$query = "SELECT * FROM products WHERE sku='1'";
	//stores results
	$result = $mysqli->query($query);
?>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BoomHeadshot Games Home - Veronica Vega</title>
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
                	<a href = "cart.php"><img id ="cart_img" src = "img/cart_icon.png" alt = "cart"/></a><h1><!--<?php print $_SESSION['num_cart']; ?>-->1</h1>
                	<span>You have <!--<?php print $_SESSION['num_cart']; ?>-->1 item(s) in your cart.</span>
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
                	<div id = "sales">
                    	<div id ="product_sale">
                        	<div class = "rating">
                            </div>
                            <img src = "img/product_images/ps3.png" />
                            <form>
                            <h5>Playstation 3</h5>
                            <strike><em>$299.99</em></strike><br/>
                            <input class = "add" type = "submit" value = '' />
                            </form>
                        </div>
                    	<!--<?
						//print results
						while($row = $result->fetch_array())
						{
						  print "<div id ='product_sale'>";
						  	//rating div
							  print "<div class = 'rating'>";
							  print "</div>";
							  
							//product info div
							  print "<img src = '".$row['product_image']."' alt = '".$row['product_name']."'/>";
							  print "<form id = 'item_".$row['sku']."' method = 'post' action ='cart.php?item=".$row['sku']."'>";
							  print  "<h5>".$row['product_name']."</h5>";
							  print "<strike><em>$".$row['price']."</em></strike><br/>";
							  print "<input class = 'add' type = 'submit' value = ''/></form>";
						 print "</div>";
						 
						 //calculate sales price
						 $original_price = floatval($row['price']);
						 $sales_price = round($original_price*.75,2);
						}
					  ?>-->
                       <div id = "sales_price">
                        <h1>$199.99<!--<? print "$".$sales_price; ?>--></h1>
                   	   </div>
                    </div>    
                </div>
                <div class = "grid_12">
                	<div id = "about_us">
                     <p><em>Welcome to BOOMHeadshot! Games</em>- the best place to buy the latest and most popular video games, boardgames, handheld games - and even classic gaming sporting goods. Our stock includes a wide selection of console and PC titles at low prices, as well as Xbox 360, PlayStation 3, Nintendo Wii, and other popular consoles. In addition to video games, we offer popular titles within the classic family gaming genre, including everything from Monopoly to Hungry Hungry Hippos.</p>
                    	<img src = "img/about.png" alt = "about"/>
                       
                    	<p><em>BoomHeadshot Games</em> has over two months extensive experience within the gaming sales industry. We carry everything from classic boardgame bundles to today's latest and most popular videogames. Prepare to experience the best parts of your childhood again with our handheld games section, where we carry old favorites such as Bop-Its, Tamagotchis, Uno decks, and more.</p>
                        <p> While we are dedicated to cater to the great hobby of gaming, we do realize that today's gamers have many other bills to pay. That's why we pride ourselves in hosting highly competetive prices on consoles such as Xbox 360, Playstation 3, and Nintendo Wii systems. And since our goal is to cater to the true gamer, we've decided to bring back the favorites like the Dreamcast, N64, Super Nintendo, and much, much more!</p>
                           <div id = "contact">
                            BOOMHeadshot Games<br/>
                            P.O. Box 1337<br/>
                            Silent Hill, WV 12345<br/>
                            1-800-133-1337 --- admin@boomheadshotgames.com
                   		 	</div>
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