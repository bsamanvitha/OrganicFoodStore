<?php ob_start(); // Make sure you put this in line 1 with no space

session_start();
// session_destroy();

defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);


defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");

defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");


defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__ . DS . "uploads");


defined("localhost") ? null : define("localhost", "localhost");

defined("root") ? null : define("root","root");


defined("") ? null : define("", "root");

defined("database") ? null : define("database",  "ecom");

$connection = mysqli_connect("localhost","root","","database");
#uncomment the above for local connection

#$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
#$server = $url["host"];
#$username = $url["user"];
#$password = $url["pass"];
#$db = substr($url["path"], 1);
#$connection = mysqli_connect($server, $username, $password, $db);

require_once("functions.php");
require_once("cart.php");


 ?>