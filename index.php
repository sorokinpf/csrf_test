<?php

//ini_set("session.cookie_samesite", "Lax");
session_set_cookie_params(3600,"/; SameSite=Strict");
session_start();
if(!isset($_SESSION["CSRF"]))
{
	$_SESSION["CSRF"] = "not exploited";
}
?>

<html>
Your session started;
<br><br>
Current state of CSRF param : <?php echo $_SESSION["CSRF"]; ?>
<br><br>
<a href="flush_session.php">Flush session</a>
<br><br>
<a href="remove_cookie.php">Remove cookie</a>
</html>
