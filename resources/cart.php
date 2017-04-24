<?php require_once("config.php"); ?>


<?php


  if(isset($_GET['add'])) {


    $query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['add']). " ");
    confirm($query);

    while($row = fetch_array($query)) {


      if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]) {

        $_SESSION['product_' . $_GET['add']]+=1;
        redirect("../public/checkout.php");


      } else {


        set_message("We only have " . $row['product_quantity'] . " " . "{$row['product_title']}" . " available");
        redirect("../public/checkout.php");



      }






    }



  // $_SESSION['product_' . $_GET['add']] +=1;

  // redirect("index.php");


  }


  if(isset($_GET['remove'])) {

    $_SESSION['product_' . $_GET['remove']]--;

    if($_SESSION['product_' . $_GET['remove']] < 1) {

      unset($_SESSION['item_total']);
      unset($_SESSION['item_quantity']);
      redirect("../public/checkout.php");

    } else {

      redirect("../public/checkout.php");

     }


  }


 if(isset($_GET['delete'])) {

  $_SESSION['product_' . $_GET['delete']] = '0';
  unset($_SESSION['item_total']);
  unset($_SESSION['item_quantity']);

  redirect("../public/checkout.php");


 }




function cart() {
$total = 0;
$item_quantity = 0;
$item_name = 1;
$item_number =1;
$amount = 1;
$quantity =1;
foreach ($_SESSION as $name => $value) {

if($value > 0 ) {

if(substr($name, 0, 8 ) == "product_") {


$length = strlen($name);

$id = substr($name, 8 , $length);


$query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");
confirm($query);

while($row = fetch_array($query)) {

$sub = $row['product_price']*$value;
$item_quantity +=$value;

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER

<tr>
  <td>{$row['product_title']}<br>

  <img width='100' src='../resources/{$product_image}'>

  </td>
  <td>&#36;{$row['product_price']}</td>
  <td>{$value}</td>
  <td>&#36;{$sub}</td>
  <td><a class='btn btn-warning' href="../resources/cart.php?remove={$row['product_id']}"><span class='glyphicon glyphicon-minus'></span></a>   <a class='btn btn-success' href="../resources/cart.php?add={$row['product_id']}"><span class='glyphicon glyphicon-plus'></span></a>
<a class='btn btn-danger' href="../resources/cart.php?delete={$row['product_id']}"><span class='glyphicon glyphicon-remove'></span></a></td>
  </tr>

<input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
<input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
<input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
<input type="hidden" name="quantity_{$quantity}" value="{$value}">


DELIMETER;

echo $product;

$item_name++;
$item_number++;
$amount++;
$quantity++;



}


$_SESSION['item_total'] = $total += $sub;
$_SESSION['item_quantity'] = $item_quantity;


           }

      }

    }



}


function show_paypal() {
if(isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >= 1) {
$paypal_button = <<<DELIMETER

    <input type="image" name="upload" border="0"
src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
alt="PayPal - The safer, easier way to pay online">

DELIMETER;

return $paypal_button;

  }


}

function show_payment_form() {
if(isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >= 1) {
$cent_amount = $_SESSION['item_total'] * 100;
$payment_form = <<<DELIMETER
      <script src="https://checkout.stripe.com/checkout.js"></script>

      <form action="charge.php" method="POST" name="order_form">
      <input type="text" name="first_name" placeholder="First" required>
      <input type="text" name="last_name" placeholder="Last" required>
      <input type="text" name="email" placeholder="Email" required>
      <input type="text" name="address" placeholder="Address" required>
      <button id="purchaseButton">Purchase</button>
      </form>

      <script type="text/javascript">
        var handler = StripeCheckout.configure({
          key: 'pk_test_J3Ob97PamDCfYRVEpruWAHLL',
          image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
          locale: 'auto',
          token: function(token) {
            // success! create order and save in db
            document.forms["order_form"].submit();
          }
        });

        document.getElementById('purchaseButton').addEventListener('click', function(e) {
          //Check if form is valid
          if(orderFormIsValid()){
            // Open Checkout with further options:
            handler.open({
              name: 'OrganicFoodStore',
              description: 'Your Order Total',
              amount: {$cent_amount}
            });
            e.preventDefault();
          }
        });

        // Close Checkout on page navigation:
        window.addEventListener('popstate', function() {
          handler.close();
        });

        function orderFormIsValid(){
          var orderForm = document.forms["order_form"];
          var first = orderForm["first_name"];
          var last = orderForm["last_name"];
          var email = orderForm["email"];
          var address = orderForm["address"];

          if(first.value == "" || !first.checkValidity()){
            alert("Enter First Name");
            return false;
          }

          if(last.value == "" || !last.checkValidity()){
            alert("Enter Last Name");
            return false;
          }

          if(email.value == "" || !email.checkValidity()){
            alert("Enter Email");
            return false;
          }

          if(address.value == "" || !address.checkValidity()){
            alert("Enter Address");
            return false;
          }

          return true;
        }
      </script>
DELIMETER;
return $payment_form;
}
}

function show_stripe() {


if(isset($_SESSION['item_quantity']) && $_SESSION['item_quantity'] >= 1) {

$cent_amount = $_SESSION['item_total'] * 100;
$stripe_button = <<<DELIMETER

<form action="charge.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
    data-amount= {$cent_amount}
    data-name="OrganicFoodStore"
    data-description="Your Order Total"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-zip-code="true">
  </script>
</form>

DELIMETER;

return $stripe_button;

  }


}





function process_transaction() {



if(isset($_GET['tx'])) {

$amount = $_GET['amt'];
$currency = $_GET['cc'];
$transaction = $_GET['tx'];
$status = $_GET['st'];
$total = 0;
$item_quantity = 0;

foreach ($_SESSION as $name => $value) {

if($value > 0 ) {

if(substr($name, 0, 8 ) == "product_") {

$length = strlen($name - 8);
$id = substr($name, 8 , $length);


$send_order = query("INSERT INTO orders (order_amount, order_transaction, order_currency, order_status ) VALUES('{$amount}', '{$transaction}','{$currency}','{$status}')");
$last_id =last_id();
confirm($send_order);



$query = query("SELECT * FROM products WHERE product_id = " . escape_string($id). " ");
confirm($query);

while($row = fetch_array($query)) {
$product_price = $row['product_price'];
$product_title = $row['product_title'];
$sub = $row['product_price']*$value;
$item_quantity +=$value;


$insert_report = query("INSERT INTO reports (product_id, order_id, product_title, product_price, product_quantity) VALUES('{$id}','{$last_id}','{$product_title}','{$product_price}','{$value}')");
confirm($insert_report);





}


$total += $sub;
echo $item_quantity;


           }

      }

    }

session_destroy();
  } else {


//redirect("index.php");

redirect("thank_you.php");

}



}




















 ?>
