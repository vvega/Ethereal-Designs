<?
    session_start();

    if(isset($_SESSION['loggedIn'])) {
		unset($_SESSION['loggedIn']);
	}
	
	if(isset($_SESSION['access'])) {
        unset($_SESSION['access']);
    }
    
    if(isset($_SESSION['UserID'])) {
        unset($_SESSION['UserID']);
    }
	
	if(isset($_SESSION['userName'])) {
    	unset($_SESSION['userName']);
	}
	
    header("Location: index.php");

?>