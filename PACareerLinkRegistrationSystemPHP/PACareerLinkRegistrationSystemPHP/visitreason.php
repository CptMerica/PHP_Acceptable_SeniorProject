<!DOCTYPE html>
<html>
<head>
    <title> Welcome to Registration</title>
    <meta charset="utf-8" />

    <link href="StyleSheet.css" rel="stylesheet" />
    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
</head>
<body>
    <div>
        <ul id="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="visitor.php">Back</a></li>
            <li style="float:right"><a>Help</a></li>
        </ul>
    </div>
    <p:titlebar>
        <input type="button" onclick="window.location = 'home.php'" class="Redirect" value="Home" />
        <input type="button" onclick="window.location = 'returnvisitor.php'" class="Redirect" value="Back" />
    </p:titlebar>
    <class:registration align="center">

        <h2> Visit Reason</h2>
        <p> Please Complete the form so we know how to assist you today. </p>
        <form method="post">
            <class:registration>

                <p>First Name:<input name="fname" type="text" /> </p>
                <p>Last Name: <input name="lname" type="text" /></p>
                <p>Last 4 of Social Security Number: <input name="ssnumber" type="text" /></p>
                <br />

                <p>Purpose of Visit:</p>


                <select name="ReasonSelect" required>
                    <option> </option>
                    <option value="ApprenticeInfo"> Apprenticeship Information </option>
                    <option value="Earn"> EARN </option>
                    <option value="Education_Training"> Education and Training </option>
                    <option value="EmpRecruit"> Employer Recruitment </option>
                    <option value="EmpTrain"> Employment Testing </option>
                    <option value="GED_Adult"> GED/Adult Remediation </option>
                    <option value="JobGatewayEnroll"> JobGateway Enrollment </option>
                    <option value="JobOrder"> Job Order Listing </option>
                    <option value="JobSearch"> Job Search/Application </option>
                    <option value="OVR"> OVR </option>
                    <option value="PrepClass"> Prep Class </option>
                    <option value="SchedApt"> Scheduled Appointment </option>
                    <option value="UCHotline"> UC Hotline </option>
                    <option value="Workshop"> Workshop </option>
                </select>

                <br />

                <input type="button" onclick="window.location = 'registrationthanks.php'" class="Redirect" value="Submit" />

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
   $visit = $_POST["ReasonSelect"];

    $sql = "INSERT INTO WORKER(F_NAME,L_NAME,LAST_4_SSN,VISIT_PURPOSE) VALUES('$first_name','$last_name','$last4ssn','$visit')";

    $con ->query($sql);

    if($con ->error){
        echo $con->error;
    }else{
        echo 'Insert Successful';
    }

    
    
    
}

?>