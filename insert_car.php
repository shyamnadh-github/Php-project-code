<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <?php
     session_start();     
     

    // servername => localhost
    // username => root
    // password => empty
    // database name => staff
    $conn = mysqli_connect("localhost", "root", "", "project");

    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    // Taking all values from the form data(input)
    $city = $_REQUEST['city'];
    $pincode = $_REQUEST['pincode'];
    $mfg = $_REQUEST['mfg'];
    $make = $_REQUEST['make'];
    $model = $_REQUEST['model'];
    $kms = $_REQUEST['kms'];
    $owners = $_REQUEST['owners'];
    $price = $_REQUEST['price'];
    $name = $_REQUEST['name'];
    $number = $_REQUEST['number'];
    $email = $_REQUEST['email'];
    $user_id= $_SESSION["active_user"];
    
    // Performing insert query execution
    // here our table name is selling
    $sql = "INSERT INTO selling (city,pin,mfg,make,model,kms,owners,price,name,mobile,email,user_id) VALUES ('$city','$pincode','$mfg','$make','$model','$kms','$owners','$price','$name','$number','$email','$user_id')";
    // echo $sql;
    $resp=mysqli_query($conn, $sql);
    $id=mysqli_insert_id($conn);
    // echo print_r($id);
    $_SESSION["active_car"] = $id;
    // echo print_r($_SESSION["active_car"]);
    
    if ($id) {
        // echo "<h3>data stored in a database successfully</h3>";
        echo "<script> location.href='posting.php'; </script>";

    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
    ?>

</body>

</html>