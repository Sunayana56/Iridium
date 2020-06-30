<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Iridium</title>

  <!-- Bootstrap core CSS -->
  <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/chat.css" rel="stylesheet">
  <link href="css/shop.css" rel="stylesheet">


  <!-- Javascript file for the slider -->
  <script type="text/javascript" src="css/shop.js">  </script>
  <style type="text/css">
    .user{
      margin-top: 7px;
      padding-left: 3px;
    }

    /*.mySlides{
      border: 8px solid #eee;
    }*/
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
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
            <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
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
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4" id="cat">Categories</h1>
        <div class="list-group">
          <div class="dropdown">
            <div class="dropbtn"><a href="#" class="list-group-item">Boards & Modules</a></div>
            <div class="dropdown-content">
              <a class="menu_item" href="index.php?catg=1 & subcatg=Arduino"><span>Arduino</span></a>
              <a class="menu_item" href="index.php?catg=1 & subcatg=Raspberry Pi"><span>Raspberry Pi</span></a>
              <a class="menu_item" href="index.php?catg=1 & subcatg=Modules"><span>Modules</span></a>
              
            </div>
          </div> 
          <div class="dropdown">
            <div class="dropbtn"><a href="#" class="list-group-item">Electronic Components</a></div>
            <div class="dropdown-content">
              <a class="menu_item" href="index.php?catg=2 & subcatg=Sensors"><span>Sensors</span></a>
              <a class="menu_item" href="index.php?catg=2 & subcatg=Transistors"><span>Transistors</span></a>
              <a class="menu_item" href="index.php?catg=2 & subcatg=Resistors"><span>Resistors</span></a>
              <a class="menu_item" href="index.php?catg=2 & subcatg=Diodes"><span>Diodes</span></a>
              <a class="menu_item" href="index.php?catg=2 & subcatg=Motors"><span>Motors</span></a>
              <a class="menu_item" href="index.php?catg=2 & subcatg=Batteries"><span>Batteries</span></a>
              <a class="menu_item" href="index.php?catg=2 & subcatg=Speakers"><span>Speakers</span></a>
            </div>
          </div> 
          <div class="dropdown">
            <div class="dropbtn"><a href="#" class="list-group-item">Wires</a></div>
            <div class="dropdown-content">
              <a class="menu_item" href="index.php?catg=3 & subcatg=Jumper Wires"><span>Jumper Wires</span></a>
              <a class="menu_item" href="index.php?catg=3 & subcatg=Cables"><span>Cables</span></a>
              
            </div>
          </div>         
        </div>

        <h5 class="my-4" id="slotBook"><CENTER><a href="slotBook.php">Book a slot for 3-D Printing</a></CENTER></h5>


      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">


    <?php
    if(!(isset($_REQUEST['catg']))){
      include("home.php");
    }else{
      include("category.php");
    }

?>

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
   <?php include('popUpChat.php'); ?>



  </div>
  <!-- /.container -->
</div>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;Iridium : A College E-Commerce Site 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">
jQuery(document).ready(function(){
  load_cart_item_number();
function load_cart_item_number(){
  $.ajax({
    url:'action.php',
    method:'get',
    data:{cartItem:"cart_item"},
    success:function(response){
      $("#cart-item").html(response);
    }
  });
}
});

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>

</html>
