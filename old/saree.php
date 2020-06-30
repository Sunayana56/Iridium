<head>

  <!-- Custom styles for this template -->
  <link href="css/item.css" rel="stylesheet">

</head>
<body>
  <?php 
    include("config.php");

    $catg=$_REQUEST['catg'];
    $subcatg=1;
  ?>
  <!-- Page Content -->
  <div class="container">
    
    <div class="row">
      <div class="col-lg-12">
      <h1 id="top">Saree</h1>
       </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-12">

     
        <div class="row">
        <?php

           $sql="SELECT * FROM `items` WHERE catg = ".$catg." AND subcatg = ".$subcatg;
           $sel=mysqli_query($conn,$sql);
            while($arr=mysqli_fetch_array($sel))
           {
              $i=$arr["itemNo"]; 
              //echo $i;
              echo '<div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top1" src="css/'.$arr["img"].'" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">'.$arr["name"].'</a>
                    </h4>
                    <h5>Rs.'.$arr["price"].'</h5>
                    <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p> -->
                  </div>
                  <div class="card-footer">';
                  
              echo '<small class="text-muted">';
              switch ($arr["ratings"]) {
                case 1:
                  echo '&#9733; &#9734; &#9734; &#9734; &#9734;';
                  break;
                case 2:
                  echo '&#9733; &#9733; &#9734; &#9734; &#9734;';
                  break;
                case 3:
                  echo '&#9733; &#9733; &#9733; &#9734; &#9734;';
                  break;
                case 4:
                  echo '&#9733; &#9733; &#9733; &#9733; &#9734;';
                  break;
                case 5:
                  echo '&#9733; &#9733; &#9733; &#9733; &#9733;';
                  break;

              }
              echo '</small>
                  </div>
                </div>
              </div>';
            
          }
          ?>


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


</body>

</html>
