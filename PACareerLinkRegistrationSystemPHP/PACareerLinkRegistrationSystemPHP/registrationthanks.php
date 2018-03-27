

<?php


include 'databaseConnection.php';




if(isset($_POST['submit'])){

    $barcode=$_POST['scancard'];
    $visitreason =$_POST['ReasonSelect'];
    $office = $_POST['LocationSelect'];

    //email
    $washmsg = "There is a new visitor in the waiting room. Please assist them as soon as possible. Reason for Visit:   ".$visitreason ;
    $mvmsg = "There is a new visitor in the waiting room. Please assist them as soon as possible. Reason for Visit:   ".$visitreason ;
    $beavermsg ="There is a new visitor in the waiting room. Please assist them as soon as possible. Reason for Visit:   ".$visitreason ;
    $greenemsg = "There is a new visitor in the waiting room. Please assist them as soon as possible. Reason for Visit:   ".$visitreason ;

    $washmsg = wordwrap($washmsg,70);
    $mvmsg = wordwrap($mvmsg,70);
    $beavermsg = wordwrap($beavermsg,70);
    $greenemsg = wordwrap($greenemsg,70);
    if($office == "Washington"){
        mail("stephenterhorst412@gmail.com","New Visitor (Washingtion)",$washmsg);
        mail("celticmania09@hotmail.com","New Visitor (Washingtion)",$washmsg);
    } elseif($office == "Mon Valley"){
        mail("stephenterhorst412@gmail.com","New Visitor (Mon Valley)",$mvmsg);
        mail("celticmania09@hotmail.com","New Visitor (Mon Valley)",$mvmsg);
    }elseif($office == "Beaver"){
        mail("stephenterhorst412@gmail.com","New Visitor (Beaver)",$beavermsg);
        mail("celticmania09@hotmail.com","New Visitor (Beaver)",$beavermsg);
    }elseif($office == "Greene"){
        mail("stephenterhorst412@gmail.com","New Visitor (Greene)",$greenemsg);
        mail("celticmania09@hotmail.com","New Visitor (Greene)",$greenemsg);
    }



    $query="SELECT * FROM VISITOR WHERE barcode_num=$barcode";
    $result = mysqli_query($con, $query);

    $num_rows = mysqli_num_rows($result);
    if($num_rows > 0){

        mysqli_query($con,"INSERT INTO TRANSACTION(BARCODE_NUM, OFFICE_LOCATION,VISIT_REASON)VALUES('$barcode', '$office', '$visitreason')");

    }
    else{
        echo "Invalid Code. Please re-scan your card ";
    }



    //email template


    // Send email

}




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

    <p style="font-size:25px;">You have sucessfully signed in!</p>
    <br />
    <p style="font-size:20px";>Visitor Information:</p>
    <p>Visitor Code: <?php echo $barcode ?></p>
    <p>First Name: <?php echo $fname ?></p>
    <p>Last Name:<?php ?></p>
    <p>Reason for Visit: <?php echo $visitreason; ?></p>

    <p align="center">
        <input type="button" onclick="window.location = 'visitor.php'" class="Redirect" value="Close" />
    </p>

</body>

</html>

