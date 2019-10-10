<?php
setcookie('PHPSESSID', '', time() - 86400, '/');
$_SESSION["CSRF"] = "not exploited";
header("Location: index.php");
?>
