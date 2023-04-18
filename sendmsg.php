<html>
    <?php
    
     session_start();
     $a=$_SESSION['active_user'];
     if($a)
     {
    
$carid1= $_GET['id'];
$client= $_GET['us'];
$id2= $_GET['myid'];
// echo $message;
// echo $client;
$conn = mysqli_connect("localhost", "root", "", "project");
if (isset($_POST['submit'])) {
    
$msg1 = $_POST['msg'];
$sql = "INSERT INTO contactseller (message,user_id,car_id,recip_id) VALUES ('$msg1','$id2','$carid1','$client')";
$resp=mysqli_query($conn, $sql);
if($resp){
    // echo "<h3>data stored in a database successfully</h3>";
    // echo "<script> location.href='index.php'; </script>";
    echo "<script>
       alert('message sent');
       location.href='login.php';
       </script>";

} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
}
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
 .msgtitle h2
 {
    position: absolute;
    top: 35%;
    left: 20%;
    color: darkviolet;
 }
 .msgfield
 {
     position: absolute;
     top: 45%;
     left: 22%;
 }
 .msgfield a
 {
     text-decoration: none;
     color: black;
 }
 .msgfield button
 {
    padding: 4px 15px;
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
    <div class="msgtitle">
        <h2>SEND MESSAGE</h2>
    </div>
    <form method="post">
    <div class="msgfield">
        
        <div class="col-sm-2">
            <br>
        <label for="msg" style="color: rgb(255, 115, 0);">Message:</label>
        </div>
        <div class="col-sm-10">
            <br>
             <textarea id="msg" name="msg" rows="3" cols="30"></textarea><br>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <br>
             <button type="submit" name="submit">SEND</a></button>
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