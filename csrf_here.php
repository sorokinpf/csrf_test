<?php
session_start();
if(isset($_POST["attack"]))
{
	if(isset($_SESSION["CSRF"]))
	{
		$_SESSION["CSRF"] = $_POST["attack"];
		echo "exploited";
	}
	else
	{
		$_SESSION["CSRF"] = "Pure session started";
		echo "not exploited, new session started";
	}
}
else { echo "not exploited";}
?>

