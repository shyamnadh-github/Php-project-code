<?php 
     session_start();     
    $host = "localhost";  
    $user_name = "root";  
    $password = '';  
    $db_name = "project";  
      
    $con = mysqli_connect($host, $user_name, $password, $db_name);  
    if(mysqli_connect_error()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
    // else
    // {
    // echo print_r ($_REQUEST);
    // }
    $email = $_POST['email'];  
    $password = $_POST['pwd'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from user where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
       
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            $_SESSION["active_user"] = $row['id']; 
            echo "<h1><center> Login successful </center></h1>";  
            echo "<script> location.href='login.php'; </script>";
            exit;
        }  
        else{  
            echo "<script>
            window.alert('Enter Valid Email and Password')
            location.href='index.php'; </script>";
            exit;
            
        }     
    

?>  