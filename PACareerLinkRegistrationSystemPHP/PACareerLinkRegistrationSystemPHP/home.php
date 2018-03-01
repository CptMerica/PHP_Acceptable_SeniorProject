<?php
session_start();
if(!isset($_SESSION['simple_login'])){
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
                <input type="button" onclick="window.location = 'visitor.php'" class="Redirect" value="Registration" />
           </li>
            <li>
                <input type="button" onclick="window.location = 'AdminLogIn.php'" class="Redirect" value="Admin" />
            </li>
            <li>
                <input type="button" onclick="window.location = 'HomelogOUT.php'" class="Redirect" value="LOG OUT" />  
            </li>
            <li>
                <input type="button" onclick="window.location= 'databaseConnection.php'" class="Redirect" value="DatabaseConnection" />
            </li>
            <li style="float:right">
                <a>Help</a>
            </li>
        </ul>
    </div>
    <h2>Welcome to the PACL Registration System Homepage!</h2>
    
    <p>Thanks, <?php echo $_SESSION['simple_login']; ?> for logging in.</p>
    
    
</body>