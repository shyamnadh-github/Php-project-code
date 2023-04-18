<!DOCTYPE html>
<html>

<head>

</head>

<body>
	
		<?php
		
		

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "project");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
		$password = $_REQUEST['pwd'];
		$mobile = $_REQUEST['mobile'];
        $phone = $_REQUEST['phone'];
		$state = $_REQUEST['state'];
		$city = $_REQUEST['city'];
        $address = $_REQUEST['address'];
		$pin = $_REQUEST['postal'];
	
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO user (name,email,password,mobile,phone,state,city,address,pin) VALUES ('$name',
			'$email','$password','$mobile','$phone','$state',
			'$city','$address','$pin')";
				
		//echo $sql;
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully</h3>";
			echo "<script> location.href='index.php'; </script>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>

</html>
