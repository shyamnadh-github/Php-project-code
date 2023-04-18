<html>
<?php
session_start();
$active_id = $_SESSION['active_user'];
if($active_id)
{
$host = "localhost";
$user_name = "root";
$password = '';
$db_name = "project";

$con = mysqli_connect($host, $user_name, $password, $db_name);
if (mysqli_connect_error()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}
$sql = "select * from user where id = '$active_id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// echo print_r($_POST);

if (isset($_POST['submit'])) {
    // echo print_r($_POST);
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $postal = $_POST['postal'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $update_sql = "UPDATE user SET name='$name', mobile='$mobile', phone='$phone', state='$state', city='$city', address='$address', pin='$postal', password='$password', email='$email' where id='$active_id'";
    //  echo $update_sql;
    $update_result = mysqli_query($con, $update_sql);
    // echo print_r($update_result);
    if ($update_sql) {
        echo "<script>
       alert('update successful');
       location.href='login.php';
       </script>";
    } else {
        echo "update failed";
    }
}
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

        .heading h2 {
            color: rgb(154, 243, 10);
            position: absolute;
            top: 28%;
            left: 20%;
        }

        .area {
            position: absolute;
            top: 38%;
            left: 25%;
        }

        .infoedits {
            position: absolute;
            top: 95%;
            left: 20%;
            color: rgb(154, 243, 10);
        }

        .radios {
            position: absolute;
            top: 105%;
            left: 30%;
            color: rgb(154, 243, 10);
        }

        #btn1 a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>


    <div class="container-fluid">
        <img src="background.jpg" width="100%" height="800">
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
    <div class="heading">
        <h2>Register Now?</h2>
    </div>
    <!-- <?php
            //  echo print_r($row);
            ?> -->
    <form method=post>
        <div class="area">
            <div class="col-sm-2">

                <label for="name" style="color: rgb(154, 243, 10);">Name*:</label>
            </div>
            <div class="col-sm-10">
                <input type="text" id="name" name="name" required value=<?php echo $row['name'];?>>
            </div>
            <div class="col-sm-2">
                <br>
                <label for="mobile" style="color: rgb(154, 243, 10);">Mobile Number*:</label>
            </div>
            <div class="col-sm-10">
                <br>
                <input type="text" id="mobile" name="mobile" required value=<?php echo $row['mobile'];?>>
            </div>
            <div class="col-sm-2">
                <br>
                <label for="phone" style="color: rgb(154, 243, 10);">Phone No:</label>
            </div>
            <div class="col-sm-10">
                <br>
                <input type="text" id="phone" name="phone" value=<?php echo $row['phone'];?>>
            </div>
            <div class="col-sm-2">
                <br>
                <label for="state" style="color: rgb(154, 243, 10);">State*:</label>
            </div>
            <div class="col-sm-10">
                <br>
                <select name="state" id="state" required value=<?php echo $row['state'];?>>
                    <option value="kerala">Kerala</option>
                    <option value="karnataka">Karnataka</option>
                    <option value="goa">Goa</option>
                </select><br>
                <br>
            </div>
            <div class="col-sm-2">
                <br>
                <label for="city" style="color: rgb(154, 243, 10);">City*:</label>
            </div>
            <div class="col-sm-10">
                <br>
                <select name="city" id="city" required value=<?php echo $row['city'];?>>
                    <option value="kottayam">Kottayam</option>
                    <option value="kochi">Kochi</option>
                    <option value="thrissur">Thrissur</option>
                </select><br>
                <br>
            </div>
            <div class="col-sm-2">
                <br>
                <label for="address" style="color: rgb(154, 243, 10);">Street/Address*:</label>
            </div>
            <div class="col-sm-10">
                <br>
                <textarea id="address" name="address" rows="4" cols="30" required>
        <?php
        echo htmlspecialchars($row['address']);
        ?>
        </textarea><br>
            </div>
            <div class="col-sm-2">
                <br>
                <label for="postal" style="color: rgb(154, 243, 10);">Postal Code*:</label>
            </div>
            <div class="col-sm-10">
                <br>
                <input type="text" id="postal" name="postal" required value=<?php echo $row['pin'];?>><br>
            </div>
        </div>
        <div class="infoedits">
            <h2>Your Login Information</h2>
        </div>
        <div class="radios">
            <input type="radio" name="type" value="password" class="test1">Password<br>
            <div id="textbox1" style="display: none">
                <input type="password" name="password" id="password" required>
            </div>
            <input type="radio" name="type" value="email" class="test1">Email ID<br>
            <div id="textbox2" style="display: none">
                <input type="text" name="email" id="email" required>
            </div>

            <button type="submit" name="submit" id="btn1">Submit</button><br>

        </div>
    </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('.test1').on('click', function() {
        // alert("hi");
        if ($(this).val() == "password") {
            // console.log($(this).val());
            $('#textbox1').show();
            $('#textbox2').hide();
        } else if ($(this).val() == "email") {
            $('#textbox1').hide();
            $('#textbox2').show();
        }
    });
</script>

</html>
<?php
}
else
{
    echo "<script> location.href='index.php'; </script>";   
}
 ?>   