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

$datum='"' . date(DATE_W3C) . '"';
$ip='"' . $_SERVER['REMOTE_ADDR'] . '"';
$os = "OS";
$browser = "Chrome";

$sql = 'INSERT INTO visitors' . '( datum, ip, os, browser )' .
' VALUES (' . $datum . ', "'. $ip .'", "'. $os . '", " '. $browser .'" ,' . ' )';
echo $sql;
/*
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection succeeded
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



/*
if (mysqli_query($conn, $sql)) {
//  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/

mysqli_close($conn);
    ?>
  </body>
</html>
