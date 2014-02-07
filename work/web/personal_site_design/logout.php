<?
    session_start();

    if(isset($_SESSION['logged_in'])) {
        unset($_SESSION['logged_in']);
    }
    
    if(isset($_SESSION['logged_in_user'])) {
        unset($_SESSION['logged_in_user']);
    }
	
	if(isset($_SESSION['user_id'])) {
		unset($_SESSION['user_id']);
	}
    
    header("Location: index.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
</body>
</html>
<? $mysqli->close(); ?>
