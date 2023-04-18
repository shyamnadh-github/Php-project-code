<html>
<?php
session_start();
$ad_id = $_SESSION['active_user'];

if($ad_id)
{
$host = "localhost";
$user_name = "root";
$password = '';
$db_name = "project";

$con = mysqli_connect($host, $user_name, $password, $db_name);
if (mysqli_connect_error()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}
$sql= "SELECT user.name, user.mobile, contactseller.message
FROM user
INNER JOIN contactseller ON user.id = contactseller.user_id AND contactseller.recip_id=$ad_id";
// $sql = "select * from contactseller where recip_id = '$ad_id'";
// echo print_r($sql);
$result = mysqli_query($con, $sql);
// $row2= mysqli_fetch_assoc($result);
// $customer_id= $row2['user_id'];
// // // echo print_r($recipient_id);
// $name_sql= "select name from user where id='$customer_id'";
// $result2= mysqli_query($con,$name_sql);

// $row3= mysqli_fetch_assoc($result2);
// echo print_r($row3);
// echo print_r($result2);
// $req = mysqli_fetch_array($result, MYSQLI_ASSOC);
// echo print_r($result);




?>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
.container-fluid
    {
        position: relative;
  text-align: center;
  color: red;
    }
 .title
 {
    position: absolute;
  top: 7%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 110px;
 } 
 .nav
 {
    position: absolute;
    top: 22%;
 }  
 .nav a
 {
    
     color: rgb(255, 115, 0);
     padding: 30px;
     font-size: 20px;
 }
 .contenthead p
 {
     color: whitesmoke;
     font-family: Times New Roman;
     font-size: 350%;
     position: absolute;
     top: 30%;
     left: 15%;
 }
 .msgcontent
 {
     position: absolute;
     top: 38%;
     left: 15%;
     color: red;
     font-size: 150%;
     font-family: Times New Roman;
width: 600px;

 }
 .col-sm-4{
    border-style: groove;
  border-color: grey;
  border-width: 6px;
 }
 </style>
 </head>
 <body>
    <div class="container-fluid">
        <img src="background.jpg" width="100%">
        <div class="title">USED CARS</div>
    </div>
    <div class="nav">
        <a href="login.php">Home</a>
        <a href="mylisting.php">My used car listings</a>
        <a href="selling.php">Sell your car</a>
        <a href="enquiry.php">Enquiries</a>
        <a href="profile.php">Edit Profile</a>
        <a href="listings.php">View Full Listing</a>
        <a href="logout.php">Logout</a>
      </div>
    <div class="contenthead">
        <p>MESSAGE</p>
    </div>
    <div class="msgcontent">    
        <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                
                while ($row = mysqli_fetch_assoc($result)) {
                   echo "<br>";
                    echo "<div class='col-sm-4'> ";
                    echo  $row['name'];
                    echo "</div>";
                    echo "<div class='col-sm-4'> ";
                    echo $row['mobile'];
                    echo "</div>";
                    echo "<div class='col-sm-4'> ";
                    echo $row['message'];
                    echo '</div><br>';
                }
            } else {
                echo '<script>alert("zero results")</script>';
                echo "<script> location.href='login.php'; </script>";
            }
            

            ?>


    </div>  
 </body>
 </html>
 <?php
}
else
{
    echo "<script> location.href='index.php'; </script>";   
}
 ?>   