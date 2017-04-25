<?php
require_once('../vendor/autoload.php');

#$connection = mysqli_connect(localhost, root, "", "database-test2");
#$connection = mysqli_connect("us-cdbr-iron-east-03.cleardb.net", "bad8f37e5eda46", "8035b0f5", "heroku_5003a71979fc0af");
require_once("../resources/config.php");

$stripe = array(
  "secret_key"      => "sk_test_pvflGZTEtT8y8ZhNoIKLCdWx",
  "publishable_key" => "pk_test_J3Ob97PamDCfYRVEpruWAHLL"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

//getting the text data from the fields
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$address = $_POST['address'];

$insert_product = "INSERT INTO orders(first_name, last_name, email, address, timestamp) VALUES ('$first_name', '$last_name', '$email', '$address', CURTIME())";
$insert_pro = mysqli_query($connection, $insert_product);
$order_id = mysqli_insert_id($connection);
$tracking_url = "http://localhost/OrganicFoodStore/public/tracking.php?order=" . $order_id;

$transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
    ->setUsername('ofsbusiness2017@gmail.com')
    ->setPassword('ofsteam1');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Your OFS Order!')
    ->setFrom(array('ofsbusiness2017@gmail.com' => 'OrganicFoodStore'))
    ->setTo(array($email => $first_name . " " . $last_name))
    ->setBody('Thank you for shopping at <strong>OFS</strong>! Here is your tracking URL: <h1><a href= "' . $tracking_url . '">Track Your Package</a></h1>', 'text/html'); // Need to add tracking url in here
  //getting the text data from the fields


$mailer->send($message);

header("Location: http://localhost/OrganicFoodStore/public/"); /* Redirect browser */

exit();

?>
