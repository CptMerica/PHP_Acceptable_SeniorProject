<!DOCTYPE html>
<html>
<head>
    <title> Update Credentials</title>
    <meta charset="utf-8" />

    <link href="StyleSheet.css" rel="stylesheet" />

</head>
<body>

    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />

    <div>
        <ul id="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="admin.php">Back</a></li>
            <li style="float:right"><a>Help</a></li>
        </ul>
    </div>

    <class:registration align="center">

        <h2> Change Credentials</h2>
        <p> Please Complete the form below to change username and password. </p>
        <form method="post">
            <class:registration>

                <p>Username:<input name="username" type="text" id="fistname" /> </p>
                <p>Password: <input name="password" type="text" id="lastname" /></p>
                
              

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
require_once('databaseConnection.php');
if(isset($_POST[update]))
{
    $username = $_POST["ADMIN_USERNAME"];
    $password = $_post["ADMIN_PASSWORD"];
}

$sql = "UPDATE ADMINISTRATOR set ADMIN_USERNAME=$username, ADMIN_PASSWORD=$password"

?>