<?php 
$con =mysql_connect('localhost','root','') or die("connection Error");
$db =mysql_select_db('sics',$con) or die("database not connected");

$delete=$_GET['del'];

$que = "delete from student_info where s_id='$delete'";
if(mysql_query($que))
{
	echo "<script>alert('One Row Successfully Deleted')</script>";
	echo "<script>window.open('showdata.php','_self')</script>";
	
}
else
{
	echo "<script>alert('Data Not Successfully Deleted')</script>";
	echo "<script>window.open('showdata.php','_self')</script>";
}
?>