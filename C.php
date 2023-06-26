<?php
$servername = 'demosql.cqabzoe3g102.ap-southeast-2.rds.amazonaws.com';
$username = 'DemoU';
$password ='12345678';
$dbname = 'DemoDB';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO A1 VALUES ('Anchal',22)";
if(mysqli_query($conn,$sql))
{
  echo "New Record Inserted";
}
else
{
  echo "Error : ".$sql." ".mysqli_error($conn);
}
mysqli_close($conn);

?>
// mysql -h demosql.cqabzoe3g102.ap-southeast-2.rds.amazonaws.com -P 3306 -u DemoU -p
