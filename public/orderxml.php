<?php
require_once("../resources/config.php");
if(isset($_GET['order'])){
  $q = "SELECT *
        FROM orders
        WHERE order_id={$_GET['order']}";
  if($order = $obj_connection->query($q)){
    $row = $order->fetch_assoc();
    $xml = new SimpleXMLElement('<xml/>');
    $order = $xml->addChild('order');
    $order->addChild("order_id",$row['order_id']);
    $order->addChild("first_name",$row['first_name']);
    $order->addChild("last_name",$row['last_name']);
    $order->addChild("address",$row['address']);
    $order->addChild("timestamp",$row['timestamp']);
    echo $xml->asXML();
  } else {
    $error = $obj_connection->error;
    printf($error);
  }
}
?>
