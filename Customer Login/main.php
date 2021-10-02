<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: index.php");
exit(); }
?>
<html>
<p>the page to redirected to after login</p>
</html>