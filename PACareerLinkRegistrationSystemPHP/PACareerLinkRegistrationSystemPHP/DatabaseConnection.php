<?php
//Connect To Database
$hostname="160.153.77.232";
$username="terhorst";
$password="password";
$dbname="paclregdb";
$con = mysqli_connect($hostname, $username, $password, $dbname);
//Check connection
if (mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{
    echo "Succesful Connection"
}

?>


/*
$servername = "160.153.77.232";
$username = "dynamicdeveloper";
$password = "burton23";
$dbname = "paclregdb";
$connection = mysqli_connect($hostname, $username, $password, $dbname);

if (mysqli_connect_errno){
    echo mysqli_connect_error();
    exit();
}else{
    echo "Succesful Connection"
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
