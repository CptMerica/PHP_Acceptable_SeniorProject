<!DOCTYPE html>
<html>
<head>
    <title> Welcome to Registration</title>
    <meta charset="utf-8" />

    <link href="StyleSheet.css" rel="stylesheet" />
    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
</head>
<body>
    <class:registration align="center">

        <h2> Registration Form</h2>
        <p> Please Complete the form below to register. </p>
        <form method="post">
            <class:registration>

                <p>First Name:<input name="fname" type="text" /> </p>
                <p>Last Name: <input name="lname" type="text" /></p>
                <p>Last 4 of Social Security Number: <input name="ssnumber" type="text" /></p>
                <br />

                <p>Purpose of Visit:</p>
                <ul>
                    <li>EARN<input id="Earn" type="checkbox" /></li>
                    <li>Apprenticeship Information <input id="ApprenticeInfo" type="checkbox" /></li>
                    <li>Prep Class<input id="PrepClass" type="checkbox" /></li>
                    <li>Education and Training<input id="Education_Training" type="checkbox" /></li>
                    <li>Scheduled Appointment<input id="SchedApt" type="checkbox" /></li>
                    <li>Employer Recruitment<input id="EmpRecruit" type="checkbox" /></li>
                    <li>Employment Testing<input id="EmpTrain" type="checkbox" /></li>
                    <li>GED/Adult Remediation<input id="GED_Adult" type="checkbox" /></li>
                    <li>UC Hotline<input id="UCHotline" type="checkbox" /></li>
                    <li>Job Order Listing<input id="JobOrder" type="checkbox" /></li>
                    <li>Workshop<input id="Workshop" type="checkbox" /></li>
                    <li>Job Search/Application<input id="JobSearch" type="checkbox" /></li>
                    <li>JobGateway Enrollment<input id="JobGatewayEnroll" type="checkbox" /></li>
                    <li>OVR<input id="OVR" type="checkbox" /></li>
                </ul>

                <br />

                <input type="button" onclick="window.location = 'Registration Thanks.php'" class="Redirect" value="Submit" />

        </form>



    </class:registration>
    <p align="bottomright">
        Created by GJEF
    </p>
</body>
</html>
