<!--<? // session_start(); 
	//connect to the server
	/*$mysqli = new mysqli('localhost', 'shiala', 'vega7570', 'shiala_pfolio');
	
	 //if the submit button is pushed and you are not yet logged in...
	 if(isset($_POST['submit']) && (!$_SESSION['logged_in'])) {
			//search the database for a match
			$query = "SELECT user_id, username, password FROM shiala_users"; 
			$result = $mysqli->query($query);
			
	   	 while($row = $result->fetch_object()) {
            if ((($_POST['username']) == $row->username) && (md5($_POST['password']) == $row->password)) { 
               //set session variables
				$_SESSION['logged_in'] = true;
                $_SESSION['logged_in_user'] = $row->username;
				$_SESSION['user_id'] = $row->user_id;
			  //break out of the loop and log the user in
				break;
            } else {
               $_SESSION['logged_in'] = false;
            }
        }
	 }
	 if(isset($_POST['post']) && ($_POST['update'] != ""))
	  {
		  $query = "INSERT INTO `shiala_pfolio`.`shiala_updates` (`update_id`, `update`, `update_time`) VALUES (NULL, '".$_POST['update']."', CURRENT_TIMESTAMP);";
		  print "updated";
		  $result = $mysqli->query($query);
		  unset($_POST['post']);
		  unset($_POST['update']);  
	  }
    */
?>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
        <title>Designs by Veronica</title>
        <style type = "text/css">
                @import url('css/reset.css');
                @import url('css/960.css');
                @import url('css/text.css');
                @import url('css/styles.css');
        </style>
      <!--   <script type="text/javascript" src="scripts/jquery-1.4.2.min.js"></script>
         <script type="text/javascript" src="scripts/jquery-ui-1.7.2.custom.min.js"></script>
         <script type="text/javascript" src="scripts/jquery.sidebar.js"></script> -->
         <script type="text/javascript" src="scripts/site_stuff.js"></script>
        </head>
		<body>
            <div class = "container_12">
                    <div id = "hdr">
                        <div class = "grid_3">
                           <div id = "nav">
                                <div id = "about" onmouseout = "change_cursor()" onmouseover = "change_cursor()">
                                    <a href = "#"></a>
                                </div>
                                <div id = "stuff" onmouseout = "change_cursor()" onmouseover = "change_cursor()">
                                    <a href = "#"></a>
                                </div>
                                <div id = "contact" onmouseout = "change_cursor()" onmouseover = "change_cursor()">
                                    <a href = "#"></a>
                                </div>
                            </div>
                       </div>
                       <div class = "grid_4">
                        <!--   <div id = "share">
                                    <!-- share stuff -->
                                  <!--  <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436′);return false;}</script><a href="http://www.facebook.com/share.php?u=http://angelwingdesigns.org/index.php" title="Share on Facebook" onclick="return fbs_click()" target="_blank"><img src="http://ambientchaos.net/img/fb.png" alt="Share on Facebook" /></a>
                                    
                                    <a href="http://twitter.com/home?status=Check out gamer girl and cosplayer Veronica Vega at http://angelwingdesigns.org/index.php" title="Share on Twitter"><img src = "img/twitter.png"/></a>		
                                                
                                </div>-->
                      </div>
                    </div>            
                    <div class = "grid_6">
                        <img src = "img/about_title.png" alt = "title"/>
                        <div id = "content">
                 		 <img src = "img/profile_pic.png" alt = "profile" /> For a true gamer, gaming is never really just a hobby. It's a lifestyle. A lifestyle of pale skin (for most of us), pizza rolls, all-nighters, and lots and lots of sitting. But with all that comes a person who's nature pushes them to complete any quest, to play to be the best, and to always find a way to win (unless it's a story battle). It's about sometimes letting yourself go to bed angry; angry at that boss you couldn't beat, then waking up the next day to own him on the first try. It's a childhood that was ridden with constant battles between you and your parents as you did your best to convince them that this hobby was in fact a good alternative to what all the "cool kids" were doing. While other brains were rotting to the tune of MTV's latest radio hit, some other obscure teenage television drama, or perhaps another horribly over-prioritized yet popular pasttime, our gears were always turning. We were solving puzzles, honing in on our eye-hand coordination ability, and utilizing critical thinking skills (it's true!) <br/><p>A proud gamer here. Indeed, I've been gaming ever since I could hold a controller. It started back when I'd watch my dad play early 3D titles such as Heretic, Quake, Unreal, Hexen, Jedi Knight: Dark Forces, Redneck Rampage, and yes, even Duke Nukem. From then on I've been surrounded by friends and family alike who shared my love of video games. Fourteen-ish years later, my affinity towards the virtual world has not only remained, but has also grown to the extent of my desire to make a career out of it.</p> <p>I currently attend the University of Central Florida and am a dual major in Digital Media and Computer Science. I also work at a company by the name of Advantor, developing applications in Java. (They call me a "code fairy" >_>). I've also recently gotten into cosplaying, and it's so much fun! I realized that I can actually sew and I super enjoy making costumes! My first cosplay was Rinoa Heartilly from Final Fantasy VIII due to my sheer love of the game and it's characters. Who knows who I'll cosplay next!</p><p>Another recent hobby of mine is writing game reviews for Charisma+2 Magazine, as well as holding a place on their roster of gamer models. I've always liked creative writing, but never really had a chance to write for the public eye, especially in the area of game reviews. So far, I've been blessed with good reception by staff and readers alike. Hopefully I will be able to meet the demands of the competetive and fast-paced world of games and evolving platforms.</p><p><em>So</em>, enough of my blabbering. Feel free to have a look around and if you have any questions or comments, head to the contact section to drop me a note!</p>
						 <p>Throm ka, shaman! And happy gaming!</p>
                      
                        </div>                     
                    </div>
                   <div class = "grid_6">
                        <div id = "content2">
                         	<img src = "img/icon_banner.png" alt = "icon_banner"/>
                         	<img src = "img/updates.png" alt = "updates" />
                            <div id = "update_container">
                              <!-- <?
                                    //acquire the updates
                                    //sort so that the most recent update is first
									/*
                                    $query = "ALTER TABLE shiala_updates ORDER BY update_time DESC";
                                    $result = $mysqli->query($query);
                                    $query = "SELECT * FROM shiala_updates"; 
                                    $result = $mysqli->query($query);
                                    //select all fields from shiala_updates
                                    print $row->update_time;
                                    while($row = $result->fetch_array()) {
                                        $date = strtotime($row['update_time']);
                                        $creation_date = date("m.d.y", $date);
                                       // $creation_time = date("g:i a", $date);
                                        print "<div class = 'date'>";
                                        print $creation_time."<br/>".$creation_date;
                                        print "</div>";
                                         print "<div class = 'update'>";
                                        print $row['update'];
                                        print "</div>";
                                        
                                    }*/ 
                               ?>-->
                               <div class = 'date'><br/>
                                   04/28/12
                                </div>
                                <div class = 'update'>
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mauris orci, malesuada id rhoncus quis, vestibulum quis augue. Donec fringilla facilisis enim, quis pellentesque diam pellentesque sit amet. Cras pellentesque sollicitudin nulla vitae varius. Proin imperdiet tortor in diam fringilla venenatis. Nullam in massa vitae odio aliquam posuere. Phasellus ullamcorper eros vitae odio luctus at hendrerit lectus pulvinar. Integer ipsum libero, interdum at mattis at, condimentum placerat dui. Maecenas eget dui quis enim ultrices tristique vel et libero. Vestibulum euismod, augue nec feugiat mattis, velit orci tincidunt quam, sed tristique dui nisl ut felis.
                                </div>
                                 <div class = 'date'><br/>
                                   04/29/12
                                </div>
                                <div class = 'update'>
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mauris orci, malesuada id rhoncus quis, vestibulum quis augue. Donec fringilla facilisis enim, quis pellentesque diam pellentesque sit amet. Cras pellentesque sollicitudin nulla vitae varius. Proin imperdiet tortor in diam fringilla venenatis. Nullam in massa vitae odio aliquam posuere. Phasellus ullamcorper eros vitae odio luctus at hendrerit lectus pulvinar. Integer ipsum libero, interdum at mattis at, condimentum placerat dui. Maecenas eget dui quis enim ultrices tristique vel et libero. Vestibulum euismod, augue nec feugiat mattis, velit orci tincidunt quam, sed tristique dui nisl ut felis.
                                </div>
                                 <div class = 'date'><br/>
                                   04/30/12
                                </div>
                                <div class = 'update'>
                                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mauris orci, malesuada id rhoncus quis, vestibulum quis augue. Donec fringilla facilisis enim, quis pellentesque diam pellentesque sit amet. Cras pellentesque sollicitudin nulla vitae varius. Proin imperdiet tortor in diam fringilla venenatis. Nullam in massa vitae odio aliquam posuere. Phasellus ullamcorper eros vitae odio luctus at hendrerit lectus pulvinar. Integer ipsum libero, interdum at mattis at, condimentum placerat dui. Maecenas eget dui quis enim ultrices tristique vel et libero. Vestibulum euismod, augue nec feugiat mattis, velit orci tincidunt quam, sed tristique dui nisl ut felis.
                                </div>
                            </div>     
                           </div>
                        </div>
			<div class = "grid_12">
				 <div id = "footer">
				 	<p><em>Last updated: 4/28/2012</em><br/>All trademarks and representative images are owned by their respective business entities. The purpose of this website and the containied images are solely for self-promotional gains and are not meant for sale, resale, or mass distribution. Photography within the site is property of both Veronica Vega and the respective cited photographer.</p>
				  </div>      
      		 </div>
			 <!-- <?
					/*if($_SESSION['logged_in'] == true)
					{*/
			?>
				<!--<form method="post" action="">
				<textarea name="update" id="update" type="text" cols="40" rows="10"></textarea><br />
				<input type = "hidden"name="post" id="post" value="Post" />
				</form>-->
				<? // } ?>  
				<!-- <div id = "login_bar">
						<? //if($_SESSION['logged_in'] == false) { ?>
						 <form method="post" action="">
						   Administrator Sign-In<br /><br />
							<label for="username">Username:</label>
							<input name="username" id="username" type="text" /><br />
							<label for="password">Password:</label>
							<input name="password" id="password" type="password" /><br />
							<input name="submit" id="submit" type="submit" value="Log In" />
						 </form>
						 <?// } ?>
				</div>
			  <? /*if($_SESSION['logged_in'] == true)
					{
						//show welcome 
						print "Welcome, ".$_SESSION['logged_in_user']."!";
						print "<br />";
						print "Click <a id = 'logout_link' href = './logout.php'>here</a> to log out.";
						//if not logged in, show login
			   }*/?> 			-->		 
		 </div>		 
    </body>
</html>
<!--<? //$mysqli->close(); ?>-->
