<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

        <header>
            <h1><center>All products</center></h1>
        </header>

        <hr>

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

         <?php get_products_in_shop_page(); ?>

         


        </div>
        <!-- /.row -->

      

    </div>
    <!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
