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
                <p>Education: </p>
                <select id="EducationSelect">
                    <option> </option>
                    <option> None < </option>
                    <option> GED </option>
                    <option> High School Diploma </option>
                    <option> Associate's Degree </option>
                    <option> Bachelor's Degree </option>
                    <option> Master's Degree</option>
                    <option> Doctorate's </option>
                </select>

                <p>County of Residence:</p>
                <select id="CountySelect">
                    <option> </option>
                    <option> Washington </option>
                    <option> Fayette </option>
                    <option> Westmoreland </option>
                    <option> Allegheny </option>
                    <option> Indiana </option>
                    <option> Beaver </option>
                    <option> Butler </option>
                    <option> Greene </option>
                    <option> Other </option>
                </select>

                <p>Employment Status:</p>
                <select id="EmploymentSelect">
                    <option> </option>
                    <option> Unemployed </option>
                    <option> Employed </option>
                    <option> Dislocated</option>
                </select>
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

                <p>Are you a veteran? </p>
                <ul>
                    <li>Yes <input id="VetYes" type="checkbox" /></li>
                    <li>No <input id="VetNo" type="checkbox" /></li>
                </ul>

                <p>Are you over 55?</p>
                <ul>
                    <li>Yes <input id="OverYes" type="checkbox" /></li>
                    <li>No <input id="OverNo" type="checkbox" /></li>
                </ul>
                <br />

                <p>Are you between the ages of 14 and 24?</p>
                <ul>
                    <li>Yes <input id="YouthYes" type="checkbox" /></li>
                    <li>No <input id="YouthNo" type="checkbox" /></li>
                </ul>
                <br />

                <p>Are you receiving Government Assistance?</p>
                <ul>
                    <li>Yes <input id="GovAssistYes" type="checkbox" /></li>
                    <li> No <input id="GovAssistNo" type="checkbox" /></li>
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


