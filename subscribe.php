<?php
	$email = $_POST['email'];
	// Database connection
	$conn = new mysqli('localhost','sona3elkhair_admin','allow2sona3elkhair','sona3elkhair_main');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
	    mysqli_set_charset($conn,"utf8");
		$stmt = $conn->prepare("insert into newsletter(email) values(?)");
		$stmt->bind_param("s", $email);
		$execval = $stmt->execute();
		$stmt->close();
		$conn->close();
    }
?>