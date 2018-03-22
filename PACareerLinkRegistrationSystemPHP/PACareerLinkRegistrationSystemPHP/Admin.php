<?php
session_start();
if(!isset($_SESSION['admin_login'])){
    
    $_SESSION['admin_login'] = $uname;
    header("Location: index.php");
    exit();
   ;
}

?>

<head>
    <title>Admin Homepage</title>

    <link href="StyleSheet.css" rel="stylesheet" />

</head>

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
        <input type="button" onclick="window.location = 'CreateAdmin.php'" class="Redirect" value="Create Admin"/>
        <input type="button" onclick="window.location='deleteadmin.php'" calss="Redirect" value="Delete Admin"/>
        <input type="button" onclick="window.location = 'AdminLogIn.php'" class="Redirect" value="LOG OUT" />
    </p>


</body>