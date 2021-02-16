<?php
$ip = "172.18.0.3"; // IP SERVER DATABASE SETELAH CONNECT DOCKER NETWORK
$username = "root";
$password = "root";
$dbname = "trucorps";

// Create connection
$conn = mysqli_connect($ip, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["nama"]. " - Kantor : " . $row["kantor"]. "<br>";
  }
} else {
  echo "Data kosong";
}

mysqli_close($conn);
?>
	