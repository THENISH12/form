<?php 
session_start();
include 'connect.php';	

$currentpageopened=basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);



if(!isset( $_SESSION['logged']) && empty($_SESSION['logged']))
{
	header('location:index.php');
}

if(isset($_GET['LogOUT']))
{
	session_destroy();
	header('location:index.php');
}

$user="select * from formdetail where email='".$_SESSION['logged']."'";
$get=$connection->query($user);
$row=$get->fetch_array();
extract($row)

?>
<html>
<head>
<title>Form</title>
</head>
<body>
<section class="col-md-12">
<div class="col-md-6" style=" padding-top:50px" align="center"  >
<table border="1">
<tr style="background-color:DC8179">
<th>Id</th>
<th>Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Password</th>
<th>Confirm Password</th>
<th>Operation</th>
</tr>

										  <tr>
											<td><?php echo $id;?></td>
											<td><?php echo $name;?></td>
											<td><?php echo $mname;?></td>
											<td><?php echo $lname;?></td>
											<td><?php echo $email;?></td> 
											<td><?php echo $mobile;?></td>
											<td><?php echo $password;?></td>
											<td><?php echo $cpassword;?></td>
											<td><a style="width:50px; height:20px; " href="registration.php?id=<?php echo $id;?>" name="Edit">EDIT</a>
											<a style="width:50px; height:20px; " href="registration.php?idd=<?php echo $id;?>" name="delete" >Delete</a> </td> 
										  </tr>
										   
											
											
<table><br><br>
<a href="index.html?LogOUT">Log Out</a>
</div>
</section>
</body>
</html>
