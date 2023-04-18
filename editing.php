<html>
<?php
// echo $_GET['id'];
$active_sell= $_GET['id'];
if($active_sell)
{
// echo $active_sell;
$host = "localhost";
$user_name = "root";
$password = '';
$db_name = "project";

$con = mysqli_connect($host, $user_name, $password, $db_name);
if (mysqli_connect_error()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}
$sql = "select * from selling where id = '$active_sell'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// echo print_r($_POST);

if (isset($_POST['submit'])) {
    // echo print_r($_POST);
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $mfg = $_POST['mfg'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $kms = $_POST['kms'];
    $owners = $_POST['owners'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
   
    $filename = $_FILES["upload"]["name"];
    $tempname = $_FILES["upload"]["tmp_name"];    
        $folder = "images/".$filename;

    
    $fuel=$_POST['fuel'];
    $colour=$_POST['colour'];
    $reg=$_POST['reg'];
    $insurance=$_POST['insurance'];
    $why=$_POST['why'];

    $update_car1 = "UPDATE selling SET city='$city', pin='$pincode', mfg='$mfg', make='$make', model='$make', kms='$kms', owners='$owners', price='$price', name='$name', mobile='$number', email='$email', image='$filename', fuel='$fuel', color='$colour', regno='$reg', insurance='$insurance', tellbuyer='$why' where id='$active_sell'";
    //  echo $update_sql;
    $updated_car = mysqli_query($con, $update_car1);
    // echo print_r($update_result);
    if (move_uploaded_file($tempname, $folder) || $update_car1 )
     {
        echo "<script>
       alert('update successful');
       </script>";
    }
    else {
        echo "update failed";
    }
}

?>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
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
     top: 108%;
     left: 30%;
 }
 .info4
 {
     position: absolute;
     color: red;
     top: 137%;
     left: 30%;
 }
 .info4 a
 {
     text-decoration: none;
     color: black;
 }
 .info4 button
 {
    padding: 4px 15px;
 }
 </style>
 </head>
 <body>
    <div class="container-fluid">
        <img src="background.jpg" width="100%" height="1280">
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
    <div class="row">
    <form method=post enctype="multipart/form-data"> 
      <div class="info1">
    <h2>Just fill your information and Get started</h2>

    <div class="col-sm-2">
        <label for="city" style="color: rgb(255, 115, 0);">City*:</label>
    </div>
    <div class="col-sm-10">
        <input type="text" id="city" name="city" required value=<?php echo $row['city'];?>><br>
    </div>
    <div class="col-sm-2">
        <br>
        <label for="pincode" style="color: rgb(255, 115, 0);">Pincode*:</label>
    </div>
    <div class="col-sm-10">
        <br>
        <input type="text" id="pincode" name="pincode" required value=<?php echo $row['pin'];?>><br>
    </div>
    
</div>

<div class="info2">
    <br>
    <h2>CAR INFORMATION</h2>
    <div class="col-sm-2">
    
    <label for="mfg" style="color: rgb(255, 115, 0);">MFG Year*:</label>
    </div>
    <div class="col-sm-10">
        
     <input type="text" id="mfg" name="mfg" required value=<?php echo $row['mfg'];?>><br>
</div>
<div class="col-sm-2">
        <br>
     <label for="make" style="color: rgb(255, 115, 0);">Make*:</label>
</div>
<div class="col-sm-10">
        <br>
            <select name="make" id="make" required value=<?php echo $row['make'];?>>
            <option value="" disabled selected hidden>Select Make</option>
            <option value="suzuki">Suzuki</option>
            <option value="tata">TATA</option>
            <option value="hyundai">Hyundai</option>
            </select><br>
<br></div>
<div class="col-sm-2">
        
     <label for="model" style="color: rgb(255, 115, 0);">Model*:</label>
</div>
<div class="col-sm-10">
        
            <input type="text" id="model" name="model" required value=<?php echo $row['model'];?>><br>
</div>
<div class="col-sm-2">
    <br>
      <label for="kms" style="color: rgb(255, 115, 0);">KMs Driven:</label>
</div>
<div class="col-sm-10">
    <br>
            <input type="text" id="kms" name="kms" value=<?php echo $row['kms'];?>><br> 
</div>
<div class="col-sm-2">
    <br>
      <label for="owners" style="color: rgb(255, 115, 0);">No.of Owners:</label>
</div>
<div class="col-sm-10">
    <br>
            <input type="text" id="owners" name="owners" value=<?php echo $row['owners'];?>><br> 
</div>
<div class="col-sm-2">
    <br>
       <label for="price" style="color: rgb(255, 115, 0);">Expected Price:</label>
</div>
<div class="col-sm-10">
    <br>
            <input type="text" id="price" name="price" value=<?php echo $row['price'];?>><br> 
</div>

<div class="col-sm-2">
    <br>   
          <label for="upload" style="color: rgb(255, 115, 0);"> Upload Image </label>
</div>
<div class="col-sm-10">
    <br>
            <input type="file" id="upload" name="upload" value=<?php echo $row['image'];?>><br> 
</div> 
     
    </div>

    <div class="info3">
        
        <h2>CONTACT INFORMATION</h2>
        <div class="col-sm-2">
        <label for="name" style="color: rgb(255, 115, 0);">Name:</label>
        </div>
        <div class="col-sm-10">
        <input type="text" id="name" name="name" value=<?php echo $row['name'];?>><br>
        </div>
        <div class="col-sm-2">
    <br>   
        <label for="number" style="color: rgb(255, 115, 0);">Mobile Number:</label>
        </div>
        <div class="col-sm-10">
    <br>   
        <input type="text" id="number" name="number"value=<?php echo $row['mobile'];?>><br>
        </div>
        <div class="col-sm-2">
    <br>   
        <label for="email" style="color: rgb(255, 115, 0);">Email Id:</label>
        </div>
        <div class="col-sm-10">
    <br>   
        <input type="email" id="email" name="email" value=<?php echo $row['email'];?>><br>
        </div>

    </div> 
    <div class="info4">
    
        <h2>LISTING DETAILS</h2>
        <div class="col-sm-2">
      
        <label for="fuel" style="color: rgb(255, 115, 0);">Fuel Type:</label>
        </div>
        <div class="col-sm-10">
      
             <select name="fuel" id="fuel" required value=<?php echo $row['fuel'];?>>
             <option value="" disabled selected hidden>Select Fuel Type</option>
             <option value="petrol">Petrol</option>
             <option value="diesel">Diesel</option>
             <option value="cng">CNG</option>
             </select><br>
             <br></div>
             <div class="col-sm-2">
            
         <label for="colour" style="color: rgb(255, 115, 0);">Colour:</label>
             </div>
             <div class="col-sm-10">
       
             <select name="colour" id="colour" required value=<?php echo $row['color'];?>>
             <option value="" disabled selected hidden>Select Color</option>
             <option value="red">Red</option>
             <option value="silver">Silver</option>
             <option value="white">White</option>
             <option value="blue">Blue</option>
             </select><br>
             <br></div>
             <div class="col-sm-2">
             <label for="reg" style="color: rgb(255, 115, 0);">Registration No:</label>
             </div>
             <div class="col-sm-10">
             <input type="text" id="reg" name="reg" value=<?php echo $row['regno'];?>><br>
             </div>
             <div class="col-sm-2">
                 <br>
             <label for="insurance" style="color: rgb(255, 115, 0);">Insurance valid till:</label>
             </div>
             <div class="col-sm-10">
                 <br>
             <input type="text" id="insurance" name="insurance" value=<?php echo $row['insurance'];?>><br>
             </div>
             <div class="col-sm-2">
                 <br>
             <label for="why" style="color: rgb(255, 115, 0);">Tell the buyer why he/she should buy your car:</label>
             </div>
             <div class="col-sm-10">
                 <br>
             <textarea id="why" name="why" rows="3" cols="30" ><?php echo $row['tellbuyer'];?></textarea><br>
             </div>
             <div class="col-sm-2">
                 <br>
             </div>
             <div class="col-sm-10">
                 <br>
             <button type="submit" name="submit">POST LISTING</a></button>
             </div>
             </div>         
    </div>
</form>
 </body>
 </html>
 <?php
}
else
{
    echo "<script> location.href='index.php'; </script>";   
}
 ?>   