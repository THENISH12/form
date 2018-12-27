<?php	 
	 $DB_host = "localhost";
	 $DB_user = "root";   
	 $DB_pass = "";      
	 $DB_name = "form";
	 
	 
	 $connection = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);
    
     if($connection->connect_errno)
     {
         die("ERROR : -> ".$connection->connect_error);
     }




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
