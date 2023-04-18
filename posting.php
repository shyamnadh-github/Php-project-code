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
        .container-fluid {
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

        .file {
            position: absolute;
            top: 35%;
            left: 25%;
            color: rgb(255, 115, 0);
        }

        .info4 {
            position: absolute;
            color: red;
            top: 45%;
            left: 25%;
        }

        .info4 a {
            text-decoration: none;
            color: black;
        }

        .info4 button {
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
    <form action="car_extend.php" method="post" enctype="multipart/form-data">
        <div class="file">
            <div class="col-sm-4">
                <label for="uploadfile" style="color: rgb(255, 115, 0);"> Upload Image </label>
            </div>
            <div class="col-sm-8">
                <input type="file" id="uploadfile" name="uploadfile"><br>
            </div>
        </div>

        <div class="info4">
            <h2>LISTING DETAILS</h2>
            <div class="col-sm-2">
                <label for="fuel" style="color: rgb(255, 115, 0);">Fuel Type:</label>
            </div>
            <div class="col-sm-10">
                <select name="fuel" id="fuel">
                    <option value="" disabled selected hidden>Fuel Type</option>
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                    <option value="cng">CNG</option>
                </select><br>
                <br>
            </div>
            <div class="col-sm-2">
                <label for="colour" style="color: rgb(255, 115, 0);">Colour:</label>
            </div>
            <div class="col-sm-10">
                <select name="colour" id="colour">
                    <option value="" disabled selected hidden>Select Color</option>
                    <option value="red">Red</option>
                    <option value="silver">Silver</option>
                    <option value="white">White</option>
                    <option value="blue">Blue</option>
                </select><br>
                <br>
            </div>
            <div class="col-sm-2">
                <label for="reg" style="color: rgb(255, 115, 0);">Registration No:</label>
            </div>
            <div class="col-sm-10">
                <input type="text" id="reg" name="reg"><br>
            </div>
            <div class="col-sm-2">
                <br>
                <label for="insurance" style="color: rgb(255, 115, 0);">Insurance valid till:</label>
            </div>
            <div class="col-sm-10">
                <br>
                <input type="text" id="insurance" name="insurance"><br>
            </div>
            <div class="col-sm-2">
                <br>
                <label for="why" style="color: rgb(255, 115, 0);">Tell the buyer why he/she should buy your car:</label>
            </div>
            <div class="col-sm-10">
                <br>
                <textarea id="why" name="why" rows="3" cols="30"></textarea><br>
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