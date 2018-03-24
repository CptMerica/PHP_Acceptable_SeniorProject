<?php

            require 'databaseConnection.php';

            $barcode=$_POST['scancard'];
            $visitreason =$_POST['ReasonSelect'];
            $office = $_POST['LocationSelect'];
            if(isset($_POST['submit'])){

                $query="SELECT * FROM VISITOR WHERE barcode_num=$barcode";

                $result = mysqli_query($con, $query);
                $num_rows = mysqli_num_rows($result);
                if($num_rows > 0){
                    mysqli_query($con,"INSERT INTO TRANSACTION(BARCODE_NUM, OFFICE_LOCATION,VISIT_REASON)VALUES('$barcode', '$office', '$visitreason')");
                    echo 'insert sucessful';

                }
                else{
                    echo "Invalid Code. Please re-scan your card ";
                }


            }


            function fname($barcode)
            {

                $hostname = "www.scwdbpacl.com";
                $username="terhorst";
                $password="password";
                $dbname="paclregdb";

                 $con = mysqli_connect($hostname, $username, $password, $dbname);
                 $query = "SELECT F_NAME FROM VISITOR;";
                $fnameresult = mysqli_query($con, $query);

                return $fnameresult;
            }

            $fname = fname($barcode);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Thank You</title>
    <meta charset="utf-8" />
    <link href="StyleSheet.css" rel="stylesheet" />

</head>
<body>
    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
    <div>
        <ul id="menu">
            <li>  <a href="home.php">Home</a>  </li>
            <li> <a href="registrationForm.php">Back</a></li>
             <li style="float:right"> <a>Help</a></li>
        </ul>
    </div>

    <h2> Thanks for Registering!</h2>
    <p>Visitor Information:</p>
    <br />
    
    <p>Visitor Code: <?php echo $barcode; ?></p>
    <p>First Name: <?php echo $fname;?></p>
    <p>Last Name:<?php echo $barcode; ?></p>
    <p>Reason for Visit: <?php echo $visitreason; ?></p>

    <p align="center">
        <input type="button" onclick="window.location = 'visitor.php'" class="Redirect" value="Close" />
    </p>

</body>

</html>

