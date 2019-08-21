<?php 

session_start();


?><html>
<head><title>Login Page</title></head>
<body>
<form method="post" >
<table border="20" width="500" align="center">
<tr><td colspan="5" align="center"><h1>Login Page</h1></td></tr>
<tr>
<td align="right">User_Name or Email -:</td><td><input type="text" name="user_name"></td>
</tr>

<tr>
<td align="right">Password -:</td><td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan="5" align="center"><input type="submit" name="login" value="login"></td>
</tr>

</table>
</form>

<?php 

include("connection.php");

if(isset($_POST['login']))
{
$name = $_POST["user_name"];
$password = $_POST["password"];

$que="select * from login where user_name='$name'  AND password='$password'";

$run = mysql_query($que);

if(mysql_num_rows($run)>0)
{
	$_SESSION['name']=$name;
		echo "<script>window.open('addcontect.php','_self')</script>";
}

else
{
	echo "<script>alert('User Name or Password Incorrect')</script>";
		
}
}

?>


</body>
</html>