<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Info</title>
    <meta charset="utf-8" />

    <link href="StyleSheet.css" rel="stylesheet" />

</head>
<body>
    <class:registration align="center">

        <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
        <div>
            <ul id="menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="visitor.php">Back</a></li>
                <li style="float:right"><a>Help</a></li>
            </ul>
        </div>

       
        <form method="post">
            <class:registration align="center">
                <br />

                <p>Do you need to update any information?</p>
                <input type="button" onclick="window.location = 'updatecredentials.php'" class="Redirect" value="Yes" />
                <input type="button" onclick="window.location = 'returnvisitor.php'" class="Redirect" value="No" />

        </form>
    </class:registration>

</body>
</html>