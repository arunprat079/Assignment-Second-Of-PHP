<html>
<head>
<title>Personal Dairy</title>
<!-- Include CSS File Here -->
<link rel="Stylesheet" href="css/searchstyle.css"></link>
<link rel="Stylesheet" href="css/Style.css"></link>
<!-- Include JS File Here -->
<script src="js/login.js"></script>
</head>
<body>
<center id="cen"><div class="divouter">
<div class="divtitle"><?php include("include/divtitle.php"); ?></div>
<?php include("include/menu.php"); ?>
<div class="container">

<form method="post" action="search1.php">
<table width="100%" border="10" align="center">
<tr><td colspan="5" align="center">Searching A Contect </td></tr>
<td align="Right">Name OR Mobile_No. </td><td align="left"><input type="text" name="sear" placeholder="Enter Name OR Mobile_No" align="left"></td>
<td colspan="5" align="center"><input type="submit" name="submit" value="Search"> </td></tr>

</table>
</form>

<?php 

$con =mysql_connect('localhost','root','') or die("connection Error");
$db =mysql_select_db('sics',$con) or die("database not connected");
if(isset($_POST['submit']))
{
	$sear=$_POST['sear'];
$que1 = "select * from student_info where s_name='$sear' || s_number='$sear'";
$run = mysql_query($que1);

while($row = mysql_fetch_array($run))
{
	$id =$row['s_id'];
	$name =$row['s_name'];
	$lname =$row['s_lastname'];
	$fname =$row['s_father'];
	$course =$row['s_course'];
	$gender =$row['s_gender'];
	$email =$row['s_email'];
	$number =$row['s_number'];
	$image = $row['s_image'];

}
}
	?>


</div>


<div class="divFuter"><?php include("include/footer.php"); ?></div>