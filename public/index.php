

<body>
<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

          <?php include(TEMPLATE_FRONT . DS . "side_nav.php") ?>


          <!--slider   -->

                  <div class="row carousel-holder">

                      <div class="col-md-12">
                          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000">
                              <ol class="carousel-indicators">
                                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                  <div class="item active">
                                      <img class="slide-image" src="../resources/uploads/slideImage1.png">
                                  </div>
                                  <div class="item">
                                      <img class="slide-image" src="../resources/uploads/slideImage2.png">
                                  </div>
                                  <div class="item">
                                      <img class="slide-image" src="../resources/uploads/slideImage3.png">
                                  </div>
                              </div>
                              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left"></span>
                              </a>
                              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right"></span>
                              </a>
                          </div>
                      </div>

<br></br>

              


            <div class="container-fluid">

                <!--

                <div class="row carousel-holder">

                    <div class="col-md-12">

                    <?php include(TEMPLATE_FRONT . DS . "slider.php") ?>

                    </div>

                </div>

                 -->


                
                <div class="row">

                    
                    <br></br> 

                    <h1>Shop</h1>

                      <br></br>
                  

                    <?php get_products(); ?>

                </div>

            </div>

        </div>

    </div>

</body>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>

<style>
        body {
            background-image: url('https://www.toptal.com/designers/subtlepatterns/patterns/ep_naturalwhite.png');
    		background-repeat: repeat;
        }
    </style>
