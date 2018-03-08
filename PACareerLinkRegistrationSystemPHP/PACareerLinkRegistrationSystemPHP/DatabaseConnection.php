<?php
$hostname = "www.scwdbpacl.com";
$username="terhorst";
$password="password";
$dbname="paclregdb";

$con = mysqli_connect($hostname, $username, $password, $dbname);

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
} else {
    echo "";
}

?>