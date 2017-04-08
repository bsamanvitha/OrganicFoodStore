<!DOCTYPE html>
<?php
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

<!--This is css for the search bar-->
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
                        <a href="customer_login.php">Sign in</a>
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

                    <li>
                          <a href="shoppingcart.html">Cart <span class="glyphicon glyphicon-shopping-cart"></span></a>

                  </li>



                </ul>

            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p><center><img src = "images/logo.png" style = "width:200px;height:100px;"></center></p>
                <center><p class="lead">Products</p></center>
                <?php getCats(); ?>
            </div>

            <div class="col-md-9">

                <!-- Title -->
                     <div class="row">
                           <div class="col-sm-4 col-lg-4 col-md-4">
                         </div>
                     </div>
                      <center><h3>All Products</h3></center>
                      <br></br>
                      <div class="row">

                      <?
                      //local variable always created w/ the $ sign
                      //written an sql query
                      //if search then create new var $search_query from user_query
                      if(isset($_GET['search'])){
                        $search_query = $_GET['user_query'];

  //get products that match with product_keywords from the product and the inputted search word in the search button
  $get_products = "select * from products where product_keywords like '%$search_query%'";


  //run this query
  $run_products = mysqli_query($con, $get_products); //2nd field: function that has the query

  //will retrieve all of the records from the table
  //we are fetching this query run_cats using mysqli_fetch_array
  //we are saving the data to the local variable row_cats
  while($row_products=mysqli_fetch_array($run_products)){
    $product_id = $row_products['product_id']; //get the id from the table
    $product_title = $row_products['product_title']; // get title from the table
    $product_image = $row_products['product_image'];
    $product_desc = $row_products['product_desc'];
    $product_cat = $row_products['product_cat'];
    $product_price = $row_products['product_price'];
    $product_keywords = $row_products['product_keywords'];

    echo "
      <div class='col-sm-4 col-lg-4 col-md-4'>
                              <div class='thumbnail'>
                                  <img src='images/$product_image' style = 'width:180px;height:190px;''>
                                  <div class='caption'>
                                      <h4><center><a href='desc.php?product_id=$product_id'>$product_title</a></center></h4>
                                      <p><center>$$product_price</center></p>
                                      <p><center><a href='index.php?add_cart=$product_id'><class='btn btn-primary'>Add to Cart</a></center></p>
                                  </div>
                              </div>
                          </div>

    ";
  }
}
?>




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
