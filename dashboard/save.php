<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "contact" || $cat_get == "contact") {
					$timestamp = addslashes(htmlentities($_POST["timestamp"], ENT_QUOTES));
$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$phone = addslashes(htmlentities($_POST["phone"], ENT_QUOTES));
$address = addslashes(htmlentities($_POST["address"], ENT_QUOTES));
$message = addslashes(htmlentities($_POST["message"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `contact` (  `timestamp` , `name` , `email` , `phone` , `address` , `message` ) VALUES ( '".$timestamp."' , '".$name."' , '".$email."' , '".$phone."' , '".$address."' , '".$message."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `contact` SET  `timestamp` =  '".$timestamp."' , `name` =  '".$name."' , `email` =  '".$email."' , `phone` =  '".$phone."' , `address` =  '".$address."' , `message` =  '".$message."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `contact` WHERE id = '".$id_get."' ");
					}
					header("location:"."contact.php");
				}
				
				if($cat == "users" || $cat_get == "users") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `users` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `users` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				
				if($cat == "volunteer" || $cat_get == "volunteer") {
					$timestamp = addslashes(htmlentities($_POST["timestamp"], ENT_QUOTES));
$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$phone = addslashes(htmlentities($_POST["phone"], ENT_QUOTES));
$address = addslashes(htmlentities($_POST["address"], ENT_QUOTES));
$notes = addslashes(htmlentities($_POST["notes"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `volunteer` (  `timestamp` , `name` , `email` , `phone` , `address` , `notes` ) VALUES ( '".$timestamp."' , '".$name."' , '".$email."' , '".$phone."' , '".$address."' , '".$notes."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `volunteer` SET  `timestamp` =  '".$timestamp."' , `name` =  '".$name."' , `email` =  '".$email."' , `phone` =  '".$phone."' , `address` =  '".$address."' , `notes` =  '".$notes."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `volunteer` WHERE id = '".$id_get."' ");
					}
					header("location:"."volunteer.php");
				}
				?>