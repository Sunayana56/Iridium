<?php
session_start();
include("config.php");

// if(!isset($_SESSION['id']))
//               { 
//               header("Location: login.php");
// }
if(isset($_POST["pid"]))
{
    $pid=$_POST["pid"];
    $pname=$_POST["pname"];
    $pprice=$_POST["pprice"];
    $pimage=$_POST["pimage"];
    $pcode=$_POST["pcode"];
    $pqty=1;


    $result = mysqli_query($conn,"SELECT product_code FROM cart WHERE product_code='".$pcode."'");
    $row  = mysqli_fetch_array($result);
    $code=$row['product_code'];

  if(!$code) {

    $query="INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES (NULL, '$pname', '$pprice', '$pimage', '$pqty', '$pprice', '$pcode');";
    $res=mysqli_query($conn,$query);

        echo '<div class="alert alert-success alert-dismissible mt-2">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Item added to your cart!</strong>
      </div>';
    
    }
    else{
        
      echo '<div class="alert alert-danger alert-dismissible mt-2">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>Item already added to your cart!</strong>
    </div>';

    }
}

if(isset($_GET['cartItem'])&& isset($_GET['cartItem'])=='cart_item')
{
  $result = mysqli_query($conn,"SELECT * FROM cart");
  $rows = mysqli_num_rows($result);

  echo $rows;
}

if(isset($_GET['remove']))
{
  $id=$_GET['remove'];
  mysqli_query($conn,"DELETE FROM cart WHERE id='".$id."'");
 

  $_SESSION['showAlert']='block';
  $_SESSION['message']='Item removed from the cart!';
  header('location:cart.php');


}

if(isset($_GET['clear']))
{
  mysqli_query($conn,"DELETE FROM cart");
  $_SESSION['showAlert']='block';
  $_SESSION['message']='All items removed from the cart!';
  header('location:cart.php');
}

if(isset($_POST['qty']))
{
  $qty=$_POST['qty'];
  $pid=$_POST['pid'];
  $pprice=$_POST['pprice'];

  $tprice=$qty*$pprice;
  mysqli_query($conn,"UPDATE 'cart' SET qty='".$qty."',total_price='".$tprice."' WHERE id='".$pid."'");
}


if(isset($_POST['action']) && isset($_POST['action']) == 'order')
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $products = $_POST['products'];
  $grand_total = $_POST['grand_total'];
  $address = $_POST['address'];
  $pmode = $_POST['pmode'];

  $data = '';
  $stmt="INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES (NULL, '$name', '$email', '$phone', '$address', '$pmode', '$products', '$grand_total');";
  $res=mysqli_query($conn,$stmt);

  mysqli_query($conn,"DELETE FROM cart");
  
  
  $data.='<div class="text-center bg-light text-dark">
  <h1 class="display-4 mt-2 text-danger">Thank You!</h1>
  <h2 class="text-success">Your Order Has Been Placed Successfully!</h2>
  <h4 class="bg-danger text-light rounded" p-2>Items Purchased:'.$products.'</h4>
  <h4>Your Name:'.$name.'</h4>
  <h4>Your E-Mail:'.$email.'</h4>
  <h4>Your Phone:'.$phone.'</h4>
  <h4>Total Amount Paid:'.number_format($grand_total,2).'</h4>
  <h4>Payment Mode:'.$pmode.'</h4>
  </div>';

  echo $data;
}
?>