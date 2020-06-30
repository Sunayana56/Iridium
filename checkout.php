<?php
include("config.php");
$grand_total=0;
$allItems='';
$items=array();
$sql="SELECT CONCAT(product_name,'(',qty,')') AS ItemQty,total_price FROM cart";
$sel=mysqli_query($conn,$sql);
while($arr=mysqli_fetch_array($sel))
{
    $grand_total+=$arr['total_price'];
    $items[]=$arr['ItemQty'];

}

$allItems=implode(",",$items);

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Checkout</title>

  <!-- Bootstrap core CSS -->
  <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <!-- Custom styles for this template -->
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
      <a class="navbar-brand" href="index.php">Urban Trends</a>
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
  <div class="row justify-content-center">
  <div class="col-lg-6 px-4 pb-4" id="order">
  <h4 class="text-center text-info p-2 jumbotron">Complete your order!</h4>
  <div class="jumbotron p-3 mb-2 text-center">
  <h6 class="lead"><b>Product(s):</b><?=$allItems;?></h6>
  <h6 class="lead"><b>Delivery Charge:</b>Free</h6>
  <h5><b>Total Amount Payable:</b><?=number_format($grand_total,2)?>/-</h5>
  </div>
  <form action="" method="post" id="placeOrder">
  <input type="hidden" name="products" value="<?=$allItems;?>">
  <input type="hidden" name="grand_total" value="<?=$grand_total;?>">
  <div class="form-group">
  <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
  </div>
  <div class="form-group">
  <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
  </div>
  <div class="form-group">
  <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
  </div>
  <div class="form-group">
  <textarea name="address" class="form-control" cols="10" rows="3" placeholder="Enter Delivery Address Here..." required></textarea>
  </div>
<h6 class="text-center lead bg-light text-dark">Select Payment Mode</h6>
<div class="form-group">
<select name="pmode" class="form-control">
 <option value="" selected disabled>- Select Payment Mode-</option>
 <option value="cod"> Cash on Delivery </option>
 <option value="netbanking"> Net Banking </option>
 <option value="cards"> Debit/Credit Card </option>

 </select>
 </div>
 <div class="form-group">
  <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
  </div>

  </div>
  </div>

    
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;College E-Commerce Site 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">
jQuery(document).ready(function(){
    $("#placeOrder").submit(function(e){
        e.preventDefault();
        $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response){
            $("#order").html(response);

        }
    });
    });

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
</script>

</body>

</html>
