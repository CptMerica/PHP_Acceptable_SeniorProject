<!DOCTYPE html>
<html>
<head>
    <title> Welcome to Registration</title>
    <meta charset="utf-8" />

    <link href="StyleSheet.css" rel="stylesheet" />

</head>
<body>
  
    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />

    <div>
        <ul id="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="returnvisitor.php">Back</a></li>
            <li style="float:right"><a>Help</a></li>
        </ul>
    </div>

    <class:registration align="center">

        <h2> Search User Form</h2>
        <p> Please Complete the form below to search for your profile. </p>
        <form method="post">
            <class:registration>

                <p>First Name:<input name="fname" type="text" id="fistname" /> </p>
                <p>Last Name: <input name="lname" type="text" id="lastname"/></p>
                <p>Last 4 of Social Security Number: <input name="ssnumber" type="text"id="ssnumber" /></p>
                <br />

                <br />

                <input type="submit" name="submit" value="Search" />

        </form>
        <p align="center">
            <input type="button" onclick="window.location = 'updatethanks.php'" class="Redirect" value="Close" />
        </p>


    </class:registration>

</body>
</html>
<?php 

$fname_query = $_POST['firstname'];
$lname_query = $_POST['lastname'];
$ssnum_query = $POST['ssnumber'];

$getuser = "SELECT F_NAME, L_NAME, LAST_4_SSN FROM WORKER WHERE F_NAME = '".$fname_query."' ";

?>