<!DOCTYPE html>
<html>
<head>
    <title> Welcome to Registration</title>
    <meta charset="utf-8" />

    <link href="StyleSheet.css" rel="stylesheet" />
    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
</head>
<body>
    <class:registration align="center">

        <h2> Registration Form</h2>
        <p> Please Complete the form below to search for your profile. </p>
        <form method="post">
            <class:registration>

                <p>First Name:<input name="fname" type="text" /> </p>
                <p>Last Name: <input name="lname" type="text" /></p>
                <p>Last 4 of Social Security Number: <input name="ssnumber" type="text" /></p>
                <br />

                <br />

                <input type="button" onclick="window.location = 'kigPopulateInfo.php'" class="Redirect" value="Search" />

        </form>



    </class:registration>
    <p align="bottomright">
        Created by GJEF
    </p>
</body>
</html>