<!DOCTYPE html>
<html>
<head>
    <title> Welcome to Registration</title>
    <meta charset="utf-8" />

    <link href="StyleSheet.css" rel="stylesheet" />
    
</head>
<body>
    <class:registration align="center">
       
        <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
        <div>
            <ul id="menu">
                <li><a href="home.php">Home</a></li>
                <li><a href="home.php">Back</a></li>
                <li style="float:right"><a>Help</a></li>
            </ul>
        </div>

        <h2> Registration Form</h2>
        <form method="post">
            <class:registration align="center">
                <br />

                <p>Have you been here before?</p>
                 <input type="button" onclick="window.location = 'returnvisitor.php'" class="Redirect" value="Yes" />
                <input type="button" onclick="window.location = 'registrationForm.php'" class="Redirect" value="No" />

</form>
    </class:registration>

</body>
</html>