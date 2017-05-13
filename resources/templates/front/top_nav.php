  <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <img src = "../resources/uploads/logo.png" style = "width:120px;height:60px;"></a>

                <!--<a class="navbar-brand" href="index.php">Home</a>-->

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="index.php">Home</a>
                    </li>

                    <li>
                        <a href="shop.php">Products</a>
                    </li>



                    <!--
                    <li>
                        <a href="login.php">Log In</a>
                    </li>
                    -->

                     <li >
                        <a href="contact.php">Contact Us</a>
                    </li>

                     <li >
                        <a href="about.php">About Us</a>
                    </li>


                    <li>
                        <a href="checkout.php">Shopping Cart</a>
                    </li>


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                              <?php get_categories(); ?>
                            </ul>
                    </li>


                    <li>
                    <div id="form">
                          <form method="get" action="results.php" enctype="multipart/form-data">
                            <input type="text" name="user_query" placeholder="Search a product" / >
                            <input type="submit" name="search" value="Search"/>
                        </form>
                    </li>
                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
