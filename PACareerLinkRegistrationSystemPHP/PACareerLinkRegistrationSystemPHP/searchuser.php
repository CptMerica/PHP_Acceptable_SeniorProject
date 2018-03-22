<?php
// Start the session
session_start();
?>

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
        <form action="populateInfo.php" id="populate" method="post" name="populate">
            <class:registration>
                
                    <p>
                     
                        Last 4 of Social Security Number:
                        <input name="search" type="text" />
                    </p>
                    <br />

                    <br />

                    <input id='btn' name="submit" type='submit' value='Search'>

              

                </form>



    </class:registration>

</body>
</html>


