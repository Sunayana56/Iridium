<head>

  <!-- Custom styles for this template -->
  <link href="css/item.css" rel="stylesheet">
  
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
 
  

</head>
<body>
  <?php 
    include("config.php");
    

    $catg=$_REQUEST['catg'];

  ?>
  <!-- Page Content -->
  <div class="container">
    <div id="message"></div>
    <div class="row">
      <div class="col-lg-12">
      <h1 id="top">

        <?php
         if($_REQUEST['catg']==1)
          {
            if($_REQUEST['subcatg']=='Arduino'){
              $subcatg = 1;
              echo 'Arduino';
            }
            elseif ($_REQUEST['subcatg']=='Raspberry Pi') {
              $subcatg = 2;
              echo 'Raspberry Pi';
            }
            elseif ($_REQUEST['subcatg']=='Modules') {
              $subcatg = 3;
              echo 'Modules';
            }
           
          }

          if($_REQUEST['catg']==2)
          {
            if($_REQUEST['subcatg']=='Sensors'){
              $subcatg = 1;
              echo 'Sensors';
            }
            elseif ($_REQUEST['subcatg']=='Transistors') {
              $subcatg = 2;
              echo 'Transistors';
            }
            elseif ($_REQUEST['subcatg']=='Resistors') {
               $subcatg = 3;
              echo 'Resistors';
            }
            elseif ($_REQUEST['subcatg']=='Diodes') {
              $subcatg = 4;
             echo 'Diodes';
           }
           elseif ($_REQUEST['subcatg']=='Motors') {
            $subcatg = 5;
            echo 'Motors';
          }

          elseif ($_REQUEST['subcatg']=='Batteries') {
            $subcatg = 6;
            echo 'Batteries';
        }
        elseif ($_REQUEST['subcatg']=='Speakers') {
          $subcatg = 7;
          echo 'Speakers';
      }
    }

          if($_REQUEST['catg']==3)
          {
            if($_REQUEST['subcatg']=='Jumper Wires'){
              $subcatg = 1;
              echo 'Jumper Wires';
            }
            elseif ($_REQUEST['subcatg']=='Cables') {
              $subcatg = 2;
              echo 'Cables';
            }
            
          }
        ?>

      </h1>
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
             echo '<div class="col-lg-6 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="#"><img class="card-img-top1" src="images/'.$arr["img"].'" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="#">'.$arr["name"].'</a>
                    </h4>
                    <h5>Rs.'.$arr["price"].'</h5>
                    <!-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p> -->
                  </div>
                  <div class="card-footer p-1">
                  <form action="" class="form-submit">
                  <input type="hidden" class="pid" value="'.$arr['itemId'].'">
                  <input type="hidden" class="pname" value="'.$arr['name'].'">
                  <input type="hidden" class="pprice" value="'.$arr['price'].'">
                  <input type="hidden" class="pimage" value="'.$arr['img'].'">
                  <input type="hidden" class="pcode" value="'.$arr['product_code'].'">
                  <button class="btn btn-info btn-block addItemBtn"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                </form>
              
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
  <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
jQuery(document).ready(function(){
  $(".addItemBtn").click(function(e){
    e.preventDefault();

    var $form=$(this).closest(".form-submit"); 
    var pid=$form.find(".pid").val();
    var pname=$form.find(".pname").val();
    var pprice=$form.find(".pprice").val();
    var pimage=$form.find(".pimage").val();
    var pcode=$form.find(".pcode").val();

    $.ajax({
      url:'action.php',
      method:'post',
      data:{pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
      success:function(response){
        $("#message").html(response);
        window.scrollTo(0,0);
        load_cart_item_number();
        

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
