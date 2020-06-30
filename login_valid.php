<?php

session_start();

// $con = mysqli_connect('localhost', 'root','');
// mysqli_select_db($con, 'project');


// $email = $_POST['email'];
// $pass = $_POST['pass'];

// $s = "select * from sign_up_details where email='$email' && pass='$pass' && activated='1'";
// $row = mysqli_fetch_assoc($s);


// $result = mysqli_query($con, $s);
// $num = mysqli_num_rows($result);

// if($num == 1){
// 	$_SESSION['fname'] = $row['fname'];
// 	header('location:welcome.php');
// }else{
// 	header('location:login.php');
// }
	if(empty($_POST['email'])||empty($_POST['pass'])){
		header("Location:index.php");
	}
	$message="";
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	if(count($_POST)>0) {
	$con = mysqli_connect('localhost','root','','online_shop2') or die('Unable To connect');
	$result = mysqli_query($con,"SELECT * FROM sign_up_details WHERE email='".$email."' && pass='".$pass."'");
	$row  = mysqli_fetch_array($result);
	if(is_array($row)) {
	$_SESSION["id"] = $row[id];
	$_SESSION["fname"] = $row[fname];
	$_SESSION['lname'] = $row[lname];
	$_SESSION['email'] = $row[email];
	} else {
	$message = "Invalid Username or Password!";
	
	}
	}
	if(isset($_SESSION['id'])) {
	header("Location:index.php");
	}else{
		header('location:login.php');
	}


?>

