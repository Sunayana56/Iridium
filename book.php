<?php
session_start();
$user_id=$_SESSION['id'];
$mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');
if(isset($_GET['date'])){
    $date = $_GET['date'];
    $stmt = $mysqli->prepare("select * from bookings where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            
            $stmt->close();
        }
    }
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $timeslot = $_POST['timeslot'];
    $stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot = ?");
    $stmt->bind_param('ss', $date, $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            $msg ="<div class='alert alert-danger'>Already Booked</div>";
        }else{
            $stmt = $mysqli->prepare("INSERT INTO bookings (user_id, name, email, date, timeslot) VALUES (?,?,?,?,?)");
            $stmt->bind_param('sssss', $user_id, $name, $email, $date, $timeslot);
            $stmt->execute();
            $msg ="<div class='alert alert-success'>Booking Successfull</div>";
            $bookings[]=$timeslot;
            $stmt->close();
            $mysqli->close();
        }
    }
  
}

$duration = 120;
$cleanup = 0;
$start = "09:00";
$end="19:00";

function timeslots($duration, $cleanup, $start, $end){
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();
    
    for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if($endPeriod>$end){
            break;
        }
        $slots[] = $intStart->format("H:iA")."-".$endPeriod->format("H:iA");
    }
    
    return $slots;
}
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iridum</title>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="/css/main.css"> -->

  <!-- Custom styles for this template -->
  <link href="css/shop.css" rel="stylesheet">
  
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
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li> 
                  
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
          ?>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    
    <div class="container">
        <h1 class="text-center">Book for Date:  <?php echo date('m/d/Y', strtotime($date)); ?></h1><hr>
        <div class="row">
            <div class="col-md-12">
                <?php echo isset($msg)?$msg:""; ?>
            </div>
<!--
            <div class="col-md-6 col-md-offset-3">
               <?php # echo isset($msg)?$msg:''; ?>
                <form action="" method="post">
                   <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </form>
            </div>
-->
       <?php
            $timeslots = timeslots($duration, $cleanup, $start, $end);
            foreach($timeslots as $ts){
        ?>
        <div class="col-md-2">
            <div class="form-group">
                <?php if(in_array($ts, $bookings)){ ?>
                
                <button class="btn btn-danger" ><?php echo $ts; ?></button>
                <?php }else{ ?>
                <button class="btn btn-success book" date-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
        </div>
    </div>

    <div id="myModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Booking:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="row">
                <div class="col-md-12">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Timeslot</label>
                            <input required type="text" readonly name="timeslot" id="timeslot" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">
                                Name
                            </label>
                            <input required type="text"  name="name" id="name" class="form-control" value="<?php echo $_SESSION["fname"].' '.$_SESSION["lname"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">
                                Email
                            </label>
                            <input required type="email"  name="email" id="email" class="form-control" value="<?php echo $_SESSION["email"]; ?>">
                        </div>
                        <div class="form-group pull-right">
                            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <script>
        $(".book").click(function(){
            var timeslot = $(this).attr('date-timeslot');
            $("#slot").html(timeslot);
            $("#timeslot").val(timeslot);
            $("#myModal").modal("show");
        })
    </script>
  </body>

</html>
