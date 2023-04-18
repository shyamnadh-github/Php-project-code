<?php
session_start();
$active_car_id= $_SESSION['active_car'];
echo $active_car_id;
$host = "localhost";  
    $user_name = "root";  
    $password = '';  
    $db_name = "project";  
      
    $con = mysqli_connect($host, $user_name, $password, $db_name);


    if(mysqli_connect_error()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "images/".$filename;

    $fuel=$_POST['fuel'];
    $colour=$_POST['colour'];
    $reg=$_POST['reg'];
    $insurance=$_POST['insurance'];
    $why=$_POST['why'];
    

    $update_car="UPDATE selling SET image='$filename', fuel='$fuel', color='$colour', regno='$reg', insurance='$insurance', tellbuyer='$why' where id='$active_car_id'"; 
    $result = mysqli_query($con, $update_car);  
    if (move_uploaded_file($tempname, $folder))  {
        echo '<script>alert("upload successful")</script>';
        echo "<script> location.href='login.php'; </script>";
    }else{
        echo '<script>alert("upload failed")</script>';
        echo "<script> location.href='posting.php'; </script>";
  }




?>