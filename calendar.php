<?php 

function build_calendar($month, $year){
    $mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');
//    $stmt = $mysqli->prepare("select * from bookings where MONTH(date) = ? AND YEAR(date) = ?");
//    $stmt->bind_param('ss', $month, $year);
//    $bookings = array();
//    if($stmt->execute()){
//        $result = $stmt->get_result();
//        if($result->num_rows>0){
//            while($row = $result->fetch_assoc()){
//                $bookings[] = $row['date'];
//            }
//            
//            $stmt->close();
//        }
//    }
    

	//First of all we'll create an array containing names of all days in a week
	$daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');

	//Then we'll get the first day of the month that is the argument of this function
	$firstDayOfMonth = mktime(0,0,0,$month,1,$year);

	//Now getting the number of days this month contains
	$numberDays = date('t', $firstDayOfMonth);

	//Getting some information about the first day of this month
	$dateComponents = getdate($firstDayOfMonth);

	//Getting the name of this month
	$monthName = $dateComponents['month'];

	//Getting the index value 0-6 of the first day of this month
	$dayOfWeek = $dateComponents['wday'];

	//Getting the current date
	$dateToday = date('Y-m-d');

	//Now creating the HTML table
	$calendar = "<table class='table table-bordered'>";
	$calendar.="<center><h2>$monthName $year</h2>";
	$calendar.="<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0,0,0,$month-1,1,$year))."&year=".date('Y', mktime(0,0,0,$month-1,1,$year))."'>Previous Month</a> ";
	$calendar.="<a class='btn btn-xs btn-primary' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";
	$calendar.="<a class='btn btn-xs btn-primary' href='?month=".date('m', mktime(0,0,0,$month+1,1,$year))."&year=".date('Y', mktime(0,0,0,$month+1,1,$year))."'>Next Month</a></center><br>";
	$calendar.="<tr>";

	//Creating the calendar headers
	foreach ($daysOfWeek as $day){
		$calendar.="<th class='header'>$day</th>";
	}

	$calendar.="</tr><tr>";

	//The variable $dayOfWeek will make sure that there must be only 7 columns on our table
	if($dayOfWeek > 0){
		for($k=0; $k<$dayOfWeek; $k++){
			$calendar.="<td></td>";
		}
	} 

	//Initiating the day counter
	$currentDay = 1;

	//Getting the month number
	$month = str_pad($month, 2, "0", STR_PAD_LEFT);

	while($currentDay <= $numberDays){

		//If seventh column (saturday) reached, start a new row
		if($dayOfWeek == 7){
			$dayOfWeek = 0;
			$calendar.="</tr><tr>";
		}

		$currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
		$date = "$year-$month-$currentDayRel";


		$dayname = strtolower(date('l', strtotime($date)));
		$eventNum = 0;
		$today = $date == date('Y-m-d')?"today":"";
		 if($date<date('Y-m-d')){
             $calendar.="<td><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>N/A</button>";
         }
//         elseif(in_array($date, $bookings)){
//             $calendar.="<td class='$today'><h4>$currentDay</h4> <button class='btn btn-danger btn-xs'>Already Booked</button>";
//         }
        else{
             $calendar.="<td class='$today'><h4>$currentDay</h4> <a href='book.php?date=".$date."' class='btn btn-success btn-xs'>Book</a>";
         }

		$calendar.="</td>";

		//Incrementing the counters
		$currentDay++;
		$dayOfWeek++;
	}

	//Completing the row of the last week in month, if necessary
	if($dayOfWeek != 7){
		$remainingDays = 7 - $dayOfWeek;
		for($i=0; $i<$remainingDays; $i++){
			$calendar.="<td></td>";
		}
	}

	$calendar.="</tr>";
	$calendar.="</table>";
    
	echo $calendar;
}
?>

<html>
<head>
	<title>Iridium</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		table{
			table-layout: fixed;
		}
		td{
			width: 33%;
		}
		.today{
			background: yellow;
		}
		.user{
	      margin-top: 7px;
	      padding-left: 3px;
	    }
	</style>
	
  

  

  <!-- Bootstrap core CSS -->
  <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
  
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/shop.css" rel="stylesheet">

  <!-- Javascript file for the slider -->
  <script type="text/javascript" src="css/shop.js">  </script>
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
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li> 
          <?php
            session_start(); 

            if(!isset($_SESSION['id']))
              { 
            	header("Location: login.php");
            }
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
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					$dateComponents = getdate();
					if(isset($_GET['month'])&&isset($_GET['year'])){
						$month=$_GET['month'];
						$year=$_GET['year'];
					}else{
						$month=$dateComponents['mon'];
						$year=$dateComponents['year'];
					}
					echo build_calendar($month, $year);
				?>
			</div>
		</div>
	</div>
</body>		
</html>