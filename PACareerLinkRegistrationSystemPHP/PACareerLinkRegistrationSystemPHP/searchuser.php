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

                <input type="button" onclick="window.location = 'populateInfo.php'" class="Redirect" value="Search" />

        </form>



    </class:registration>

</body>
</html>
<?php 

require_once('databaseConnection.php');


if(isset($_POST['submit'])){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $last4ssn = $_POST['ssnumber'];
    
    $sql = "SELECT F_NAME, L_NAME, LAST_4_SSN FROM WORKER WHERE F_NAME=fname, L_NAME=lname, LAST_4_SSN=ssnumber ";
    $result = $con ->query($sql);

    if($result ->num_rows >0){
        //output data of each row
        while($row = $result->fetch_assoc()){
            echo "Fist Name: ". $row["F_NAME"]. "<br>".
            "Last Name: ". $row["L_Name"]. "<br>".
            "Last four of Social Security: ". $row["Last_4_SSN"]. "<br>";
        }
       
    }else{
        echo 'No Results found';
    }

    
    
    
}

?>