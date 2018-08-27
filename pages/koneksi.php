<?php
$user="bf046e5b8b3638";
$pass="e4aff0f1";
$host="us-cdbr-iron-east-01.cleardb.net";
$db="heroku_38e9fe5c86d6f7b";

$config=mysql_connect($host,$user,$pass);
$connect=mysql_select_db($db,$config) or die(mysql_error());
?>