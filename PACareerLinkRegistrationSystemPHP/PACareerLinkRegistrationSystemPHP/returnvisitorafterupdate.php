<?php
require_once('databaseConnection.php');



if(isset($_POST['update'])){

    $barcode = $_POST['scancard'];

    $fname = $_POST['fname'];
    $updatefname = "UPDATE VISITOR SET F_NAME = '".$fname."' WHERE BARCODE_NUM = '".$barcode."'";

    $lname = $_POST['lname'];
    $updatelname = "UPDATE VISITOR SET L_NAME = '".$lname."' WHERE BARCODE_NUM = '".$barcode."'";

    $edu = $_POST['EducationSelect'];
    $updateedu = "UPDATE VISITOR SET EDU_STATUS = '".$edu."' WHERE BARCODE_NUM = '".$barcode."'";

    $county = $_POST['CountySelect'];
    $updatecounty = "UPDATE VISITOR SET COUNTY_RESIDENCE = '".$county."' WHERE BARCODE_NUM = '".$barcode."'";

    $employment = $_POST['EmploymentSelect'];
    $updateemployment = "UPDATE VISITOR SET EMP_STATUS ='".$employment."' WHERE BARCODE_NUM = '".$barcode."' ";

    $veteran = $_POST['VetStatus'];
    $updateveteran = "UPDATE VISITOR SET VET_STATUS = '".$veteran."' WHERE BARCODE_NUM = '".$barcode."' ";

    $over55 = $_POST['Over55Select'];
    $updateover55 = "UPDATE VISITOR SET OVER_55 ='".$over55."' WHERE BARCODE_NUM = '".$barcode."' ";

    $youth = $_POST['14to24Select'];
    $updateyouth = "UPDATE VISITOR SET YOUTH_STATUS = '".$youth."' WHERE BARCODE_NUM = '".$barcode."' ";

    $foodstamps = $_POST['FoodStampsSelect'];
    $updatefoodstamps = "UPDATE VISITOR SET FOOD_STAMPS = '".$foodstamps."' WHERE BARCODE_NUM = '".$barcode."' ";

    $govtasst = $_POST['GovAssistanceSelect'];
    $updategovtasst = "UPDATE VISITOR SET GOVT_ASST = '".$govtasst."' WHERE BARCODE_NUM = '".$barcode."' ";

    if (!empty($fname)){
        $con ->query($updatefname);
    }

    if(!empty($lname)){
        $con ->query($updatelname);
    }

    if(!empty($edu)){
        $con ->query($updateedu);
    }

    if (!empty($county)){
        $con ->query($updatecounty);
    }

    if(!empty($employment)){
        $con ->query($updateemployment);
    }

    if(!empty($veteran)){
        $con ->query($updateveteran);
    }

    if(!empty($over55)){
        $con ->query($updateover55);
    }

    if(!empty($youth)){
        $con ->query($updateyouth);
    }

    if(!empty($foodstamps)){
        $con ->query($updatefoodstamps);
    }

    if(!empty($govtasst)){
        $con ->query($updategovtasst);
    }
    
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <meta charset="utf-8" />

    <link href="StyleSheet.css" rel="stylesheet" />

</head>
<body>


    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />

    <div>
        <ul id="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="visitor.php">Back</a></li>
            <li style="float:right"><a>Help</a></li>
        </ul>
    </div>

    <p style="font-size:20px;">Sign In</p>

    <form method="post" action="regthanksafterupdate.php">
        
        <p>SCAN CARD: <?php echo $barcode; ?></p>

        <p>Please select the PA Career Link office you are currently at. </p>
        <select name="LocationSelect" required>
            <option> </option>
            <option value="Mon Valley"> Mon Valley </option>
            <option value="Washington"> Washington </option>
            <option value="Beaver"> Beaver </option>
            <option value="Greene"> Greene </option>
        </select>
        <br />
        <p>Please select the primary reason for your visit today.</p>
        <select name="ReasonSelect" required>
            <option> </option>
            <option value="Apprentice Information"> Apprenticeship Information </option>
            <option value="EARN"> EARN </option>
            <option value="Education Training"> Education and Training </option>
            <option value="Employer Recruitment"> Employer Recruitment </option>
            <option value="Employment Testing"> Employment Testing </option>
            <option value="GED/Adult Remediation"> GED/Adult Remediation </option>
            <option value="JobGateway Enrollment"> JobGateway Enrollment </option>
            <option value="Job Order Listing"> Job Order Listing </option>
            <option value="Job Search/Application"> Job Search/Application </option>
            <option value="OVR"> OVR </option>
            <option value="Prep Class"> Prep Class </option>
            <option value="Scheduled Appointment"> Scheduled Appointment </option>
            <option value="UC Hotline"> UC Hotline </option>
            <option value="Workshop"> Workshop </option>
        </select>
        <br />
        <br />
        <input type="submit" name="submit" />
    </form>


</body>
</html>