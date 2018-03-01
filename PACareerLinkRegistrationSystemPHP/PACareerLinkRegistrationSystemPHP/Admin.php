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
    <div>
        <ul id="menu">
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="adminlogin.php">Back</a>
            </li>
            <li style="float:right">
                <a>Help</a>
            </li>
        </ul>
    </div>
   
    <h1 align="center">
        Welcome to the Admin HOMEPAGE
    </h1>
    <p> Thanks, <?php echo $_SESSION['admin_login']; ?> for logging in.</p>

    <p align="center">
        <input type="button" onclick="window.location = 'Reports.php'" class="Redirect" value="Create Reports" />
        <input type="button" onclick="window.location = 'AdminLogIn.php'" class="Redirect" value="LOG OUT" />
    </p>


</body>