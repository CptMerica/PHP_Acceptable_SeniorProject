<?php

include 'databaseConnection.php';

if(isset($_POST['createstaffsubmit'])){

    $staffuser =$_POST['staffuser'];
    $staffpass = $_POST['staffpass'];
    $staffpassretype = $_POST['retypestaffpass'];

    if($staffpass == $staffpassretype){

        $query = "INSERT INTO CENTER_USER(CENTER_USER_USERNAME, CENTER_USER_PASSWORD) values('$staffuser','$staffpass')";

        $con ->query($query);

        $sucess = "Staff Member was sucessfully created!";
    } else{

        $passworderr = "Mismatching Passwords. Please Re-Enter the passwords.";
    }

}

?>

<html>
<head>
    <title>Staff Creator</title>
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

    <p>Please Fill out the Form below to create a new staff member.</p>

    <form method="post">
        <div style="font-size:small">
            Staff Username:
            <input type="text" name="staffuser" required/>
            <br />
            <br />
            Staff Password:
            <input type="password" name="staffpass" required/>
            <br />
            <br />
            Retype Password:
            <input type="password" name="retypestaffpass" required/>
            <p class="error">
                <?php echo $passworderr; ?>
            </p>
        </div>
        <br />
        <input type="submit" name="createstaffsubmit" value="Submit" />
        <br />
        <p>
            <?php echo $sucess; ?>
        </p>
    </form>



</body>
</html>