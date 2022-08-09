<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
  <body>
    <?php
    $ip=$_SERVER['REMOTE_ADDR'];
//    echo "Your IP address is: $ip";

$servername = "localhost";
$username = "SekomWWW";
$password = "%%Rx30b85t";
$dbname = "sekom";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
/* Check if the connection succeeded */
if (!$conn)
{
   echo 'Connection failed<br>';
   echo 'Error number: ' . mysqli_connect_errno() . '<br>';
   echo 'Error message: ' . mysqli_connect_error() . '<br>';
   die();
}

echo 'Successfully connected!<br>';

echo $conn->host_info ;
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Perform query
/*
if ($result = mysqli_query($conn , "SELECT * FROM webdataform")) {
  echo "Returned rows are: " . mysqli_num_rows($result);
  // Free result set
  mysqli_free_result($result);
}
*/


$datum='"' . date(DATE_W3C) . '"';
//echo $date;
$ip='"' . $_SERVER['REMOTE_ADDR'] . '"';
//echo $ip;
$sql = 'INSERT INTO visitors ( datum, ip, os, browser) VALUES (' . $dd . ' , ' . $name . ' , ' . $os . ' , ' . $browser . ' )';

echo $sql;


if (mysqli_query($conn, $sql)) {
//  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
    ?>
  </body>
</html>
