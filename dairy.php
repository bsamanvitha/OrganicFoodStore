<!DOCTYPE html>

<?php
include(functions/functions.php)
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
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="signIn.html">Sign in</a>
                    </li>
                    <li>
                        <a href="aboutUs.html">About Us</a>
                    </li>
                    <li>
                        <a href="contact/contact.html">Contact Us</a>
                    </li>

                    <li>
                      <div class = "navbar-form"
                      <form>
                          <input type="text" placeholder="Search..." id='box'><input type="submit" value=" " id="btn">
                      </form>
                    </div>
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
                <div class="list-group">
                    <a href="fruits.html" class="list-group-item">Fruits</a>
                    <a href="vegetables.html" class="list-group-item">Vegetables</a>
                    <a href="dairy.html" class="list-group-item">Dairy</a>
                    <a href="nutsAndSeeds.html" class="list-group-item">Nuts and Seeds</a>
                    <a href="meats.html" class="list-group-item">Meats</a>
                    <a href="snacks.html" class="list-group-item">Snacks</a>
                </div>
            </div>

            <div class="col-md-9">

                <!-- Title -->
                     <div class="row">
                           <div class="col-sm-4 col-lg-4 col-md-4">
                         </div>
                     </div>
                      <center><h3>Diary</h3></center>
                      <br></br>
                      <div class="row">
                          <div class="col-sm-4 col-lg-4 col-md-4">
                              <div class="thumbnail">
                                  <img src="images/milk.png" style = "width:180px;height:190px;">
                                  <div class="caption">
                                      <h4><center><a href="#">Milk</a></center></h4>
                                      <p><center>$1.60</center></p>
                                      <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                                  </div>
                              </div>
                          </div>


                    <div class="col-sm-4 col-lg-4 col-md-4">
                              <div class="thumbnail">
                             <img src="images/creamcheese.png" style = "width:180px;height:190px;">
                             <div class="caption">
                                 <h4><center><a href="#">Cream Cheese</a></center></h4>
                                 <p><center>$1.25</center></p>
                                 <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                             </div>
                         </div>
                     </div>

                      <div class="col-sm-4 col-lg-4 col-md-4">
                           <div class="thumbnail">
                               <img src="images/chocomilk.png" style = "width:180px;height:190px;">
                               <div class="caption">
                                  <h4><center><a href="#">Chocolate Milk</a></center></h4>
                                  <p><center>$1.50</center></p>
                                   <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                               </div>
                           </div>
                       </div>

                       <div class="col-sm-4 col-lg-4 col-md-4">
                           <div class="thumbnail">
                               <img src="images/icecream.png" style = "width:180px;height:190px;">
                               <div class="caption">
                                   <h4><center><a href="#">Ice Cream</a></center></h4>
                                   <p><center>$0.75</center></p>
                                   <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                               </div>
                           </div>
                       </div>


                       <div class="col-sm-4 col-lg-4 col-md-4">
                           <div class="thumbnail">
                               <img src="images/eggs.png" style = "width:180px;height:190px;">
                               <div class="caption">
                                   <h4><center><a href="#">Eggs</a></center></h4>
                                   <p><center>$0.10 /each</center></p>
                                   <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                               </div>
                           </div>
                       </div>

                       <div class="col-sm-4 col-lg-4 col-md-4">
                           <div class="thumbnail">
                               <img src="images/cheddar.png" style = "width:180px;height:190px;">
                               <div class="caption">
                                   <h4><center><a href="#">Cheddar Cheese</a></center></h4>
                                   <p><center>$1.20 /lb</center></p>
                                   <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                               </div>
                           </div>
                       </div>

                       <div class="col-sm-4 col-lg-4 col-md-4">
                           <div class="thumbnail">
                               <img src="images/butter.png" style = "width:180px;height:190px;">
                               <div class="caption">
                                   <h4><center><a href="#">Butter</a></center></h4>
                                   <p><center>$0.40</center></p>
                                   <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                               </div>
                           </div>
                       </div>


                       <div class="col-sm-4 col-lg-4 col-md-4">
                           <div class="thumbnail">
                               <img src="images/fetacheese.png" style = "width:180px;height:190px;">
                               <div class="caption">
                                   <h4><center><a href="#">Feta Cheese</a></center></h4>
                                   <p><center>$0.75</center></p>
                                   <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                               </div>
                           </div>
                       </div>

                       <div class="col-sm-4 col-lg-4 col-md-4">
                           <div class="thumbnail">
                               <img src="images/yogurtStony.png" style = "width:180px;height:190px;">
                               <div class="caption">
                                   <h4><center><a href="#">Stony Yogurt</a></center></h4>
                                   <p><center>$0.40</center></p>
                                   <p><center><a href="#" class="btn btn-primary">Add to Cart</a></center></p>
                               </div>
                           </div>
                       </div>
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
