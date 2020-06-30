<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Iridium | Sign Up</title>

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

  h2
  {
      margin: 0 0 20px 0;
/*      font-weight: 300;
      font-size: 30px;*/
      text-align: center;
  }


  .signUp-box{
      position: relative;
      margin: 8% auto;
      height: 700px;
      width: 400px;
      background: rgba(92, 167, 196,0.5);
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.95);
      border-radius: 10px;
  }

  .inside-box{
       position: absolute;
      top: 0;
      left: 0;
      box-sizing: border-box;
      padding: 20px;
      width: 400px;
      height: 700px;  
  }





  input[type="text"],
  input[type="password"],
  input[type="tel"],
  input[type="email"]
  {
      display: block;
      box-sizing: border-box;
      margin-bottom: 20px;
      padding: 4px;
      width: 100%;
      height: 32px;
    /*  border: none;*/
      /*border-color: #f44336;*/
      outline: none;
      border: 1px solid #aaa;
      font-family: sans-serif;
      font-weight: 400;
      font-size: 17px;
      transition: 0.2s ease;
  }

  .capbox {
      position: absolute;
      left: 90px;
      background-color: #c6cad1;
      border-width: 0px 12px 0px 0px;
      display: inline-block;
      *display: inline; zoom: 1; /* FOR IE7-8 */
      padding: 8px 40px 8px 8px;
      }

  .capbox-inner {
      font: bold 11px arial, sans-serif;
      color: #000000;
      background-color: #e2b7b7;
      margin: 5px auto 0px auto;
      padding: 3px;
      -moz-border-radius: 4px;
      -webkit-border-radius: 4px;
      border-radius: 4px;
      }

  #CaptchaDiv {
      font: bold 17px verdana, arial, sans-serif;
      font-style: italic;
      color: #000000;
      background-color: #FFFFFF;
      padding: 4px;
      -moz-border-radius: 4px;
      -webkit-border-radius: 4px;
      border-radius: 4px;
      }

  #CaptchaInput { margin: 1px 0px 1px 0px; width: 135px; }



  .btn{
      position: absolute;
      top: 575px;
      left: 135px;
      background-color: #f44336;
      color: white;

  }

  p{
      position: absolute;
      top: 640px;
      left: 95px ;
  }
  .alert, #loader {
        display: none;
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
      <a class="navbar-brand" href="index.php">Iridium</a>
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
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item   active">
            <a class="nav-link" href="login.php">Login/Sign Up</a>
            <span class="sr-only">(current)</span>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
   <div class="container">
  <div class="row">
    
      <div class="signUp-box">
        <div class="inside-box">
          <div class="col-lg-12">
            <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
            <div id="result"></div>
          </div>
        </div>
        <center><img src="img/loader.gif" id="loader"></center>
        <div class="col-lg-12">
          <h2>SignUp</h2><br>
          <form action = "registration.php" method = "post" onsubmit="return checkform(this);">
          <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-user"></span>
                                  </div>
                                  <input type="text" class="form-control" id=" " name="fname" placeholder="First Name" required pattern="^[a-zA-Z\s]+$">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-user"></span>
                                  </div>
                                  <input type="text" class="form-control" id=" " name="lname" placeholder="Last Name" required pattern="^[a-zA-Z\s]+$">
                                </div>
                            </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-earphone"></span>
                                  </div>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required pattern="^[0-9]{10}$">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-home"></span>
                                  </div>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" required pattern="^[a-zA-Z0-9,-.]{15, 300}$">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-envelope"></span>
                                  </div>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required pattern="^[a-zA-Z0-9._]+@[a-zA-Z0-9._]+\.[a-zA-Z]{2,4}$">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-lock"></span>
                                  </div>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required pattern="(?=^.{8,20}$)(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[\W_])^.*$">
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-lock"></span>
                                  </div>
                            <input type="password" class="form-control" id="cfm_pass" name="cfm_pass" placeholder="Confirm Password" required pattern="(?=^.{8,20}$)(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[\W_])^.*$">
                          </div>
                      </div>
             <!-- START CAPTCHA -->
            <br>
            <div class="capbox">

            <div id="CaptchaDiv"></div>

            <div class="capbox-inner">
            Type the above number:<br>

            <input type="hidden" id="txtCaptcha">
            <input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

            </div>
            </div>
            </br>
            <!-- END CAPTCHA -->
 
            
            <button class="btn btn-default btn-lg" type="submit"></i> Sign Up!</button>
          
          
          </form>
          <p>Have an account? <a href="login.php" >Login here <a></p>
        </div>
      </div>
        
        </div>
      </div>
    </div>
  </div>
 </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="ftr">
      Copyright &copy;Iridium : A College E-Commerce Site 2020
    </div>
    <!-- /.container -->
  </footer>

  <script type="text/javascript">

    // Captcha Script

    function checkform(theform){
    var why = "";

    if(theform.CaptchaInput.value == ""){
    why += "- Please Enter CAPTCHA Code.\n";
    }
    if(theform.CaptchaInput.value != ""){
    if(ValidCaptcha(theform.CaptchaInput.value) == false){
    why += "- The CAPTCHA Code Does Not Match.\n";
    }
    }
    if(why != ""){
    alert(why);
    return false;
    }
    }

    var a = Math.ceil(Math.random() * 9)+ '';
    var b = Math.ceil(Math.random() * 9)+ '';
    var c = Math.ceil(Math.random() * 9)+ '';
    var d = Math.ceil(Math.random() * 9)+ '';
    var e = Math.ceil(Math.random() * 9)+ '';

    var code = a + b + c + d + e;
    document.getElementById("txtCaptcha").value = code;
    document.getElementById("CaptchaDiv").innerHTML = code;

    // Validate input against the generated number
    function ValidCaptcha(){
    var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
    var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
    if (str1 == str2){
    return true;
    }else{
    return false;
    }
    }

    // Remove the spaces from the entered and generated code
    function removeSpaces(string){
    return string.split(' ').join('');
    }
  </script> 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
