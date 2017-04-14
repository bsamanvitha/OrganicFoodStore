<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header>
            <h1>Shop</h1>
        </header>

        <hr>

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

<?php 

	if(isset($_GET['search'])){
           $search_query = $_GET['user_query'];

$query = query(" SELECT * FROM products WHERE product_keywords like '%$search_query%'");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/{$product_image}" style = 'width:180px;height:190px;'>
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>{$row['product_description']};</p>
                    
                        <center><a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-success"><span class="glyphicon glyphicon-shopping-cart gi-2x" aria-hidden="true"></span></a> <a href="item.php?id={$row['product_id']}" class="btn btn-info"><span class="glyphicon glyphicon-info-sign gi-2x" aria-hidden="true"></span></a></center>
        
                        <style>
        .gi-2x{font-size: 2em;}
        </style>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;
}

        }
?>


        </div>
        <!-- /.row -->

      

    </div>
    <!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
