<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Urban Trends</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop.css" rel="stylesheet">

  <!-- Javascript file for the slider -->
  <script type="text/javascript" src="css/shop.js">  </script>
  <style type="text/css">
    .user{
      margin-top: 7px;
      padding-left: 3px;
    }
    .btn{
      background-color: #ffffff;
      color: white;

  }

  .container2{
    margin-top: 100px;
    text-align: center;
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
      <a class="navbar-brand" href="index.php">Urban Trends</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="adminDash.php">Home</a>
            <span class="sr-only">(current)</span>
          </li>
      
                  
          <li class="nav-item">
            <!-- <div class="dropdown">
            <div class="dropbtn">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <path d="M0,172v-172h172v172z" fill="#343a40"></path>
                  <g fill="#ffffff">
                    <path d="M86,0c-31.66211,0 -57.33333,25.67122 -57.33333,57.33333c0,31.66211 25.67122,57.33333 57.33333,57.33333c31.66211,0 57.33333,-25.67122 57.33333,-57.33333c0,-31.66211 -25.67122,-57.33333 -57.33333,-57.33333zM47.70313,76.36979h76.59375c-7.05469,14.10938 -21.44401,23.96354 -38.29687,23.96354c-16.85286,0 -31.24219,-9.85417 -38.29687,-23.96354zM52.85417,124.52083c-21.33203,5.59896 -38.01692,18.92448 -45.6875,47.47917h157.66667c-7.67057,-28.55469 -24.35547,-41.88021 -45.6875,-47.47917c-9.88216,5.29101 -21.16406,8.28646 -33.14583,8.28646c-11.98177,0 -23.26367,-2.99544 -33.14583,-8.28646z"></path>
                  </g>
                </g>
              </svg>
            </div> -->              <!-- <a href="#">-->
            <?php 
              session_start();
            ?>
              <a class="nav-link" href="adminLogout.php">Log Out</a>
                  
          </li>
         
        </ul>
      </div>
    </div>
  </nav>


  <!-- Page Content -->
  <div class="container2">
    <button class="btn btn-default btn-lg" name="add"></i> <a class="nav-link" href="addItems.php">Add Items</a></button>&nbsp &nbsp &nbsp 
    <button class="btn btn-default btn-lg" name="delete"></i> <a class="nav-link" href="delItems.php">Delete Items</a></button>&nbsp &nbsp &nbsp 
    <button class="btn btn-default btn-lg" name="edit info"></i> <a class="nav-link" href="editItems.php">Edit Item Info</a></button>
    <!-- <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4" id="cat">Categories</h1>
        <div class="list-group">
          <div class="dropdown">
            <div class="dropbtn"><a href="#" class="list-group-item">Women</a></div>
            <div class="dropdown-content">
              <a class="menu_item" href="index.php?catg=1 & subcatg=Saree"><span>Saree</span></a>
              <a class="menu_item" href="index.php?catg=1 & subcatg=Sandal"><span>Sandal</span></a>
              <a class="menu_item" href="index.php?catg=1 & subcatg=Jewellery"><span>Jewellery</span></a>
            </div>
          </div> 
          <div class="dropdown">
            <div class="dropbtn"><a href="#" class="list-group-item">Men</a></div>
            <div class="dropdown-content">
              <a class="menu_item" href="index.php?catg=2 & subcatg=T-shirt"><span>T-shirt</span></a>
              <a class="menu_item" href="index.php?catg=2 & subcatg=Jeans"><span>Jeans</span></a>
              <a class="menu_item" href="index.php?catg=2 & subcatg=Shoes"><span>Shoes</span></a>
            </div>
          </div> 
          <div class="dropdown">
            <div class="dropbtn"><a href="#" class="list-group-item">Kids</a></div>
            <div class="dropdown-content">
              <a class="menu_item" href="index.php?catg=3 & subcatg=Baby Apparel"><span>Baby Apparel</span></a>
              <a class="menu_item" href="index.php?catg=3 & subcatg=Girls Apparel"><span>Girls Apparel</span></a>
              <a class="menu_item" href="index.php?catg=3 & subcatg=Boys Apparel"><span>Boys Apparel</span></a>
            </div>
          </div>         
        </div>

      </div> --> 
      <!-- /.col-lg-3 -->

    <!--   <div class="col-lg-9">

  
 

    <?php
    // if(!(isset($_REQUEST['catg']))){
    //   include("home.php");
    // }else{
    //   include("category.php");
   // }
    

    // if($_REQUEST['catg']==1)
    // {
    //   if($_REQUEST['subcatg']=='Saree'){
    //     include("saree.php");
    //   }
    //   elseif ($_REQUEST['subcatg']=='Sandal') {
    //     include("sandal.php");
    //   }
    //   elseif ($_REQUEST['subcatg']=='Jewellery') {
    //     include("jewellery.php");
    //   }
    // }

    // if($_REQUEST['catg']==2)
    // {
    //   if($_REQUEST['subcatg']=='T-shirt'){
    //     include("tshirt.php");
    //   }
    //   elseif ($_REQUEST['subcatg']=='Jeans') {
    //     include("mjeans.php");
    //   }
    //   elseif ($_REQUEST['subcatg']=='Shoes') {
    //     include("mshoes.php");
    //   }
    // }

    // if($_REQUEST['catg']==3)
    // {
    //   if($_REQUEST['subcatg']=='Baby Apparel'){
    //     include("mbaby.php");
    //   }
    //   elseif ($_REQUEST['subcatg']=='Girls Apparel') {
    //     include("girl.php");
    //   }
    //   elseif ($_REQUEST['subcatg']=='Boys Apparel') {
    //     include("boy.php");
    //   }
    // }

?>

      </div> -->
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
