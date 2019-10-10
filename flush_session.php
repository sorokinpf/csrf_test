<?php
session_start();
$_SESSION["CSRF"] = "not exploited";
header("Location: index.php");
?>
