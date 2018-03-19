
<head>
    <title> Welcome to Registration</title>

    <link href="styleSheet.css" rel="stylesheet" />

</head>
<body>
   
    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />

        <ul id="menu">
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="visitor.php">Back</a>
            </li>
            <li style="float:right">
                <a>Help</a>
            </li>
           
         </ul>

    <h2>Registration Form</h2>
    <p> Please Complete the form below to register. </p>        
    <form action="registrationForm.php" method="post">

        <p>First Name:<input name="fname" type="text" required/> </p>
        <p>Last Name: <input name="lname" type="text" required /></p>
        <p>Last 4 of Social Security Number: <input name="ssnumber" type="text" required /></p>
        <br />

        <p>Education: </p>
        <select name="EducationSelect" required>
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
        <select name="CountySelect" required>
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
        <select name="EmploymentSelect" required>
            <option> </option>
            <option value="Unemployed"> Unemployed </option>
            <option value="Employed"> Employed </option>
            <option value="Dislocated"> Dislocated</option>
        </select>

        <p>Office Location:</p>
        <select name="LocationSelect" required>
            <option> </option>
            <option value="Mon Valley"> Mon Valley </option>
            <option value="Washington"> Washington </option>
            <option value="Beaver"> Beaver </option>
            <option value="Greene"> Greene </option>
        </select>

        <p>Purpose of Visit:</p>
        <div style="font-size:12px">
            <p><input type="checkbox" value="apprenticeInfo" />Apprenticeship Information</p>
            <p><input type="checkbox" value="earn"/>EARN</p>
            <p><input type="checkbox" value="eduTraining"/>Education and Training</p>
            <p><input type="checkbox" value="empRecruit"/>Employer Recruitment</p>
            <p><input type="checkbox" value="empTest"/>Employment Testing</p>
            <p><input type="checkbox" value="gedAdult"/>GED/Adult Remediation</p>
            <p><input type="checkbox" value="jobgateway" />JobGateway Enrollment</p>
            <p><input type="checkbox" value="jobOrder"/>Job Order Listing</p>
            <p><input type="checkbox" value="jobSearch"/>Job Search/Application</p>
            <p><input type="checkbox" value="ovr"/>OVR</p>
            <p><input type="checkbox" value="prepclass"/>Prep Class</p>
            <p><input type="checkbox" value="schedapt"/>Scheduled Appointment</p>
            <p><input type="checkbox" value="uchotline"/> UC Hotline</p>
            <p><input type="checkbox" value="workshop"/>Workshop</p> 
        </div>
        



        <select name="ReasonSelect" required>
            <option> </option>

      
   
        </select>
                
       <br />

        <p>Are you a veteran? </p>
        <select name="VetSelect" required>
            <option> </option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <p>Are you over 55?</p>
        <select name="Over55Select" required>
            <option> </option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>


        <p>Are you between the ages of 14 and 24?</p>
        <select name="14to24Select" required>
            <option> </option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <br />

        <p>Do you receive food stamps?</p>
        <select name="FoodStampsSelect" required>
            <option> </option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
        <br />
        <p>Are you receiving Government Assistance?</p>
        <select name="GovAssistanceSelect" required>
            <option> </option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>

        <br />
        <br />

        <input type="submit" name="submit" value="Submit" />
       

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
    $vet = $_POST['VetSelect'];
    $over55 = $_POST['Over55Select'];
    $youth14to24 = $_POST['14to24Select'];
    $govtasst = $_POST['GovAssistanceSelect'];
    $foodstamps = $_POST['FoodStampsSelect'];

    $sql = "INSERT INTO WORKER(F_NAME,L_NAME,LAST_4_SSN,GOV_ASST,FOOD_STAMPS,OFFICE_LOCATION,COUNTY_RESIDENCE,EDUCATION,STATUS,VISIT_PURPOSE,OVER_55,VET_STATUS,YOUTH_STATUS) VALUES('$first_name','$last_name','$last4ssn', '$govtasst' ,'$foodstamps' ,'$office' ,'$residence', '$education','$employment','$visit', '$over55', '$vet', '$youth14to24')";

    $con ->query($sql);

    if($con ->error){
        echo $con->error;
    }else{
        echo 'Insert Successful';
    }

    
    header("location:registrationthanks.php"); 
    
}

?>

