<?php
session_start();
if(!isset($_SESSION['simple_login'])){
    header("Location: index.php");
    exit();
}
?>
<link href="StyleSheet.css" rel="stylesheet" />
<body>
    <h1>
        <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
    </h1>

    Thanks, <?php echo $_SESSION['simple_login']; ?> for logging in.
    <h1 align="center">
        Welcome to the SWCDB HOMEPAGE!!!!!
    </h1>



    <p align="center">
        <input type="button" onclick="window.location = 'kigOGHome.php'" class="Redirect" value="Registration Form" />
        <input type="button" onclick="window.location = 'AdminLogIn.php'" class="Redirect" value="Admin" />
        <input type="button" onclick="window.location = 'HomelogOUT.php'" class="Redirect" value="LOG OUT" />
    </p>
    <p align="bottomright">
        Created by GJEF
    </p>
</body>