<?php

//establish connection to connect to the DB
//3rd field by default the pw is none for locahost, but online there will be a pw
$con = mysqli_connect("localhost", "root", "", "ofsdb"); //db name is 4th field


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
		
		echo "<li><a href='$cat_title.html'>$cat_title</a></li>";
		
	}
}

function getProducts(){
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
		$product_title = $row_cats['product_title']; // get title from the table
		$product_image = $row_products['product_image'];
		$product_desc = $row_products['product_desc'];
		$product_cat = $row_products['product_cat'];
		$product_price = $row_products['product_price'];
		$product_keywords = $row_products['product_keywords'];
		
		echo "<a href='#'>$product_title</a>";
	
	
	}

}
?>