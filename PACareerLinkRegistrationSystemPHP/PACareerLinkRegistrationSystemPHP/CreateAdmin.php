<?php

include 'databaseConnection.php';

if(isset($_POST['createadminsubmit'])){

    $adminuser =$_POST['adminuser'];
    $adminpass = $_POST['adminpass'];
    $adminpassretype = $_POST['retypeadminpass'];

    if($adminpass == $adminpassretype){

        $query = "INSERT INTO ADMINISTRATOR(ADMIN_USERNAME, ADMIN_PASSWORD) values('$adminuser','$adminpass')";

        $con ->query($query);
     

    } else{
        echo "Unmatching passwords. Please re-enter the password";
    }

}

?>

<html>
<head>
    <title>Admin Creator</title>
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

    <p>Please Fill out the Form below to create a new admin.</p>

    <form method="post">
        <div style="font-size:small">
            Admin Username:
            <input type="text" name="adminuser" required/>
            <br />
            <br />
            Admin Password:
            <input type="text" name="adminpass" required/>
            <br />
            <br />
            Retype Password:
            <input type="text" name="retypeadminpass" required/>
        </div>
        <br />
        <input type="submit" name="createadminsubmit" value="Submit"/>

    </form>



</body>
</html>