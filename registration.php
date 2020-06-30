<?php

	/*use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'E:\xampp1\phpMyAdmin\vendor\composer\phpmailer\vendor\autoload.php';*/
	session_start();
	

	$con = mysqli_connect('localhost', 'root','');

	mysqli_select_db($con, 'online_shop2');

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$pass1 = $_POST['pass'];
	$pass2 = $_POST['cfm_pass'];
	//$date = date('Y-m-d H:i:s');

	//$lastId = $con->lastInsertId();
	//$token = $lastId;



	$s = "select * from sign_up_details where email='$email' or mobile='$mobile'";

	$result = mysqli_query($con, $s);
	$num = mysqli_num_rows($result);

	if($num == 1){
		echo '<script type="text/javascript">',
			    'alert("Email address or Mobile number already exists");',
			    'window.location.href = "signUp.php";',
			 '</script>';
		// header('location:signUp.php');
		// exit();
	}else{
		if($pass1 == $pass2){
		$reg = "INSERT INTO `sign_up_details` (`id`, `fname`, `lname`, `mobile`, `address`, `email`, `pass`, `created_on`) VALUES (NULL, '$fname', '$lname', '$mobile', '$address', '$email', '$pass1', current_timestamp())";
		$res=mysqli_query($con,$reg);
		/*if(mysqli_query($con, $reg)){
			//$id = mysqli_insert_id($con);
			//$url = 'http://'.$_SERVER['SERVER_NAME'].'/project/verify.php?id='.$id.'&token='.$token;
			$html = '<div>Welcome to Urban Trends.<br></div>';
			$mail = new PHPMailer;

				// $mail->SMTPDebug = 4;                               // Enable verbose debug output

					$mail->isSMTP();                                      // Set mailer to use SMTP
					$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
					$mail->SMTPAuth = true;                               // Enable SMTP authentication
					$mail->Username = 'sunayana5688@gmail.com';                 // SMTP username
					$mail->Password = 'R@K@$u$!*';                           // SMTP password
					$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
					$mail->Port = 587;                                    // TCP port to connect to

					$mail->setFrom('sunayana5688@gmail.com', 'registeration mail');
					$mail->addAddress($email);     // Add a recipient

					$mail->addReplyTo('sunayana5688@gmail.com');
					
					$mail->isHTML(true);                                  // Set email format to HTML

					$mail->Subject = 'Registration successful';
					$mail->Body    =  $html;

					if(!$mail->send()) {
					    echo json_encode( ["status" => 0, "msg" => "Message could not be sent."] );
					    echo json_encode( ["status" => 0, "msg" => 'Mailer Error: ' . $mail->ErrorInfo] );
					} 
					else{
						echo "Mail sent";
					}*/
		echo '<script type="text/javascript">',
			     			'alert("Registration Successful");',
			     			'window.location.href = "login.php";',
			     '</script>';
		//header('location:login.php');
		//exit();
		}else{
			echo '<script type="text/javascript">',
			     			'alert("Passwords do not match");',
			     			'window.location.href = "signUp.php";',
			     '</script>';
			// header('location:signUp.php');
			// exit();
		}
	}
	
	

?>