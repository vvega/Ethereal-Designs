<!--<? session_start(); ?>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The ConSpot - Resources</title>
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
        	<h1>- Resources -</h1>   
         
               <h3>ConSpot Resources</h3>
                <p id = "resource_text"><img src = 'img/ffb_thumb.jpg' alt = "con thumb"/> Because we value you as a part of the ConSpot community, we provide various affiliations with conventions and other networking sites to allow for highest quality of the cosplay and convention fandom experience. We know the frustration in missing an awesome convention due to lack of knowledge or funds, which is why we strive to make sure that everyone with a passion for video games, anime, sci-fi, or any other "geek"-related genres have first pick in both their cosplay networking associations and the opportunity to learn more information on upcoming conventions. </p><div id = "con_thumb"><img src = 'img/con_thumb.png' alt = "con thumb"/></div>   
               <p>Listed below are some of our major affiliations, as well as some of the biggest upcoming cons.</p>
               <div id = "lists">
                   <h4>Upcoming Conventions:</h4>
                   <ul>
                        <li><a href = "http://www.shadocon.com">ShadoCon 2011</a></li>
                        <li>FantasyCon 2011</li>
                        <li>.hackCon 2011</li>
                        <li>DoesntAfraidOfAnythingCon 2011</li>
                        <li>GinkoCon 2012</li>
                        <li>CutieCon 2012</li>
                        <li>ReneketonCon (RennyCon) 2012</li>
                        <li>BeardieCon 2012</li>
                        <li>DudeCon 2012</li>
                        <li>StuffCon 2012</li>
                        <li>Geeky Fest 2012</li>
                        <li>Anime Theatre Fest 2012</li>
                   </ul>  
               </div>
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
