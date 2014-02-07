// A3 JS
var name = new Array();
var type = new Array();
var price = new Array();
var image = new Array();
var description = new Array();
var isOpen = false;

jQuery(document).ready(function()
	{				
		getTweet();
		
		//set listeners unobtrusively
		var yesbtn = document.getElementById('yes_btn');
		var nobtn = document.getElementById('no_btn');
		
		$(yesbtn).click(sortTweet);
		$(nobtn).click(sortTweet);
		
	});
	
	function sortTweet(e)
	{
		//prevent page refresh
		e.preventDefault();
		var decision = $(this).attr('id');
		var id = $("#tweet_id").attr("value");
		//if the id isn't null, proceed to sort the tweet
		if(id != null)
		{
			$.ajax({
				type: "GET",
				url: encodeURI("http://sulley.dm.ucf.edu/~ve137619/dig4503/assignment4/sort_tweets.php?decision="+decision+"&id="+id),
				dataType: 'html',
				success: function(data){
					getTweet();
				}
				
			});
		}
		return false;
	}
	function getTweet()
	{
		//get info
		$.ajax({
			type: "GET",
			url: "http://sulley.dm.ucf.edu/~ve137619/dig4503/assignment4/get_tweet.php",
			dataType: 'html',
			success: function(data){
				//display data
				var div = document.getElementById('tweet');
				$(div).html(data);
			}
		});
		
	}