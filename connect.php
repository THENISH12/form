<?php	 
	 $DB_host = "173.208.229.242";
	 $DB_user = "demo7_form";   
	 $DB_pass = "form#12";      
	 $DB_name = "demo7_form";
	 
	 
	 $connection = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($connection->connect_errno)
     {
         die("ERROR : -> ".$connection->connect_error);
     }



	
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
