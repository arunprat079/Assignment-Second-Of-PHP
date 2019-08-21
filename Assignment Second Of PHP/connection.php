<?php 
$con = mysql_connect('localhost','root','') or die("connection Error");
$db = mysql_select_db('sics',$con)  or die("database not connected");
?>