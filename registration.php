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

<th>Operation</th>
</tr>
<?php
												include'connect.php';
												$count = 0;
											$select= $connection->query("select * from formdetail");
											while($row=$select->fetch_array())
											{ 	
												extract($row);
												$count++;
												
										  ?> 
										  <tr>
											<td><?php echo $id;?></td>
											<td><?php echo $name;?></td>
											<td><?php echo $mname;?></td>
											<td><?php echo $lname;?></td>
											<td><?php echo $email;?></td> 
											<td><?php echo $mobile;?></td>
											<td><?php echo $password;?></td>
											
											<td><a style="width:50px; height:20px; " href="registration.php?id=<?php echo $id;?>" name="Edit">EDIT</a>
											<a style="width:50px; height:20px; " href="registration.php?idd=<?php echo $id;?>" name="delete" >Delete</a> </td> 
										  </tr>
										    <?php } ?>
<table>
</div>
<div class="col-md-6" style=" padding-top:50px" align="center"  >
<h1>Submit Your Details</h1>
<?php 
		include 'connect.php';
		
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$edit=$connection->query("select * from  formdetail where id='$id'");
			$rowa=$edit->fetch_array();
												
		   extract($rowa);				
		}
		
		?>
<script>
function pass()
{
	var a = document.getElementById("password").value;
	var b = document.getElementById("cpassword").value;
	if(a!==b)
	{
		document.getElementById("message").innerHTML="password are note same";
		return false;
	}
}
</script>
<form action="registration.php" method="post" onsubmit=" return pass()">
<b>Name </b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="name" value="<?php if(isset($_GET['id'])){ echo $name; } ?>" style="width:300px; height:30px ;" align="center" required /><br><br>
<b>Middle Name  </b></span><input type="text" name="mname" value="<?php if(isset($_GET['id'])){echo $mname; } ?>" style="width:300px; height:30px"   /><br><br>
<b>Last Name </b> &nbsp; &nbsp; &nbsp; <input type="text" name="lname" value="<?php if(isset($_GET['id'])){ echo $lname;} ?>" style="width:300px; height:30px"  required /><br><br>
<b>Email </b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="email" name="email" value="<?php if(isset($_GET['id'])){ echo $email;}?>" style="width:300px; height:30px"  required /><br><br>
<b>Mobile No. </b> &nbsp; &nbsp; &nbsp; <input type="text"  name="mobile" value="<?php if(isset($_GET['id'])){ echo $mobile; } ?>" style="width:300px; height:30px"   /><br><br>
<b>Password </b> &nbsp; &nbsp; &nbsp; &nbsp; <input id="password" type="password" name="password" value="<?php if(isset($_GET['id'])){  echo $password; } ?>" style="width:300px; height:30px"  required /><br><br>
<b>Confirm Password </b> <input id="cpassword" type="password" name="cpassword" value="<?php if(isset($_GET['id'])){ echo $cpassword; }?>" style="width:270px; height:30px"  required /><br><br><br>
<span id="message"></span>
<?php
if(isset($_GET['id']))
{ echo'<button type="submit" name="update" value="update" style="width:450px ; height:30px ; background-color:DC8179" >Update</button><br><br>' ; } ?>
  
<button type="submit" name="submit" value="submit" style="width:450px ; height:30px ; background-color:DC8179" >Register</button><br><br>
<a href="registration.php" style="width:450px ; height:30px ; " >Refresh</button><br>
</form>
</div>
</section>
</body>
</html>
<?php 
  
  include 'connect.php'; 
		
	if(isset($_POST['submit']))
	{
		extract($_POST);
		
     $sql = "INSERT INTO formdetail(name,mname,lname,email,mobile,password)values
				('$name','$mname','$lname','$email','$mobile','$password')" ;
	$query = $connection->query($sql);		
	if($query)
	{
		echo 'Thank You For Register With Us.<br> Please Click Here to <a href="index.php">log in</a>' ; 
	}
	}
	?>
	
	
<?php 
if(isset($_GET['idd']))
{
$idd=$_GET['idd'];
	
$delete="delete from formdetail where id='$idd'";
$dd=$connection->query($delete); 
if($dd)
{ echo 'Deleted successful'; } 


}


?>
<?php 
 if(isset($_POST['update']))
 {
	 extract($_POST);
 $update = " update formdetail set name='$name',mname='$mname',lname='$lname',email='$email',mobile='$mobile',password='$password',cpassword='$cpassword' where id='$id' " ;
$dd=$connection->query($update); 
if($dd)
{ echo 'Update successful'; } 



 }
 ?>