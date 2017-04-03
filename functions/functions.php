<?php

//establish connection to connect to the DB
//3rd field by default the pw is none for locahost, but online there will be a pw
$con = mysqli_connect("localhost", "root", "", "ofsdb"); //db name is 4th field



function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
} 


function cart(){

	if(isset($_GET['add_cart'])){

		global $con;

		$ip = getIp();

		$product_id  =   $_GET['add_cart'];

		$check_product = "select * form cart where ip_add='$ip' AND p_id='$product_id'"; 

		$run_check =  mysqli_query($con, $check_product);

		if(mysqli_num_rows($run_check)>0){

			echo "";
		}
		else {

			$insert_product = "insert into cart (p_id, ip_add) values ('$product_id','$ip')";

			$run_product = mysqli_query($con, $insert_product);

			echo "<script>window.open('index.php','_self')</script>";

		}

	}
}

	//getting total added items

	function total_items(){


		if(isset($_GET['add_cart'])){

			global $con;

			$ip = getIp();

			$get_items = "select * from cart where ip_add='$ip'";

			$run_items = mysqli_query($con, $get_items);

			$count_items = mysqli_num_rows($run_items);

		}

			else{

			global $con;

			$ip = getIp();

			$get_items = "select * from cart where ip_add='$ip'";

			$run_items = mysqli_query($con, $get_items);

			$count_items = mysqli_num_rows($run_items);
			}
			echo $count_items;
		}
	
//getting the total price of item in the cart

		function total_price(){

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

					$values = array_sum($product_price);

					$total +=$values;

				}
			}

			echo "$" . $total;

		}


 //getting the categories; test method; WON'T BE USED
 function getCats(){
	global $con; //will make it work inside this function

	//local variable always created w/ the $ sign
	//written an sql query
	$get_cats = "select * from categories";
	//run this query
	$run_cats = mysqli_query($con, $get_cats); //2nd field: function that has the query

	//will retrieve all of the records from the table
	//we are fetching this query run_cats using mysqli_fetch_array
	//we are saving the data to the local variable row_cats
	while($row_cats=mysqli_fetch_array($run_cats)){
		$cat_id = $row_cats['cat_id']; //get the id from the table
		$cat_title = $row_cats['cat_title']; // get title from the table
		
		echo 
		"<div class='list-group'>
			<a href='$cat_title.php' class='list-group-item'>$cat_title</a>
		</div>";
	}
}


function getVegetables(){
	global $con; //will make it work inside this function

	//local variable always created w/ the $ sign
	//written an sql query
	$get_products = "select * from products where product_cat=1";
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
                                      <h4><center><a href='#'>$product_title</a></center></h4>
                                      <p><center>$$product_price</center></p>
                                      <a href='index.php'><button style='float:right'>Add to Cart</button></a>
                                      <p><center><a href='index.php?add_cart=$product_id'><class='btn btn-primary'>Add to Cart</a></center></p>
                              </div>
                          </div>


		";
	}
}


function getFruits(){
	global $con; //will make it work inside this function

	//local variable always created w/ the $ sign
	//written an sql query
	$get_products = "select * from products where product_cat=2";
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
                                      <h4><center><a href='#'>$product_title</a></center></h4>
                                      <p><center>$$product_price</center></p>
                                      <p><center><a href='index.php?add_cart=$product_id'><class='btn btn-primary'>Add to Cart</a></center></p>
                                  </div>
                              </div>
                          </div>


		";
	}
}


function getDairy(){
	global $con; //will make it work inside this function

	//local variable always created w/ the $ sign
	//written an sql query
	$get_products = "select * from products where product_cat=3";
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
                                      <h4><center><a href='#'>$product_title</a></center></h4>
                                      <p><center>$$product_price</center></p>
                                      <p><center><a href='index.php?add_cart=$product_id'><class='btn btn-primary'>Add to Cart</a></center></p>
                                  </div>
                              </div>
                          </div>


		";
	}
}

function getNutsAndSeeds(){
	global $con; //will make it work inside this function

	//local variable always created w/ the $ sign
	//written an sql query
	$get_products = "select * from products where product_cat=4";
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
                                      <h4><center><a href='#'>$product_title</a></center></h4>
                                      <p><center>$$product_price</center></p>
                                      <p><center><a href='index.php?add_cart=$product_id'><class='btn btn-primary'>Add to Cart</a></center></p>
                                  </div>
                              </div>
                          </div>


		";
	}
}


function getMeats(){
	global $con; //will make it work inside this function

	//local variable always created w/ the $ sign
	//written an sql query
	$get_products = "select * from products where product_cat=5";
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
                                      <h4><center><a href='#'>$product_title</a></center></h4>
                                      <p><center>$$product_price</center></p>
                                      <p><center><a href='index.php?add_cart=$product_id'><class='btn btn-primary'>Add to Cart</a></center></p>
                                  </div>
                              </div>
                          </div>


		";
	}
}

function getSnacks(){
	global $con; //will make it work inside this function

	//local variable always created w/ the $ sign
	//written an sql query
	$get_products = "select * from products where product_cat=6";
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
                                      <h4><center><a href='#'>$product_title</a></center></h4>
                                      <p><center>$$product_price</center></p>
                                      <p><center><a href='index.php?add_cart=$product_id'><class='btn btn-primary'>Add to Cart</a></center></p>
                                  </div>
                              </div>
                          </div>


		";
	}
}

function getAllProducts(){
	global $con; //will make it work inside this function

	//local variable always created w/ the $ sign
	//written an sql query
	$get_products = "select * from products";
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
                                      <h4><center><a href='#'>$product_title</a></center></h4>
                                      <p><center>$$product_price</center></p>
                                      <p><center><a href='index.php?add_cart=$product_id'><class='btn btn-primary'>Add to Cart</a></center></p>
                                  </div>
                              </div>
                          </div>

		";
	}

}



function getRandomProducts(){
	global $con; //will make it work inside this function

	//local variable always created w/ the $ sign
	//written an sql query
	$get_products = "select * from products order by RAND() LIMIT 0,6";
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
                                      <h4><center><a href='#'>$product_title</a></center></h4>
                                      <p><center>$$product_price</center></p>
                                       <p><center><a href='index.php?add_cart=$product_id'><class='btn btn-primary'>Add to Cart</a></center></p>
                                  </div>
                              </div>
                          </div>

		";
	}

}
?>