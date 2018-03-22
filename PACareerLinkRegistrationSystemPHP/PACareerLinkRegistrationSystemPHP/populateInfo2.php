<?php


require_once('databaseConnection.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$ssnumber = $_POST['ssnumber'];

$data = "UPDATE WORKER SET F_NAME = '$fname', L_NAME='$lname' WHERE LAST_4_SSN = '".$search."'";
$query = mysqli_query($con, $data) or die("Couldn't execute query. ". mysqli_error($con));
?>

First Name: <?php echo $fname?><br />
Last Name: <?php echo $lname?> <br />
