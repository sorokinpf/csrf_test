<?php
session_start();
if(isset($_GET["attack"]))
{
	if(isset($_SESSION["CSRF"]))
	{
		$_SESSION["CSRF"] = $_GET["attack"];
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

