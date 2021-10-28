<?php 
# this is an initial test file

include '../inc/configuration.php';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM beandata";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Product: " . $row["productname"]. " Mfr:" . $row["brand"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
