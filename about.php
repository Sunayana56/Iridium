<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Iridium | About</title>

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

  .user{
      margin-top: 7px;
      padding-left: 3px;
    }

  #box{
    background: rgba(92, 167, 196, 0.6);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.6);
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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="about.php">About</a>
            <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
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
  <div class="container">
    <div class="row">
      <div class="col-lg-8" id="box">
        <h1>About Us</h1>
          <p>
            <p>Launched in 2017, Urban Trends created a niche in the ready to wear market in India with a premium range of 
              clothing for all. With focus on product innovation and unique use of colors it has today come a long way since 
              it was incepted in 2017.</p><br>

            <p>The brand in no time has become the choice of the up market, trend-savvy, sophisticated and discerning Indian 
              and changed the way he dressed. With flagship stores in the best locations and international service, Urban Trends 
              brought in an International shopping experience to the country. The nation saw one of the first retail brands of 
              international quality grow, attain national acclaim. Our distribution channel spread not only all over the country 
              but crossed borders to the Middle East; it continues to grow with each year with now over 350 shopping destinations 
              across the country. Today, the brand is part of the Future group.</p><br>

            <p>Urban Trends has always used highest quality fabrics and product engineering techniques that give the user the 
              unique comfort and tactile feel which no other brand offers. This is clubbed with the use of colors to give the 
              sophisticate, yet colorful look that is unique to the Brand.</p><br>

            <p>To ensure that customers get the best product from us, we have pioneered the techniques like Golf Ball Wash, 
              Cone Dyed Casuals and Thermo-fused buttoning to name a few. These innovations have taken our collection to a 
              whole new level, making it synonymous with the words "Luxury & Style". As a part of the initiative to reward 
              our premium customers, ColorPlus has launched Spectrum, an exclusive membership to a plethora of benefits. 
              Spectrum offers its members reward points on every purchase which can be redeemed at any of our outlets and a host 
              of other benefits and privileges.</p><br>

            <p>Thus Urban Trends today is a complete lifestyle brand complementing every facet of your personality: be it at work, 
              leisure or those special moments.</p></p>
       </div>              
    </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="ftr">
      Copyright &copy; Iridium : A College E-Commerce Site 2020
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
