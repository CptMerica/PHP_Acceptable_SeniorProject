<?php
session_start();
if(!isset($_SESSION['simple_login'])){
    header("Location: index.php");
    exit();
}
?>
<link href="StyleSheet.css" rel="stylesheet" />
<body>
    <h1><img src="pacareerlink.jpg" style="height: 93px; width:459px;" /></h1>
    <h2>Welcome to the PACL Registration System Homepage!</h2>
    
    <p>Thanks, <?php echo $_SESSION['simple_login']; ?> for logging in.</p>
    <br />
    <p>Click here to start the registration process   <input type="button" onclick="window.location = 'homeFirst.php'" class="Redirect" value="Registration" /></p>
    <br />    
    <p>Click here for Admin access  <input type="button" onclick="window.location = 'AdminLogIn.php'" class="Redirect" value="Admin" /> </p>
    <br />  
    <p>Click here to check the connection to the database <input type="button" onclick="window.location= 'databaseConnection.php'" class="Redirect" value="DatabaseConnection" /></p>
    <br />
    <input type="button" onclick="window.location = 'HomelogOUT.php'" class="Redirect" value="LOG OUT" />
    

</body>