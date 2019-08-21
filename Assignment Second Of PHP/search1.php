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



<table width="100%" border="10" align="center">
<tr><th>Name</th><th>L_Name</th><th>F_Name</th><th>Course</th><th>Gender</th><th>Email</th><th>Mobile</th><th>Image</th></tr><tr>
<td style="color:blue;background:gray;"><?php echo @$name ;?></td>
<td style="color:blue;background:yellow;"><?php echo @$lname ;?></td>
<td style="color:blue;background:gray;"><?php echo @$fname ;?></td>
<td style="color:blue;background:yellow;"><?php echo @$course ;?></td>
<td style="color:blue;background:gray;"><?php echo @$gender ;?></td>
<td style="color:blue;background:yellow;"><?php echo @$email ;?></td>
<td style="color:blue;background:gray;"><?php echo @$number ;?></td>
<td style="color:blue;background:yellow;" align="center"><img width="60" height="55" src="image/<?php echo $image ;?> " /></td>

</tr>

</table>


</div>


<div class="divFuter"><?php include("include/footer.php"); ?></div>