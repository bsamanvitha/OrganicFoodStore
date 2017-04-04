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
                        <a href="signIn.php">Sign in</a>
                    </li>
                    <li>
                        <a href="aboutus.php">About Us</a>
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
                <?php getCats(); ?>
            </div>

            <div class="col-md-9">

                <!-- Title -->
                     <div class="row">
                           <div class="col-sm-4 col-lg-4 col-md-4">
                         </div>
                     </div>
                      <center><h3>Vegetables</h3></center>
                      <br></br>
                      <div class="row">


                          <?php getVegetables(); ?>
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
