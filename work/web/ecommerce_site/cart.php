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
	$query = "SELECT * FROM products WHERE sku='".$_GET['item']."' OR sku='37'";
	
	
	//number of items
	if($_GET['item'] != null)
	{
		$_SESSION['num_cart'] += 1;
	}
	
	
	
	
	//stores results
	$result = $mysqli->query($query);
?>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BoomHeadshot Games Cart - Veronica Vega</title>
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
                        <div id = "cart_content">
                         <h1></h1>
                         	<div id = "cart_container">
                                <!--<table id ="cart_table">                  
                                        <tr>
                                            <td>Item</td>
                                            <td>Price</td>
                                            <td>Quantity</td>
                                        </tr>
                               <?	while($row = $result->fetch_array())
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
                                      print "<td class = 'product_column'>";
                                      print  "<h5>".$row['product_name']."</h5>";
                                      print $row['product_description']."</td>";
                                      print "<td class = 'price_column'>";
                                      print "$".$price;
                                      print "</td>";
                                      print "<td class = 'quantity_column'>";
                                      print 1;
                                      //adds price to subtotal
                                      $subtotal += $price;
                                      print "</td>";
                                      print "</tr>";
                                        $_SESSION['num_cart'] += 1;						
                                }	
                                ?> 
                                </table>-->
                            </div>
                        </div>
                       <!-- <div id = 'table_footer'></div>-->
                        <div id = "shipping_info">
                        	<form id = "payment_info" method ='post' action = "checkout.php">
                            	<div id = "shipping">
                                    <fieldset id = 'shipping_labels'>
                                        <p>First Name:</p>
                                        <p>Last Name:</p>
                                        <p>Phone Number:</p>
                                        <p>Email: </p>
                                        <p>Address:</p>
                                       <p> City: </p>
                                        <p>State: </p>
                                        <p>Zip: </p>
                                    </fieldset>
                                    <fieldset id = 'shipping_fields'>
                                        <input id = "first" type = "text"/><br/>
                                        <input id = "last" type = "text"/><br/>
                                        <input id = "phone" type = "text"/><br/>
                                        <input id = "email" type = "text"/><br/>
                                        <input id = "address" type = "text"/><br/>
                                        <input id = "city" type = "text"/><br/>
                                        <input id = "state" type = "text"/><br/>
                                        <input id = "zip" type = "text"/><br/>
                                    </fieldset>
                                  </div>
                                  <div id = "subtotals_div">
                                       <table id = "subtotals">
                                                   <!-- <?
                                                    $shipping = 5.00;
                                                    $tax = floatval($subtotal*.06);
                                                    $total = $shipping+$tax+$subtotal;
                                                    //subtotal
                                                         print "<tr>";
                                                          print "<td>Subtotal</td>";
                                                          print "<td>";
                                                          print "$".round($subtotal,2);
                                                          print "</td>";
                                                          print "</tr>";
                                                    //tax
                                                          print "<tr>";
                                                          print "<td>Tax</td>";
                                                          print "<td>";
                                                          print "$".round($tax,2);
                                                          print "</td>";
                                                          print "</tr>";
                                                    //shipping
                                                          print "<tr>";
                                                          print "<td>Shipping</td>";
                                                          print "<td>";
                                                          print "$".round($shipping,2);
                                                          print "</td>";
                                                          print "</tr>";
                                                    //total 
                                                          print "<tr>";
                                                          print "<td>Total</td>";
                                                          print "<td>";
                                                          print "$".round($total,2);
                                                          print "</td>";
                                                          print "</tr>";
                                                    ?>-->
                                       </table>  
                                  </div>
                          		  <div id = "payment">
                                    <fieldset id = "payment_labels">
                                        <p>Card Number:</p>
                                        <p id = "card_type">Card Type:</p>
                                        <p>Security Code:</p>
                                    </fieldset>
                                    <fieldset id = "payment_fields">
                                        <input id = "number" type = "text"/><br/>
                                        <img src = "img/visa.png" alt = "visa"/>
                                        <img src = "img/mastercard.png" alt = "mastercard"/>
                                        <img src = "img/americanexpress.png" alt = "american express"/>
                                        <img src = "img/discover.png" alt = "discover"/><br/>
                                           <input name = "type" type = "radio" value = "Visa"/>
                                           <input name = "type" type = "radio" value = "MasterCard"/>
                                           <input name = "type" type = "radio" value = "American Express"/>
                                           <input name = "type" type = "radio" value = "Discover"/><br/>
                                        <input id = "security" type = "text"/><br/>
                                    </fieldset>
                                  </div>
                                  <div id = "cart_btns">
                                  <input id = 'shop' name='shop' type = 'submit' value = "" onClick="function(e){e.preventDefault(); window.location='catalog.php';}"/>
                                  <input id = 'checkout' name='checkout' type = 'submit' value = ""/>
                                  </div>
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