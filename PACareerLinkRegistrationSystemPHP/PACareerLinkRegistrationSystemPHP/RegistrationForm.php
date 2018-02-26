
<head>
    <title> Welcome to Registration</title>

    <link href="StyleSheet.css" rel="stylesheet" />

</head>
<body>
   
    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
    <p:titlebar>
        <input type="button" onclick="window.location = 'home.php'" class="Redirect" value="Home" />
        <input type="button" onclick="window.location = 'returnvisitor.php'" class="Redirect" value="Back" />
    </p:titlebar>
    <h2> Registration Form</h2>
    <p> Please Complete the form below to register. </p>

    <form action="registrationForm.php" method="post">

        <p>First Name:<input name="fname" type="text" /> </p>
        <p>Last Name: <input name="lname" type="text" /></p>
        <p>Last 4 of Social Security Number: <input name="ssnumber" type="text" /></p>
        <br />
        <p>Education: </p>
        <select id="EducationSelect">
            <option> </option>
            <option> None</option>
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
            <li><input id="Earn" type="checkbox" />EARN</li>
            <li><input id="ApprenticeInfo" type="checkbox" />Apprenticeship Information </li>
            <li><input id="PrepClass" type="checkbox" />Prep Class</li>
            <li><input id="Education_Training" type="checkbox" />Education and Training</li>
            <li><input id="SchedApt" type="checkbox" />Scheduled Appointment</li>
            <li><input id="EmpRecruit" type="checkbox" />Employer Recruitment</li>
            <li><input id="EmpTrain" type="checkbox" />Employment Testing</li>
            <li><input id="GED_Adult" type="checkbox" />GED/Adult Remediation</li>
            <li><input id="UCHotline" type="checkbox" />UC Hotline</li>
            <li><input id="JobOrder" type="checkbox" />Job Order Listing</li>
            <li><input id="Workshop" type="checkbox" />Workshop</li>
            <li><input id="JobSearch" type="checkbox" />Job Search/Application</li>
            <li><input id="JobGatewayEnroll" type="checkbox" />JobGateway Enrollment</li>
            <li><input id="OVR" type="checkbox" />OVR</li>
        </ul>

        <br />

        <p>Are you a veteran? </p>
        <ul>
            <li><input id="VetYes" type="checkbox" />Yes</li>
            <li><input id="VetNo" type="checkbox" />No</li>
        </ul>

        <p>Are you over 55?</p>
        <ul>
            <li><input id="OverYes" type="checkbox" />Yes</li>
            <li><input id="OverNo" type="checkbox" />No</li>
        </ul>
        <br />

        <p>Are you between the ages of 14 and 24?</p>
        <ul>
            <li><input id="YouthYes" type="checkbox" />Yes</li>
            <li><input id="YouthNo" type="checkbox" />No</li>
        </ul>
        <br />

        <p>Are you receiving Government Assistance?</p>
        <ul>
            <li><input id="GovAssistYes" type="checkbox" />Yes</li>
            <li><input id="GovAssistNo" type="checkbox" />No</li>
        </ul>
        <br />

        <input type="submit" value="Submit" name="submit" />

    </form>

</body>


<?php 

require_once('databaseConnection.php');


if(isset($_POST['submit'])){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $last4ssn = $_POST['ssnumber'];
    
    $sql = "INSERT INTO WORKER(F_NAME,L_NAME,LAST_4_SSN) VALUES('$first_name','$last_name','$last4ssn')";

    $con ->query($sql);

    if($con ->error){
        echo $con->error;
    }else{
        echo 'Insert Successful';
    }

    
   
    
}

?>

