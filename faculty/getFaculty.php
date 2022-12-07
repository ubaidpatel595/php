<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csdepartment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$barnch = $_GET['branch'];

$sql = "SELECT *FROM faculty WHERE branch='$barnch'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "$row[fname] <br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
