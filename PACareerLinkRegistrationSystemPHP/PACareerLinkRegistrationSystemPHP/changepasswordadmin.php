<?php
include 'databaseConnection.php';

if(isset($_POST['changeadminsubmit'])){

    $adminuser =$_POST['adminuser'];
    $adminpass = $_POST['changeadminpass'];
    $adminpassretype = $_POST['changeretypeadminpass'];

    if($adminpass == $adminpassretype){

        $query = "ALTER table ADMINISTRATOR where ADMIN_USERNAME = '".$adminuser."' AND ADMIN_PASSWORD = '".$adminpass."'";

        $con ->query($query);

        $sucess = "Password sucessfully changed!";

    } else {

        $passworderr = "Mismatching Passwords. Please Re-Enter the Passwords.";
    }

}
?>

<html>
<head>
    <title>Admin Password Reset</title>
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

    <p>Please Fill out the Form below to reset an Admin account password.</p>

    <form method="post">
        <div style="font-size:small">
            Admin Username:
            <input type="text" name="adminuser" required />
            <br />
            <br />
            Admin Password:
            <input type="text" name="changeadminpass" required />
            <br />
            <br />
            Retype Password:
            <input type="text" name="changeretypeadminpass" required />
            <p class="error">
                <?php echo $passworderr; ?>
            </p>
        </div>
        <br />
        <input type="submit" name="changeadminsubmit" value="Submit" />
        <br />
        <p>
            <?php echo $sucess; ?>
        </p>

    </form>



</body>
</html>