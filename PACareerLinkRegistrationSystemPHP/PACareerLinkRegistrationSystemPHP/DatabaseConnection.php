<?php
$hostname = "www.scwdbpacl.com";
$uname="terhorst";
$password="password";
$dbname="paclregdb";

$con = mysqli_connect($hostname, $uname, $password, $dbname);

if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
} else {
    echo "";
}

?>