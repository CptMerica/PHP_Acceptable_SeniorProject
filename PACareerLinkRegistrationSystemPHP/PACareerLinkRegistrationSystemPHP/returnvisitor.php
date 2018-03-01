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
        
        <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
        
        <div>
            <ul id="menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="visitor.php">Back</a></li>
                <li style="float:right"><a>Help</a></li>
            </ul>
        </div>
     
        <form method="post">
            <class:registration>
                <br />

                <p>Would you like to update your information?</p>


                <input type="button" onclick="window.location = 'searchuser.php'" class="Redirect" value="Yes" />
                <input type="button" onclick="window.location = 'visitreason.php'" class="Redirect" value="No" />

        </form>
    </class:registration>

</body>
</html>