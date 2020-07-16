<!DOCTYPE html>
<html>
<head>
	<title>PHP Day 2</title>
</head>
<body>
	<?php
$hostName = "localhost";
$username = "customer2";
$password = "car_customer_2";
$dbName ="car_rental";
// Create connection
$conn = mysqli_connect($hostName, $username, $password, $dbName);
// Check connection
if (!$conn) {
   echo "Connection failed";
}else {

echo "Connection successful";
}
?>
</body>
</html>