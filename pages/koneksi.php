<?php
$user="root";
$pass="";
$host="localhost";
$db="rjm";

$config=mysql_connect($host,$user,$pass);
$connect=mysql_select_db($db,$config) or die(mysql_error());
?>