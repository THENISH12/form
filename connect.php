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





	?>