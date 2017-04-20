<?php
echo '<body>';
require_once("../resources/config.php");

include(TEMPLATE_FRONT . DS . "header.php");


   echo 
    '<div class="container">

        <div class="row">';

          include(TEMPLATE_FRONT . DS . "side_nav.php");

          echo '
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

                    include(TEMPLATE_FRONT . DS . "slider.php")

                    </div>

                </div>

                 -->


                
                <div class="row">

                    

                    <h1>Shop</h1>

                      <br></br>';
                  

                    get_products();

                echo '</div>

            </div>

        </div>

    </div>

</body>
    <!-- /.container -->';
include(TEMPLATE_FRONT . DS . "footer.php");


?>


