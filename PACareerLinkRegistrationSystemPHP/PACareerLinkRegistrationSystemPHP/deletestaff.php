<?php
include 'databaseConnection.php';

if(isset($_POST['deletestaffsubmit'])){

    $staffuser =$_POST['deletestaffuser'];
    $staffpass = $_POST['deletestaffpass'];
    $staffpassretype = $_POST['deleteretypestaffpass'];

    if($staffpass == $staffpassretype){

        $query = "delete from CENTER_USER where CENTER_USER_USERNAME = '".$staffuser."' AND CENTER_USER_PASSWORD = '".$staffpass."'";

        $con ->query($query);

        $sucess = "Staff Member was sucessfully deleted!";

    } else {

        $passworderr = "Mismatching Passwords. Please Re-Enter the Passwords.";
    }

}
?>
<html>
<head>
    <title>Staff Deletion</title>
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

    <p>Please Fill out the Form below to delete an existing staff member.</p>

    <form method="post">
        <div style="font-size:small">
            Staff Username:
            <input type="text" name="deletestaffuser" required />
            <br />
            <br />
            Staff Password:
            <input type="password" name="deletestaffpass" required />
            <br />
            <br />
            Retype Password:
            <input type="password" name="deleteretypestaffpass" required />
            <p class="error">
                <?php echo $passworderr; ?>
            </p>
        </div>
        <br />
        <input type="submit" name="deletestaffsubmit" value="Submit" />
        <br />
        <p>
            <?php echo $sucess; ?>
        </p>

    </form>



</body>
</html>