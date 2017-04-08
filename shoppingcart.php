<!DOCTYPE html>

<?php

session_start();

include("functions/functions.php")
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OFS HomePage</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!--This is for the search bar and shopping cart-->
<style>
#box{
  border-color: white;
}

#btn{
  background-image:url(images/searchicon.png);
  background-size:100% 100%;
  width:30px;
  height:28px;
}
</style>


<body>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">


                  <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="customer_login.php">Log in</a>
                    </li>
                    <li>
                        <a href="about/aboutus.php">About Us</a>
                    </li>
                    <li>
                        <a href="contact/contact.html">Contact Us</a>
                    </li>

                    <li>
                     <div id="form">
                        <form method="get" action="results.php" enctype="multipart/form-data">
                          <input type="text" name="user_query" placeholder="Search a product" / >
                          <input type="submit" name="search" value="Search"/>
                      </form>
                    </li>
                    </li>

                    <li>
                          <a href="shoppingcart.php">Cart <span class="glyphicon glyphicon-shopping-cart"> <?php total_items(); ?>

                          Price: <?php total_price();  ?>


                          </span></a>



                  </li>
                </ul>

            <!-- /.navbar-collapse -->
        </div>



        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

      <?php cart(); ?>

        <div class="row">

            <div class="col-md-3">
                <p><center><img src = "images/logo.png" style = "width:200px;height:100px;"></center></p>
                <center><p class="lead">Products</p></center>
                <?php getCats(); ?>

                <!--
                <div class="list-group">
                    <?php getCats(); ?>
                    <a href="fruits.html" class="list-group-item">Fruits</a>
                    <a href="vegetables.html" class="list-group-item">Vegetables</a>
                    <a href="dairy.html" class="list-group-item">Dairy</a>
                    <a href="nutsAndSeeds.html" class="list-group-item">Nuts and Seeds</a>
                    <a href="meats.html" class="list-group-item">Meats</a>
                    <a href="snacks.html" class="list-group-item">Snacks</a>
                </div>
              -->
            </div>

                <!-- Title -->
                     <div class="row">

                      <br>

                      <form action ="" method="post" enctype="multipart/form-data">

                        <table align ="center" width="700" bgcolor="skyblue">




                              <tr align = "center">
                                <th>Remove</th>
                                <th>Product (S)</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                              </tr>

                              <?php

                              $total = 0;

                      global $con;

                      $ip = getIp();

                      $sel_price = "select * from cart where ip_add='$ip'";

                      $run_price = mysqli_query($con, $sel_price);

                      while($p_price=mysqli_fetch_array($run_price)){

                        $product_id = $p_price['p_id'];

                        $product_price = "select * from products where product_id='$product_id'";


                        $run_product_price = mysqli_query($con, $product_price);

                        while($pp_price = mysqli_fetch_array($run_product_price)){

                          $product_price = array($pp_price['product_price']);

                          $product_title = $pp_price['product_title'];

                          $product_image = $pp_price['product_image'];

                          $single_price =  $pp_price['product_price'];

                          $values = array_sum($product_price);

                          $total += $values;


                              ?>

                              <tr align="center">

                                  <td><input type="checkbox" name ="remove[]" value="<?php echo $product_id;?>"/></td>
                                   <td><?php echo $product_title; ?><br>
                                    <img src="images/<?php echo $product_image;?>" width="60" height="60"/>
                                    </td>
                                    <td><input type="text" size="10" name="qty" value="<?php echo $_SESSION['qty'];?>"/></td>
                                     <td><?php echo "$" . $single_price; ?></td>

                                     <?php

                                     if(isset($_POST['update_cart'])){

                                      $qty = $_POST['qty'];

                                      $update_qty = "update cart set qty='$qty'";

                                      $run_qty = mysqli_query($con, $update_qty);

                                      $_SESSION['qty']=$qty;

                                      $total = $total* $qty;

                                     }

                                     ?>



                              </tr>




                              <?php } } ?>

                              <tr >
    <td colspan ="4" align="right"><b>Sub Total: &nbsp; </b></td>
    <td colspan ="4"><?php echo "$" . $total;?></td>

</tr>


        <tr align ="center">

          <td colspan ="2"><input type="submit" name="update_cart" value="Update Cart"/> </td>
          <td><input type="submit" name="continue" value="Continue Shopping"/></td>
          <td><button>Checkout<a href="checkout.php" style = "text-decoration: none; color= black;"></button></a></td>

        </tr>

                          </table>

                       </form>

<?php

function updatecart(){

  global $con;

  $ip = getIp();

  if(isset($_POST['update_cart'])){


    foreach($_POST['remove'] as $remove_id){

      $delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";

      $run_delete = mysqli_query($con, $delete_product);

      if($run_delete){

        echo "<script>window.open('shoppingcart.php','_self')</script>";

      }

    }

  }

if(isset($_POST['continue'])){

echo "<script>window.open('index.php','_self')</script>";

}

}
?>



                      <div class="row">


                </div>

            </div>

        </div>

    </div>




    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <center><p>CS160 &copy; OFS Team One 2017</p></center>
                </div>
                <div>
                  <center><img src = "images/heart.png" style = "width:90px;height:80px;"></center>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
