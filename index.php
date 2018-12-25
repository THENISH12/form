<html>
<head>
<title>Form</title>
</head>
<body>
<div class="col-md-6" style="margin-left:25%; margin-right:25%; padding-top:50px" align="center"  >
<h1>Log In</h1><br>
<form action="index.php" method="post" >
<input type="email" name="email" value="" placeholder="Enter Email" style="width:300px ; height:30px" required /><br><br>
<input type="password" name="password" value="" placeholder="Enter Password" style="width:300px ; height:30px" required  /><br><br>
<button type="submit" name="submit" value="submit" style="width:300px ; height:30px ; background-color:DC8179" >Log in</button><br>
</form>
<p>Don't have Account ? please Register with Us</p><br>
<a href="registration.php"    >Registration</a><br>



</div>
</body>
</html>
<?php include 'connect.php';
	
session_start();
if(isset($_POST['submit']))
{
	$login_verify="select * from formdetail where email='".$_POST['email']."'  && password='".$_POST['password']."'";
	$check=$connection->query($login_verify);
	if($check->num_rows>0)
	{   $_SESSION['logged']=$_POST['email'];
		header('location:user.php');
		
	}
	else
	{
		
		header('location:index.php');
	}
}
?>