<?php
$active_delete= $_GET['id'];
// echo $active_sell;
$host = "localhost";
$user_name = "root";
$password = '';
$db_name = "project";

$con = mysqli_connect($host, $user_name, $password, $db_name);
if (mysqli_connect_error()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}
$sql = "select * from selling where id = '$active_delete'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$delete = "DELETE FROM selling where id='$active_delete'";
//  echo $update_sql;
$deleted_car = mysqli_query($con, $delete);
// echo print_r($update_result);
if ($delete)
 {
    echo "<script>
   alert('successfully deleted');
   location.href='login.php';
   </script>";
}
else {
    echo "failed to delete";
}

?>