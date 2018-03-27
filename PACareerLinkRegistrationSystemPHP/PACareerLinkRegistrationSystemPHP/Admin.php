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
                <a href="home.php">Log Out</a>
            </li>
            <li style="float:right">
                <a>Help</a>
            </li>
        </ul>
    </div>
   
    <h1>
         Admin Homepage
    </h1>
    <p> Thanks, <?php echo $_SESSION['admin_login']; ?> for logging in.</p>
    <br />
    <p style="font-size:20px;">Admin Account Creation</p>
    <p>Click here to create a new admin: <input type="button" onclick="window.location = 'CreateAdmin.php'" class="Redirect" value="Create Admin" /> </p>
    <p>Click here to delete an existing admin:<input type="button" onclick="window.location='deleteadmin.php'" calss="Redirect" value="Delete Admin" /> </p>
    <br />
    <br />
    <p style="font-size:20px;">Staff Account Creation</p>
    <p>Click here to create a new staff member: <input type="button" onclick="window.location = 'createstaff.php'" class="Redirect" value="Create Staff" /> </p>
    <p>Click here to delete an existing staff member:<input type="button" onclick="window.location='deletestaff.php'" calss="Redirect" value="Delete Staff" /> </p>
    
    <br />
    <br />
    <p style="font-size:20px;">Reporting</p>
    <p>Click here to view the transaction log:<input type="button" onclick="window.location = 'transactionlog.php'" class="Redirect" value="Transaction Log" /> </p>
    <p>Click here to view visitor information:<input type="button" onclick="window.location = 'Reports.php'" class="Redirect" value="Visitor Information" /> </p>
   <br />
   <br />
        
</body>