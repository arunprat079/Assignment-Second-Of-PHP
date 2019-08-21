<?php 

session_start();
if(isset($_SESSION['name']))
{

?>

<html>
<head>
<title>Personal Dairy</title>
<!-- Include CSS File Here -->
<link rel="Stylesheet" href="logincss.css"></link>
<link rel="Stylesheet" href="css/Style.css"></link>
<!-- Include JS File Here -->
<script src="js/login.js"></script>
</head>
<body>
<center id="cen"><div class="divouter">
<div class="divtitle"><?php include("include/divtitle.php"); ?></div>
<?php include("include/menu.php"); ?>
<div class="container">

<h4><?php
echo "Welcome -:".$_SESSION['name'];

 ?></h4>
 
<div class="main">
<h2>Creating A Contact</h2></br>
<form id="form_id" method="POST" name="myform" action="Acount.php" enctype="multipart/form-data">
<label>First Name :</label>
<input type="text" name="firs_tname" placeholder="Enter Your First Name" /></br></br>
<label>Last Name :</label>
<input type="text" name="last_name"  placeholder="Enter Your Last Name"/></br></br>
<label>Father Name :</label>
<input type="text" name="father_name" placeholder="Enter Your Father Name" /></br></br>
<label>Course :</label>
<select name='course'>
<option value='bca'>BCA</option>
<option value='mca'>MCA</option>
<option value='dca'>DCA</option>
<option value='pgdca'>PGDCA</option>
<option value='Msc.(it)'>Msc.(it)</option>
<option value='Msc.(cs)'>Msc.(cs)</option>



</select></br></br>
<label>Gender :</label>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female</br></br>


<label>Email ID :</label>
<input type="email" name="email"  placeholder="Enter Email_ID Here" align="right"/></br></br>
<label>Mobile  :</label>
<input type="text" name="mobile"  placeholder="Enter Your Mobile Number"/>
</br></br>
<label>Image  :</label>
<input type="file" name="image"></br></br>
<input type="submit" value="Submit" name="submit" /></br></br>
<a href="showdata.php"><input type="button" value="Show" name="show" ></a>
</form></br>
</br></br>
</div>
</div>
<div class="divFuter"><?php include("include/footer.php"); ?></div>
<?php

$con = mysql_connect('localhost','root','') or die("connection Error");
$db = mysql_select_db('sics',$con)  or die("database not connected");

if(isset($_POST['submit']))
{
	

	$name = $_POST['firs_tname'];
	$lname = $_POST['last_name'];
	$fname = $_POST['father_name'];
	$course = $_POST['course'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$image_name=$_FILES['image']['name'];
	$image_size=$_FILES['image']['size'];
	$image_type=$_FILES['image']['type'];
	$image_tmp=$_FILES['image']['tmp_name'];
	
	
	
	$que ="insert into student_info(s_name,s_lastname,s_father,s_course,s_gender,s_email,s_number,s_image) values('$name','$lname','$fname','$course','$gender','$email','$mobile','$image_name')";
	if($name == "" || $lname == "" || $fname == "" || $course == "" || $gender == "" || $email == "" || $mobile == "" || $image_name == "")
	{
		echo "<script>alert('Please Fill All Fields')</script>";
		echo "<script>window.open('Acount.php','_self')</script>";
		echo exit();
	}
	else
	{
	if(mysql_query($que))
		
		{
			move_uploaded_file($image_tmp,"image/$image_name");
			echo "<h1>data inserted</h1>";
		}
		else
		{
			
			echo "<h1>data not inserted</h1>";
		}
	
	}
}	
?>
</div>
</center>
</body>
</html>

<?php  
} 

	
else
{
header("location: login.php");
}
?>

 