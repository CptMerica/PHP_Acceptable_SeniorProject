<?php
session_start();
if(!isset($_SESSION['center_user_login'])){

    $_SESSION['center_user_login'] = $uname;
    header("Location: index.php");
    exit();
    
}
?>
<link href="styleSheet.css" rel="stylesheet" />
<body>
    <h1><img src="pacareerlink.jpg" style="height: 93px; width:459px;" /></h1>
    <div>
        <ul id="menu">
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="index.php">Back</a>
            </li>
            <li style="float:right">
                <a>Help</a>
            </li>
        </ul>
    </div>


    <h2>Welcome to the PACL Registration System Homepage!</h2>
    
    <p>Thanks, <?php echo $_SESSION['center_user_login']; ?> for logging in.</p>
    
    <input type="button" onclick="window.location = 'visitor.php'" class="Redirect" value="Registration" />
    <input type="button" onclick="window.location = 'AdminLogIn.php'" class="Redirect" value="Admin" />
    <input type="button" onclick="window.location= 'databaseConnection.php'" class="Redirect" value="DatabaseConnection" />
    <input type="button" onclick="window.location = 'HomelogOUT.php'" class="Redirect" value="LOG OUT" />
</body>