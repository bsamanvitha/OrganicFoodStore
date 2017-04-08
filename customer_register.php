<!DOCTYPE html>
<?php
session_start();
include("admin_area/includes/db.php");
include("functions/functions.php");
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Organic Food Store</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">


<style>
form {
	text-align: center;
}

input[type=text]}
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=password] {
    border: 1px solid #ccc;
    box-sizing: border-box;

}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 20%;

}

.container {
    padding: 10px;
    width: 40%;
    border: 3px solid #f1f1f1;

}



</style>
<body>

  <div class="imgcontainer">
    <img src="images/logo.png" alt="Avatar" class="avatar">
  </div>


<form method="post" action="">

  <div class="container">

  	<h1>Create Account</h1>
  	<p></p>

    <br><input type="text" placeholder="Enter name" name="c_name" required></br>

  	<p></p>

    <br><input type="text" placeholder="Enter email" name="c_email" required></br>

    <p></p>

    <br><input type="password" placeholder="Enter password" name="c_pass" required></br>

    <p></p>

    <br><input type="text" placeholder="Enter city" name="c_city" required></br>

    <p></p>

    <br><input type="text" placeholder="Enter Address" name="c_address" required></br>

    <p></p>

    <br><input type="text" placeholder="Enter phone number" name="c_contact" required></br>

    <p></p>


    <!--<br><button type="submit" name="login" value="Login">Log in</button></br> -->

    <br><input type="submit" name="register" value="Create Account" class="btn btn-primary" ></br>



  </div>

</form>


<br></br>
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



<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
	if(isset($_POST['register'])){

		$ip = getIp();

		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_pass = $_POST['c_pass'];
		$c_city = $_POST['c_city'];
		$c_address = $_POST['c_address'];
    $c_contact = $_POST['c_contact'];


		 $insert_c = "insert into customers (customer_ip,customer_name,customer_email,customer_pass,customer_city,customer_address, customer_contact) values ('$ip','$c_name','$c_email','$c_pass','$c_city','$c_address','$c_contact')";

		$run_c = mysqli_query($con, $insert_c);

		$sel_cart = "select * from cart where ip_add='$ip'";

		$run_cart = mysqli_query($con, $sel_cart);

		$check_cart = mysqli_num_rows($run_cart);

		if($check_cart==0){

		$_SESSION['customer_email']=$c_email;

		echo "<script>alert('Account has been created successfully, Thanks!')</script>";
		echo "<script>window.open('customer/my_account.php','_self')</script>";

		}
		else {

		$_SESSION['customer_email']=$c_email;

		echo "<script>alert('Account has been created successfully, Thanks!')</script>";

		echo "<script>window.open('checkout.php','_self')</script>";


		}
	}

?>
