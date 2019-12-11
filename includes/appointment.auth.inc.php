<?php
    session_start();
	if(empty($_SESSION['loginID'])){
        echo "<p>Access denied. You will now be redirected to the login page.</p>";
        echo "<META HTTP-EQUIV=\"refresh\" content=\"2; URL=professor_login.php\">";
        exit;
    }
?>