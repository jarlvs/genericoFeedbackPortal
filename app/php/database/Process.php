<?php 
require(__DIR__ . "/../../../vendor/autoload.php");
use php\database\Database as Database;




$obj = new Database();
$obj->connectTodatabase();

$rating = $_POST['rating'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];

echo $rating ."\n";
echo $name."\n";
echo $mobile ."\n";



date_default_timezone_set('Asia/Kolkata');
$currentdate = date("Y-m-d H:i:s");

$obj->insertData($rating, $currentdate, $name, $mobile);










// $rating = $_POST['rating'];

// mysqli_query($connect, "INSERT INTO testdata(rating)
// 				VALUES('$rating')");

?>




