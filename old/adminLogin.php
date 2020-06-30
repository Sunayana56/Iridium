<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Urban Trends | Login</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop.css" rel="stylesheet">

  <style type="text/css">

  /*html {
      width: 100%;
      height: 100%;
      font-family: "Lato";
      color: white;
  }*/

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
      height: 350px;
      width: 400px;
      background: rgba(255,255,255,0.85);
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
      height: 40px;
      border-radius: 5px;
      outline: none;
      border-bottom: 1px solid #aaa;
      font-family: sans-serif;
      font-weight: 400;
      font-size: 17px;
      transition: 0.2s ease;
  }


  .btn{
      position: absolute;
      top: 210px;
      left: 135px;
      background-color: #f44336;
      color: white;

  }

  p{
      position: absolute;
      top: 270px;
      left: 50px ;
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
      <a class="navbar-brand" href="index.php">Urban Trends</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item active">
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
          <h2>Admin Login</h2><br>
          <form action = "admin_valid.php" method = "post"> 
          
            <div class="form-group">
                        <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-user"></span>
                                  </div>
                            <input type="text" class="form-control" id="text" name="username" placeholder="Username">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                                  <div class="input-group-addon addon-diff-color">
                                      <span class="glyphicon glyphicon-lock"></span>
                                  </div>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                          </div>
                      </div>
          
            
            <button class="btn btn-default btn-lg" type="submit" name="submit"></i> Login</button>
          
          
          </form>
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
      Copyright &copy; Urban Trends 2019
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
