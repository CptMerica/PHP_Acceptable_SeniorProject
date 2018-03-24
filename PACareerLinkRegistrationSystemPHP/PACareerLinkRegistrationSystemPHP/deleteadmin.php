<?php
include 'databaseConnection.php';

if(isset($_POST['deleteadminsubmit'])){

    $adminuser =$_POST['deleteadminuser'];
    $adminpass = $_POST['deleteadminpass'];
    $adminpassretype = $_POST['deleteretypeadminpass'];

    if($adminpass == $adminpassretype){

        $query = "delete from ADMINISTRATOR where ADMIN_USERNAME = '".$adminuser."' AND ADMIN_PASSWORD = '".$adminpass."'";

        $con ->query($query);
        
        $sucess = "Admin was sucessfully deleted!";
       
    } else {

        $passworderr = "Mismatching Passwords. Please Re-Enter the Passwords.";
    }

}
?>
<html>
<head>
    <title>Admin Deletion</title>
    <link href="styleSheet.css" rel="stylesheet" />
</head>

<body>
    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />

    <ul id="menu">
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="admin.php">Back</a>
        </li>
        <li style="float:right">
            <a>Help</a>
        </li>

    </ul>

    <p>Please Fill out the Form below to delete an existing admin.</p>

    <form method="post">
        <div style="font-size:small">
            Admin Username:
            <input type="text" name="deleteadminuser" required />
            <br />
            <br />
            Admin Password:
            <input type="password" name="deleteadminpass" required />
            <br />
            <br />
            Retype Password:
            <input type="password" name="deleteretypeadminpass" required />
            <p class="error">
                <?php echo $passworderr; ?>
            </p>
        </div>
        <br />
        <input type="submit" name="deleteadminsubmit" value="Submit" />
        <br />
        <p><?php echo $sucess; ?></p>
        
    </form>



</body>
</html>