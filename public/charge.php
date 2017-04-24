<?php
require_once('../vendor/autoload.php');


$stripe = array(
  "secret_key"      => "sk_test_pvflGZTEtT8y8ZhNoIKLCdWx",
  "publishable_key" => "pk_test_J3Ob97PamDCfYRVEpruWAHLL"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$address = $_POST['address'];


//************Add order database here***************//




$transport = Swift_SmtpTransport::newInstance('ssl://smtp.gmail.com', 465)
    ->setUsername('ofsbusiness2017@gmail.com')
    ->setPassword('ofsteam1');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Here is your order!')
    ->setFrom(array('ofsbusiness2017@gmail.com' => 'OrganicFoodStore'))
    ->setTo(array($email => $first_name . " " . $last_name))
    ->setBody('Here is the <strong>message</strong> itself. It can be text or <h1>HTML</h1>.', 'text/html'); // Need to add tracking url in here

$mailer->send($message);

header("Location: http://localhost/organicfoods/public/"); /* Redirect browser */
exit();

?>
