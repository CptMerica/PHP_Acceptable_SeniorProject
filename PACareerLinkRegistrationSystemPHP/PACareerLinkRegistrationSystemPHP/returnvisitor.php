


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
                  
    <form method="post" action="registrationthanks.php">
        <p>Click inside the "SCAN CARD" box and scan your card.</p>
        <p>Your Visitor Code will appear inside the box if scanned correctly.</p>
        <p style="font-size:14px;">SCAN CARD: <input name="scancard" type="text" required /></p>
        <br />
            <p>Please select the PA Career Link office you are currently at. </p>
            <select name="LocationSelect" required>
                <option> </option>
                <option value="Mon Valley"> Mon Valley </option>
                <option value="Washington"> Washington </option>
                <option value="Beaver"> Beaver </option>
                <option value="Greene"> Greene </option>
            </select>
            <br />
            <p >Please select the primary reason for your visit today.</p>
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