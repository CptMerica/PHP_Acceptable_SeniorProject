
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
        <select name="EducationSelect">
            <option> </option>
            <option value="None"> None</option>
            <option value="GED"> GED </option>
            <option value="High School Diploma"> High School Diploma </option>
            <option value="Associate Degress"> Associate Degree </option>
            <option value="Bachelor Degree"> Bachelor Degree </option>
            <option value="Master Degree"> Master Degree</option>
            <option value="Doctorate Degree"> Doctorate Degreee </option>
        </select>

        <p>County of Residence:</p>
        <select name="CountySelect">
            <option> </option>
            <option value="Washington"> Washington </option>
            <option value="Fayette"> Fayette </option>
            <option value="Westmoreland"> Westmoreland </option>
            <option value="Allegheny"> Allegheny </option>
            <option value="Indiana"> Indiana </option>
            <option value="Beaver"> Beaver </option>
            <option value="Butler"> Butler </option>
            <option value="Greene"> Greene </option>
            <option value="Other"> Other </option>
        </select>

        <p>Employment Status:</p>
        <select name="EmploymentSelect">
            <option> </option>
            <option value="Unemployed"> Unemployed </option>
            <option value="Employed"> Employed </option>
            <option value="Dislocated"> Dislocated</option>
        </select>

        <p>Office Location:</p>
        <select name="LocationSelect">
            <option value="Mon Valley"> Mon Valley </option>
            <option value="Washington"> Washington </option>
            <option value="Beaver"> Beaver </option>
            <option value="Greene"> Greene </option>
        </select>

        <p>Purpose of Visit:</p>
        

        <select name="ReasonSelect">
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

        <input type="button" onclick="window.location = 'registrationthanks.php'" class="Redirect" value="Submit" />
       

    </form>

</body>


<?php 

require_once('databaseConnection.php');


if(isset($_POST['submit'])){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $last4ssn = $_POST['ssnumber'];
    $education = $_POST["EducationSelect"];
    $employment = $_POST["EmploymentSelect"];
    $residence = $_POST["CountySelect"];
    $office = $_POST["LocationSelect"];
    $visit = $_POST["ReasonSelect"];
    $sql = "INSERT INTO WORKER(F_NAME,L_NAME,LAST_4_SSN,EDUCATION,STATUS,COUNTY_RESIDENCE,OFFICE_LOCATION,VISIT_PURPOSE) VALUES('$first_name','$last_name','$last4ssn', '$education' ,'$employment' ,'$residence' ,'$office', '$visit')";

    $con ->query($sql);

    if($con ->error){
        echo $con->error;
    }else{
        echo 'Insert Successful';
    }

    
   
    
}

?>

