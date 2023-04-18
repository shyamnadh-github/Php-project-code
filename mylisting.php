<html>
<?php
session_start();

$user= $_SESSION["active_user"];
if($user)
{
// echo print_r($user);
$host = "localhost";
$user_name = "root";
$password = '';
$db_name = "project";

$con = mysqli_connect($host, $user_name, $password, $db_name);
if (mysqli_connect_error()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}
$sql = "select * from selling where user_id = '$user'";
$result = mysqli_query($con, $sql);
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

        .title {
            position: absolute;
            top: 7%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 110px;
        }

        .nav {
            position: absolute;
            top: 22%;
        }

        .nav a {

            color: rgb(255, 115, 0);
            padding: 30px;
            font-size: 20px;
        }

        .list {
            position: absolute;
            color: red;
            top: 45%;
            left: 25%;

            width: 220px;
        }



        .list a {
            text-decoration: none;
            color: black;
        }

        .list button {
            padding: 4px 15px;
        }

        .details img {
            width: 120px;
            height: 120px;
        }
       
    </style>
</head>

<body>
    <div class="container-fluid">
        <img src="background.jpg" style="width:100%; height:800px">
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
    <div class="list">
        <div class="preview">
            <?php
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                
                while ($row = mysqli_fetch_assoc($result)) {
                    //   echo print_r($row);
                    echo "<div class='details' style='border-bottom: 3px solid blue ;'>";
                    
                    echo "<img src='images/" . $row['image'] . "'>";
                    echo "<br>";
                    echo "<div class='colorbox' style='background-color: lightblue; height: 60px; width: 150px;'>";
                    echo "City: " . $row['city'];
                    echo "<br>";
                    echo "Year: " . $row['mfg'];
                    echo "<br>";
                    echo "Model: " . $row['model'];
                    echo "<br><br>";
                    echo "</div>";
                    $carid =$row['id'];
                    echo "<button type=''><a href='editing.php?id=$carid'>Edit</a></button>";
                    echo "<button type=''><a href='delete_car.php?id=$carid'>Delete</a></button>";
                    echo "</div><br>";
                    
                }
            } else {
                echo '<script>alert("zero results")</script>';
                echo "<script> location.href='login.php'; </script>";
            }
            

            ?>
        </div>
        <br><br>


        <br><br>
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