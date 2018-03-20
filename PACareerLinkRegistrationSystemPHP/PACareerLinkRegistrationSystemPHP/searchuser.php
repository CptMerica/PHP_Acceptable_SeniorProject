<!DOCTYPE html>
<html>
<head>
    <title> Welcome to Registration</title>
    <meta charset="utf-8" />

    <link href="StyleSheet.css" rel="stylesheet" />

</head>
<body>

    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />

    <div>
        <ul id="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="returnvisitor.php">Back</a></li>
            <li style="float:right"><a>Help</a></li>
        </ul>
    </div>

    <class:registration align="center">

        <h2> Search User Form</h2>
        <p> Please Complete the form below to search for your profile. </p>
        <form method="post">
            <class:registration>

                <p>First Name:<input name="fname" type="text" /> </p>
                <p>Last Name: <input name="lname" type="text" /></p>
                <p>Last 4 of Social Security Number: <input name="ssnumber" type="text" /></p>
                <br />

                <br />

                <input type="submit" name="submit" value="Search" />

        </form>



    </class:registration>

</body>
</html>

<?php
require_once('databaseConnection.php');
if(isset ($_POST{'submit'}))
{
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$last4ssn = $_POST['ssnumber'];
$query="SELECT F_NAME, L_NAME, LAST_4_SSN FROM WORKER WHERE LAST_4_SSN = '".$last4ssn."'";
$result = $con->query($query);
if ($result->num_rows > 0) {
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>LAST 4 SSN</th></tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>".$row["F_NAME"]."</td><td>".$row["L_NAME"]."</td><td>".$row["LAST_4_SSN"]."</td></tr>";
}
echo "</table>";
}
else
{
echo "0 results";
}
}

?>

<html>

<head>
    
    </head>
<body>
    <br />
    <input type="button" onclick="window.location = 'populateInfo.php'" class="Redirect" value="Update" />

</body>
 
</html>




