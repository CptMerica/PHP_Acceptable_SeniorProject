<?php
require ('databaseConnection.php');

$fname = $_POST['vfname'];
$lname = $_POST['vlname'];
$last4ssn = $_POST['vlast4ssn'];
if(isset($_POST['searchscansubmit'])){


    $query = "SELECT * FROM VISITOR WHERE F_NAME = '".$fname."' AND L_NAME = '".$lname."' AND LAST_4_SSN = '".$last4ssn."'";

   $result = mysqli_query($con,$query);



        

    }
?>

<html>
<head>
    <title>Scan Card Search</title>
    <link href="styleSheet.css" rel="stylesheet" />
</head>

<body>
    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />

    <ul id="menu">
        <li>
            <a href="home.php">Home</a>
        </li>
        <li>
            <a href="home.php">Back</a>
        </li>
        <li style="float:right">
            <a>Help</a>
        </li>

    </ul>

    <p>Complete the form to find the visitors scan card number.</p>

    <form method="post">
        <div style="font-size:small">
            First Name:
            <input type="text" name="vfname" required/>
            <br />
            <br />
            Last Name:
            <input type="text" name="vlname" required/>
            <br />
            <br />
            Last 4 SSN:
            <input type="text" name="vlast4ssn" required/>
        </div>
        <br />
        <input type="submit" name="searchscansubmit" value="Search" />
        <br />
        <br />
       
      <p>  <?php while($row = mysqli_fetch_array($result)) {

                     echo "Barcode Number: " .$row['BARCODE_NUM'];
                 }
                     
                 

           ?> </p>   
    </form>



</body>
</html>