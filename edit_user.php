<?php 
     session_start();     
     $active_id= $_SESSION['active_user'];
         $host = "localhost";  
         $user_name = "root";  
         $password = '';  
         $db_name = "project";  
           
         $con = mysqli_connect($host, $user_name, $password, $db_name);  
         if(mysqli_connect_error()) {  
             die("Failed to connect with MySQL: ". mysqli_connect_error());  
         }
         $sql = "select * from user where id = '$active_id'";  
         $result = mysqli_query($con, $sql);  
         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
         
    echo print_r($row);
?>  