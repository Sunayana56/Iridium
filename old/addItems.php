<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Urban Trends | Contact</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop.css" rel="stylesheet">

  <style type="text/css">

 html {
      width: 100%;
      height: 100%;
      font-family: "Lato";
      color: white;
  }

  #box{
    background: rgba(220, 194, 192, 0.9);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 1);
    border-radius: 10px;
    margin-top: 65px;
    margin-bottom: 65px;
    padding: 30px;
  }

  .btn{
      background-color: #f44336;
      color: white;
      width: 100%;
  }

  .user{
      margin-top: 7px;
      padding-left: 3px;
    }

  .ftr{
    text-align: center;
    color: white;
  }

  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Urban Trends</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item  active">
            <a class="nav-link" href="contact.php">Contact</a>
            <span class="sr-only">(current)</span>
          </li>
          <?php
            session_start(); 
            if(isset($_SESSION['id']))
              { 
            ?>
                  
          <li class="nav-item user">
            <div class="dropdown">
            <div class="dropbtn">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <path d="M0,172v-172h172v172z" fill="#343a40"></path>
                  <g fill="#ffffff">
                    <path d="M86,0c-31.66211,0 -57.33333,25.67122 -57.33333,57.33333c0,31.66211 25.67122,57.33333 57.33333,57.33333c31.66211,0 57.33333,-25.67122 57.33333,-57.33333c0,-31.66211 -25.67122,-57.33333 -57.33333,-57.33333zM47.70313,76.36979h76.59375c-7.05469,14.10938 -21.44401,23.96354 -38.29687,23.96354c-16.85286,0 -31.24219,-9.85417 -38.29687,-23.96354zM52.85417,124.52083c-21.33203,5.59896 -38.01692,18.92448 -45.6875,47.47917h157.66667c-7.67057,-28.55469 -24.35547,-41.88021 -45.6875,-47.47917c-9.88216,5.29101 -21.16406,8.28646 -33.14583,8.28646c-11.98177,0 -23.26367,-2.99544 -33.14583,-8.28646z"></path>
                  </g>
                </g>
              </svg>
            </div>
            <div class="dropdown-content">
              <a href="#"><?php echo $_SESSION['fname'];?></a>
              <a href="logout.php">Log Out</a>
            </div>       
          </li>
          <?php  
              }else{
            ?>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login/Sign Up</a>
          </li>
          <?php
            }
          ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
   <div class="container" id="box">
      <div class="row">
        <div class="col-lg-8">
          <h1>Contact Us</h1>
          <p>To contact us please fill the form below:</p>
          <?php

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;
            require 'E:\Xampp\composer\vendor\autoload.php';

            $mail = new PHPMailer;

            if(isset($_POST['submit'])){

                // $mail->SMTPDebug = 4;                               // Enable verbose debug output

                  $mail->isSMTP();                                      // Set mailer to use SMTP
                  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                  $mail->SMTPAuth = true;                               // Enable SMTP authentication
                  $mail->Username = 'sunayana5688@gmail.com';                 // SMTP username
                  $mail->Password = 'R@K@$u$!*';                           // SMTP password
                  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                  $mail->Port = 587;                                    // TCP port to connect to

                  $mail->setFrom('sunayana5688@gmail.com', 'test mail');
                  $mail->addAddress('sunayana47@gmail.com');     // Add a recipient

                  $mail->addReplyTo('sunayana5688@gmail.com');
                  
                  $mail->isHTML(true);                                  // Set email format to HTML

                  $mail->Subject = 'Respond required';
                  $mail->Body    =  $_POST['name']." contacted us.<br> <b>Details</b><br> Name: ".$_POST['name']."<br> Email: ".$_POST['email']."<br> Mobile: ".$_POST['mobile']."<br> Message: ".$_POST['message'];

                  if(!$mail->send()) {
                      echo json_encode( ["status" => 0, "msg" => "Message could not be sent."] );
                      echo json_encode( ["status" => 0, "msg" => 'Mailer Error: ' . $mail->ErrorInfo] );
                  } 
                  else{
                    echo "Mesaage sent";
                  }

              
              }
            ?>
          <form action = "" method = "post">
             <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon addon-diff-color">
                              <span class="glyphicon glyphicon-user"></span>
                          </div>
                          <select>
                            <option name="women" value='1'>Women</option>
                            <option name="men" value='2'>Men</option>
                            <option name="kids" value='3'>Kids</option>
                          </select>
                          <!-- <input type="text" class="form-control" id=" " name="name" placeholder="Your Name" required pattern="^[a-zA-Z\s]+$"> -->
                        </div>
              </div>

              <div class="form-group">
                <div class="input-group">
                          <div class="input-group-addon addon-diff-color">
                              <span class="glyphicon glyphicon-envelope"></span>
                          </div>
                    <!-- <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required pattern="^[a-zA-Z0-9._]+@[a-zA-Z0-9._]+\.[a-zA-Z]{2,4}$"> -->
                          <?php 
                            if(isset($_POST['women'])){
                          ?>

                          <select>
                            <option name="women" value='1'>Women</option>
                            <option name="men" value='2'>Men</option>
                            <option name="kids" value='3'>Kids</option>
                          </select>
                           <?php
                            }
                          ?>
                </div>
              </div>
                
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon addon-diff-color">
                              <span class="glyphicon glyphicon-earphone"></span>
                          </div>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Your Mobile Number" required pattern="^[0-9]{10}$">
                </div>
              </div>

              <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon addon-diff-color">
                              <span class="glyphicon glyphicon-envelope"></span>
                          </div>
                          <textarea class="form-control" name="message" rows="7" id="message" placeholder="Your Message" required></textarea>
                        </div>
              </div>
              <button class="btn btn-default btn-lg" type="submit" name="submit"></i> Send</button>
            </form>
          </div>
          <div class="col-lg-4">
            <br><br><br>
            <h3>Address</h3>
            Door No 39<br>
            M G Road, Labbipet<br>
            Vijayawada - 520010<br><br>

            <h3>Phone and Email</h3>
            9136458326<br>
            urbantrends@gmail.com
          </div>
        </div>
      </div>
    </div>
 </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="ftr">
      Copyright &copy; Urban Trends 2019
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
