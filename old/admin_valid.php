  <?php

// $con = mysqli_connect('localhost', 'root','');
// mysqli_select_db($con, 'project');


// $email = $_POST['email'];
// $pass = $_POST['pass'];

// $s = "select * from sign_up_details where email='$email' && pass='$pass' && activated='1'";
// $row = mysqli_fetch_assoc($s);


// $result = mysqli_query($con, $s);
// $num = mysqli_num_rows($result);

// if($num == 1){
//  $_SESSION['fname'] = $row['fname'];
//  header('location:welcome.php');
// }else{
//  header('location:login.php');
// }

  


    $username = $_POST['username'];
    $pass = $_POST['pass'];
    if(count($_POST)>0) {
    $con = mysqli_connect('localhost','root','','online_shop') or die('Unable To connect');
    $result = mysqli_query($con,"SELECT * FROM admin_details WHERE user_name='$username' && password ='$pass'");
    $num = mysqli_num_rows($result);
    if($num == 1) {
      header("Location:adminDash.php");
    } else {
      $msg = "Invalid Username or Password!";
      echo $msg;
      header("Location:adminLogin.php");
    }
    }
  
  
?>