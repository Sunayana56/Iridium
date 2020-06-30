
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
          <li class="nav-item">
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
            <a class="nav-link active" href="cart.php"><i class="fa fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
        <div style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert'];}else{echo 'none';}unset($_SESSION['showAlert']);?>" class="alert alert-success alert-dismissible mt-3">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];}unset($_SESSION['showAlert']);?></strong>
            </div>
            <div class="table-responsive-mt-2">
                <table class="table table-bothered table-striped table-dark text-center">
                <thead>
                    <tr>
                        <td colspan="7">
                        <h4 class="text-center text-info m-0">Products in your cart!</h4>
                        
                        </td>
                        
                    </tr>
                    <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th><a href="action.php?clear=all" class="badge-danger badge p-" onclick="return confirm('Are you sure you want to clear your cart?');"><i class="fa fa-trash"></i>&nbsp;&nbsp;Clear Cart</a></th>
                    
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    include("config.php");
                    $sql="SELECT * FROM cart";
                    $result=mysqli_query($conn,$sql);
                    $grand_total=0;
                    while($row=mysqli_fetch_array($result)):
                    ?>
                    <tr>
                    <td><?=$row['id']?></td>
                    <input type="hidden" class="pid" value="<?=$row['id']?>">
                    <td><img src="images/<?=$row['product_image']?>" width="50"></td>
                    <td><?=$row['product_name']?></td>
                    <td><i class="fa fa-inr"></i>&nbsp;&nbsp;<?=number_format($row['product_price'],2);?></td>
                    <input type="hidden" class="pprice" value="<?=$row['product_price']?>">
                    <td><input type="number" class="form-control itemQty" value="<?=$row['qty']?>" style=width:75px;></td>
                    <td><i class="fa fa-inr"></i>&nbsp;&nbsp;<?=number_format($row['total_price'],2);?></td>
                    <td><a href="action.php?remove=<?=$row['id']?>" class="text-danger lead" onclick="return confirm('Are you sure you want to remove this item?');"><i class="fa fa-trash"></i></td>
                    </tr>
                    <?php $grand_total+=$row['total_price'];?>
                    <?php endwhile;?>
                    <tr>
                    <td colspan="3">
                    <a href="index.php" class="btn btn-success"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Continue Shopping</a>
                    </td>
                    <td colspan="2"><b>Grand Total</b></td>
                    <td><b><i class="fa fa-inr"></i>&nbsp;&nbsp;<?=number_format($grand_total,2);?></b></td>
                    <td><a href="checkout.php" class="btn btn-info <?=($grand_total>1)?"":"disabled";?>"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;Checkout</a></td>
                    </tr>
                    </tbody>
                </table>
  
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

$(".itemQty").on('change',function(){
var $el=$(this).closest('tr');

var pid=$el.find(".pid").val();
var pprice=$el.find(".pprice").val();
var qty=$el.find(".itemQty").val();
location.reload(true);

$.ajax({
    url:'action.php',
    method:'post',
    cache: false,
    data:{qty:qty,pid:pid,pprice:pprice},
    success:function(response){
        
        console.log(response);
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
