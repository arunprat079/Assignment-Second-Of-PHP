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


<form method="post" action="form2.php" id="profileform">
<table align="center" border="5" width="900">
<tr><input type="button" name="print" value="Print" onclick="window.print();"><td colspan="12" bgcolor="blue" color="white" align="center"><h1>All Contact Profile</h1></td></tr>
<tr><th>Id</th><th>Name</th><th>L_Name</th><th>F_Name</th><th>Course</th><th>Gender</th><th>Email</th><th>Mobile</th><th>Image</th><th>Edit</th><th>Delete</th></tr>

<?php 

$con =mysql_connect('localhost','root','') or die("connection Error");
$db =mysql_select_db('sics',$con) or die("database not connected");
$i=1;
$que1 = "select * from student_info";
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
?>




<tr align="center"><td style="color:blue;background:yellow;"><?php echo $i++ ;?></td>
<td style="color:blue;background:gray;"><?php echo $name ;?></td>
<td style="color:blue;background:yellow;"><?php echo $lname ;?></td>
<td style="color:blue;background:gray;"><?php echo $fname ;?></td>
<td style="color:blue;background:yellow;"><?php echo $course ;?></td>
<td style="color:blue;background:gray;"><?php echo $gender ;?></td>
<td style="color:blue;background:yellow;"><?php echo $email ;?></td>
<td style="color:blue;background:gray;"><?php echo $number ;?></td>
<td style="color:blue;background:yellow;"><img width="60" height="55" src="image/<?php echo $image ;?> " /></td>
<td style="color:blue;background:gray;">Edit</td>
<td style="color:blue;background:yellow;"><a href="delete.php?del=<?php echo $id ;?>">Delete</a></td>
</tr>

<?php   }  ?>

</table>
</form> 

</div>

<div class="divFuter"><?php include("include/footer.php"); ?></div>
</center>
</body>
</html>