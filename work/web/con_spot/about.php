<!--<? session_start(); ?>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The ConSpot - About</title>
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
        	<h1>- About -</h1>   
   	      <div id = "about_content">
               <h3>Why ConSpot?</h3><p>The ConSpot was established by avid congoers - like yourselves - who share a passion for bringing enthusiasts of anime, sci-fi, gaming, and comic together in a single, convenient online presence. In addition, we believe that congoers should be rewarded for their part in keeping the fandom alive. This is why we've provided rewards for sharing your convention and cosplaying experience through coupons, free subscriptions to your favorite sci-fi/gaming/anime magazines, and a place to sell your cosplay creations and supplies back to our growing community.</p>
               <img src = 'img/wow_cosplay.png' alt = "cosplay"/>
				<div id = "benefits">
               <h3>The benefits of becoming a ConSpot member:</h3>
               <ul>
               		<li>Unlimited access to our social networking tools</li>
                 	<li>Discount VIP passes to select conventions</li>
                    <li>No commission deductions while selling goods</li>
                    <li>Coupons for select convention merchants</li>
                    <li>Photoshoot rewards opportunities</li>
               </ul>
               </div>
               <div id = "geek">
                <img src = 'img/geek-zone.png' alt = "geek zone"/>
                </div>
           </div>        
           <div id = "about_logo">
               <p>Powered by:</p>
         		</div>   
        <div id = "footer">
        </div>
    </div>
    </div>
</body>
</html>
