<html>
    <?php 
    session_start();     
    $active_id= $_SESSION['active_user'];
if($active_id)
{
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
 .welcome h1
 {
color: red;
position: absolute;
top: 35%;
left: 30px;
 }
.buysell h1
{
    color: red;
position: absolute;
top: 45%;
left: 38%;
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
        <a href="listings.php">View Full Listingphp
        <a href="logout.php">Logout</a>
      </div>
      <div class="welcome">
           <h1>Welcome <?php 
      echo $row['name']; 
           ?></h1> 
        </div>
       <div class="buysell">
           <h1>Buy or Sell your Car</h1>
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