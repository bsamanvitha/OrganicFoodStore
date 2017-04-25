<?php ob_start(); // Make sure you put this in line 1 with no space


session_start();
//session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);


defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");


defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads");


defined("localhost") ? null : define("localhost", "localhost");

defined("root") ? null : define("root","root");


defined("") ? null : define("", "root");

defined("database") ? null : define("database",  "ecom");

#$connection = mysqli_connect("localhost","root","","database");
#uncomment the above for local connection

#$url = parse_url(getenv("mysql://bad8f37e5eda46:8035b0f5@us-cdbr-iron-east-03.cleardb.net/heroku_5003a71979fc0af?reconnect=true"));
#$server = $url["us-cdbr-iron-east-03.cleardb.net"];
#$username = $url["bad8f37e5eda46"];
#$password = $url["8035b0f5"];
#$db = substr($url["heroku_5003a71979fc0af"], 1);
#$connection = mysqli_connect($server, $username, $password, $db);

$url = parse_url(getenv("mysql://bad8f37e5eda46:8035b0f5@us-cdbr-iron-east-03.cleardb.net/heroku_5003a71979fc0af?reconnect=true"));
$connection = mysqli_connect("us-cdbr-iron-east-03.cleardb.net", "bad8f37e5eda46", "8035b0f5", "heroku_5003a71979fc0af");
$connection = mysqli_connect(localhost, root, "", "database");

$obj_connection = new mysqli(localhost, root, "", "database");



require_once("functions.php");
require_once("cart.php");

 ?>
