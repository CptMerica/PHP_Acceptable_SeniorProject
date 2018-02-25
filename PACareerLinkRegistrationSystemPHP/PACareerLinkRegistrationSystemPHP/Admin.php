<?php
session_start();
if(!isset($_SESSION['admin_login'])){
    header("Location: AdminLogIn.php");
    exit();
}
?>
<link href="StyleSheet.css" rel="stylesheet" />
<body>
   
    <h1>
        <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
    </h1>

    Thanks, <?php echo $_SESSION['admin_login']; ?> for logging in.
    <h1 align="center">
        Welcome to the Admin HOMEPAGE
    </h1>
    <p:titlebar>
        <input type="button" onclick="window.location = 'home.php'" class="Redirect" value="Home" />
        <input type="button" onclick="window.location = 'home.php'" class="Redirect" value="Back" />
    </p:titlebar>


    <p align="center">
        <input type="button" onclick="window.location = 'Reports.php'" class="Redirect" value="Create Reports" />
        <input type="button" onclick="window.location = 'AdminLogOut.php'" class="Redirect" value="LOG OUT" />
    </p>


</body>