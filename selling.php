<html>
    <?php
session_start();
$a=$_SESSION['active_user'];
if($a)
{
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
 .info1
 {
    color: rgb(24, 238, 113);
    position: absolute;
    top: 30%;
    left: 30%;
 }
 .info2
 {
     position: absolute;
     color: red;
     top: 50%;
     left: 30%;
 }
 .info3
 {
     position: absolute;
     color: red;
     top: 98%;
     left: 30%;
 }
 .info3 a
 {
     text-decoration: none;
     color: black;
 }
 .info3 button
 {
    padding: 4px 15px;
 }
 </style>
 </head>
 <body>
    <div class="container-fluid">
        <img src="background.jpg" width="100%" height="1000">
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
<div class="info1">
<form action="insert_car.php" method="post">
    <h2>Just fill your information and Get started</h2>
    <div class="col-sm-2">
        <label for="city" style="color: rgb(255, 115, 0);">City*:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" id="city" name="city" required><br>
    </div>
    <div class="col-sm-2">
        <br>
        <label for="pincode" style="color: rgb(255, 115, 0);">Pincode*:</label>
    </div>
    <div class="col-sm-10">
        <br>
        <input type="text" id="pincode" name="pincode" required><br>
    </div>
</div>
<div class="info2">

    <h2>CAR INFORMATION</h2>
    <div class="col-sm-2">
    <label for="mfg" style="color: rgb(255, 115, 0);">MFG Year*:</label>
    </div>
    <div class="col-sm-10">
   <input type="text" id="mfg" name="mfg" required><br>
    </div>
    <div class="col-sm-2">
     <br>
     <label for="make" style="color: rgb(255, 115, 0);">Make*:</label>
    </div>
    <div class="col-sm-10">
        <br>
            <select name="make" id="make" required>
            <option value="" disabled selected hidden>Select Make</option>
            <option value="suzuki">Suzuki</option>
            <option value="tata">TATA</option>
            <option value="hyundai">Hyundai</option>
            </select><br>
      <br>      
    </div>
    <div class="col-sm-2">      
     <label for="model" style="color: rgb(255, 115, 0);">Model*:</label>
    </div>
    <div class="col-sm-10">      
            <input type="text" id="model" name="model" required><br>
    </div>
    
    <div class="col-sm-2">
        <br>
      <label for="kms" style="color: rgb(255, 115, 0);">KMs Driven:</label>
    </div>
    <div class="col-sm-10">
        <br>    
            <input type="text" id="kms" name="kms"><br>
    </div>
    <div class="col-sm-2">  
        <br>    
      <label for="owners" style="color: rgb(255, 115, 0);">No.of Owners:</label>
    </div>
    <div class="col-sm-10"> 
        <br> 
            <input type="text" id="owners" name="owners"><br> 
    </div>
    <div class="col-sm-2">  
        <br>  
       <label for="price" style="color: rgb(255, 115, 0);">Expected Price:</label>
    </div>
    <div class="col-sm-10">  
        <br> 
            <input type="text" id="price" name="price"><br>  
    </div>                 
    </div>
    
<div class="info3">
<!-- <br><br><br><br><br><br><br><br> -->
    <h2>CONTACT INFORMATION</h2>
    <div class="col-sm-2">
    <label for="name" style="color: rgb(255, 115, 0);">Name:</label>
    </div>
    <div class="col-sm-10">
    <input type="text" id="name" name="name" ><br>
    </div>
    <div class="col-sm-2">
        <br>
    <label for="number" style="color: rgb(255, 115, 0);">Mobile Number:</label>
    </div>
    <div class="col-sm-10">
        <br>
    <input type="text" id="number" name="number"><br>
    </div>
    <div class="col-sm-2">
        <br>
    <label for="email" style="color: rgb(255, 115, 0);">Email Id:</label>
    </div>
    <div class="col-sm-10">
        <br>
    <input type="email" id="email" name="email"><br>
    </div>
    <div class="col-sm-2">
        <br>
    
    </div>
    <div class="col-sm-10">
        <br>
        <input type="checkbox" id="terms" name="terms" required>
    <label for="terms" style="color: rgb(255, 115, 0);"> I agree with the terms and conditions</label><br>
    </div>
    <div class="col-sm-2">
        <br>
    </div>
    <div class="col-sm-10">
        <br>
    <button type="submit">POST LISTING</button>
    </div>
</form>
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