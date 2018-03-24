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
                <a href="index.php">Log Out</a>
            </li>
            <li style="float:right">
                <a>Help</a>
            </li>
        </ul>
    </div>


    <h2>PACL System Homepage</h2>
    
    <p>Thanks, <?php echo $_SESSION['center_user_login']; ?> for logging in.</p>
    <br />
    <p style="font-size:20px;">Registration / Sign In</p>
    <p>Click here to start the Registration/Sign In Process: <input type="button" onclick="window.location = 'visitor.php'" class="Redirect" value="Start" /></p>
    <br />
    <p style="font-size:20px;">Admin</p>
    <p>Click here to sign in to an admin account:<input type="button" onclick="window.location = 'AdminLogIn.php'" class="Redirect" value="Sign In" /></p>
</body>