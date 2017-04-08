<!DOCTYPE html>
<?php
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

  	<h1>Log in</h1>
  	<p></p>

    <br><input type="text" placeholder="Enter Email" name="email" required></br>

  	<p></p>

    <br><input type="password" placeholder="Enter Password" name="pass" required></br>

    <br><tr align="center">
        <td colspan="5"><a href="checkout.php?forgot_pass">Forgot Password?</a></td>
      </tr></br>

    <!--<br><button type="submit" name="login" value="Login">Log in</button></br> -->

    <br><input type="submit" name="login" value="Login" class="btn btn-primary" ></br>

    <br>-------------------------- New to OFS? --------------------------</br>

    <br><h3><a href="customer_register.php">Register Here</a></h3></br>

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
if(isset($_POST['login'])){

  $c_email = $_POST['email'];
  $c_pass = $_POST['pass'];

  $sel_c = "select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";

  $run_c = mysqli_query($con, $sel_c);

  $check_customer = mysqli_num_rows($run_c);

  if($check_customer==0){

  echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
  exit();
  }
  $ip = getIp();

  $sel_cart = "select * from cart where ip_add='$ip'";

  $run_cart = mysqli_query($con, $sel_cart);

  $check_cart = mysqli_num_rows($run_cart);

  if($check_customer>0 AND $check_cart==0){

  $_SESSION['customer_email']=$c_email;

  echo "<script>alert('You logged in successfully, Thanks!')</script>";
  echo "<script>window.open('customer/my_account.php','_self')</script>";

  }
  else {
  $_SESSION['customer_email']=$c_email;

  echo "<script>alert('You logged in successfully, Thanks!')</script>";
  echo "<script>window.open('checkout.php','_self')</script>";


  }
}


?>
