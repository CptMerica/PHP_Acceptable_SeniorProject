<?php
//Connect To Database
$hostname="11.62.0.35";
$username="fowler";
$password="$cottiE10";
$dbname="paclregdb";
$usertable="County";
$yourfield = "COUNTY_DESC";
$connection = mysqli_connect($hostname, $username, $password);
mysqli_select_db($dbname, $connection);
//Check connection
if (mysqli_connect_error){
    die("Connection Failed: " .mysqli_connect_error());
}
echo "connected successfully";
$connection->close();
?>

<?php

$servername = "11.62.0.35";
$username = "fowler";
$password = "$cottiE10";
$dbname = "paclregdb";
$connection = mysqli_connect($hostname, $username, $password);
mysqli_select_db($dbname, $connection);

// Create connection
$connection = new mysq($servername, $username, $password, $dbname);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT COUNTY_ID, COUNTY_DESC FROM COUNTY ";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "County ID: " . $row["COUNTY_ID"]. " County Name: " . $row["COUTNY_DESC"]. "<br>";
    }
} else {
    echo "0 results";
}
$connection->close();


?>