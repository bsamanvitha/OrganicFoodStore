<!DOCTYPE>

<?php
	include("includes/db.php");
?>

<html>
	<head>
		<title>Inserting Product</title>
		<!--automatically targets the text area field!-->
		<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
  		<script>tinymce.init({ selector:'textarea' });</script>
	</head>
<body bgcolor="skyblue">


	<form action="insert_product.php" method="post" enctype=multipart/form-data">
		<table align="center" width="700" border="2" bgcolor="yellow">
		
			<tr align="center">
				<td colspan="8"><h2>Insert New Post Here</h2></td>
			</tr>
			<tr>
				<td align="center">Product Title:</td>
				<td><input type="text" name="product_title" size="60" required/></td>
			</tr>
			<tr>
				<td align="center">Product Category:</td>
				<td>
				<select name=""product_cat" required>
					<option>Select a Category</option>
				<!--display existing categories-->
				<?php
				
					$get_cats = "select * from categories";
					//run this query
					$run_cats = mysqli_query($con, $get_cats); //2nd field: function that has the query

					//will retrieve all of the records from the table
					//we are fetching this query run_cats using mysqli_fetch_array
					//we are saving the data to the local variable row_cats
					while($row_cats = mysqli_fetch_array($run_cats)){
						$cat_id = $row_cats['cat_id']; //get the id from the table
						$cat_title = $row_cats['cat_title']; // get title from the table
		
						echo "<option value='$cat_id'>$cat_title</option>"; //need value; pass the cateory ID to this select name 'product_cat'
	
	
					}
				
				?>
				</select>
				
				</td>
			</tr>
			<tr>
				<td align="center">Product Price:</td>
				<td><input type="text" name="product_price"/></td>
			</tr>
			<tr>
				<td align="center">Product Description:</td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
			<tr>
				<td align="center">Product Image:</td>
				<td><input type="file" name="product_image"/></td>
			</tr>
			<tr>
				<td align="center">Product Keywords:</td>
				<td><input type="text" name="product_keywords" size="50"/></td>
			</tr>
			
			<tr align="center">
				<td colspan="8"><input type="submit" name="insert_post" value="Insert Now"/></td>
			</tr>
		
		</table>

</body>
</html>
<?php
	//isset means if something is clicked, etc. like the submit button
	//insert post using post method --> submit button name="insert_post"
	//if this particular SUBMIT button is clicked
	if(isset($_POST['insert_post'])){
		//setting values in database to submitted field values
		$product_title = (isset($_POST['product_title']) ? $_POST['product_title'] : null);
		$product_cat = (isset($_POST['product_cat']) ? $_POST['product_cat'] : null);
		$product_price = (isset($_POST['product_price']) ? $_POST['product_price'] : null);
		$product_desc = (isset($_POST['product_desc']) ? $_POST['product_desc'] : null);
		$product_keywords = (isset($_POST['product_keywords']) ? $_POST['product_keywords'] : null);
	
		//need an if statement to handle error statement (doesn't matter, but make cleaner)
		if(isset($_FILES['product_image']) && count($_FILES['product_image']['error']) == 1 && $_FILES['product_image']['error'][0] > 0){
   		 //file not selected
		} else if(isset($_FILES['product_image'])){ //this is just to check if isset($_FILE). Not required.
   		 //file selected
   			$product_image = $_FILES['product_image']['name'];
			$product_image_tmp = $_FILES['product_image']['tmp_name'];
		}
	
		//get the image from the field; using _FILE, not _POST
		//$product_image = $_FILES['product_image']['name'];
		//$product_image_tmp = $_FILES['product_image']['tmp_name'];
		// ^ tmp (temporary) name AKA default name
		
		//insert the data into the DB
		$insert_product = "";
	}
?>