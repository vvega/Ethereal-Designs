<!--<? session_start();
	
	//variable for total values
    $subtotal= 0;
	
	$_SESSION['num_cart'] = 1;
	//creates mysql connection
	$mysqli = new mysqli('localhost','ve137619','vega7570','ve137619');
	if(!$mysqli)
	{
		print "Unable to connect";
	}
	//get item added to cart
	$query = "SELECT * FROM products";
	
	//stores results
	$result = $mysqli->query($query);
?>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BoomHeadshot Games Admin - Veronica Vega</title>
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
                <div class = "grid_12">
                        <div id = "admin_content">
                            <div id = "admin_header">
                            </div>
                         	<div id = "admin_container">
                            <form id = "admin_products" action = "">
                             <!--   <table id ="admin_table">                  
                                        <tr>
                                        	<td></td>
                                            <td>Item</td>
                                            <td>Stock</td>
                                            <td>Price</td>
                                            <td>Cost</td>
                                            <td>Sku</td>
                                        </tr>
                                <!--<?	while($row = $result->fetch_array())
                                    {	  
										//ps3 sale
										if($_GET['item'] == 1)
										{
											$price = round(floatval($row['price']*.75),2);
										}
										else
										{
											$price = $row['price'];
										}
									
                                    //product info div
                                      print "<tr>";
									  //checkbox next to each item
									 	print "<td class = 'checkbox_column'><input id = 'input_".$row['sku']."' type = 'checkbox'/></td>";
                                      print "<td class = 'product_column'>";  
                                      print  "<span>".htmlspecialchars($row['product_name'])."</span>";
									  print "</td>";
									  print "<td>";
                                      print  "<span>".$row['stock']."</span>";
									  print "</td>";
                                      print "<td class = 'admin_price_column'>";
                                      print "$".$price;
                                      print "</td>";
									  print "<td>";
                                      print "<span>$".$row['cost']."</span>";
									  print "</td>";
									  print "<td>";
                                      print  "<span>".$row['sku']."</span>";
									  print "</td>";
                                  
                                      //adds price to subtotal
                                      $subtotal += $price;
                                      print "</tr>";
                                        $_SESSION['num_cart'] += 1;						
                                }	
                                ?>
                                </table>-->
                                <div id = "admin_btns">
                                <input id = "add" name = "add" type = "submit" value=""/>
                                <input id = "edit" name = "edit" type = "submit" value=""/>
                                <input id = "delete" name = "delete" type = "submit" value=""/>
                                </div>
                               </form>
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