<?php

?>

<head>
    <title>Update Visitor Info</title>

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


    <h2 style="font-size:25px">Update Information</h2>
    <p style="font-size:20px;"> Please complete the form below. </p>
    <form action="registrationForm.php" method="post">
        <p style="font-size:16px;">Click inside the "SCAN CARD" box and scan your card.</p>
        <p style="font-size:16px;">Your Visitor Code will appear inside the box if scanned correctly.</p>
        <p>SCAN CARD: <input name="scancard" type="text" maxlength="9" pattern=".{9,}" required title="Scan Card code must be 9 digits!" /><?php echo $barcodeerror; ?></p>
        <p>First Name:<input name="fname" type="text" style="text-transform: capitalize;" required /> </p>
        <p>Last Name: <input name="lname" type="text" style="text-transform: capitalize;" required /></p>
        <p>Last 4 of Social Security Number: <input name="ssnumber" type="text" maxlength="4" pattern=".{4,}" required title="SSN must be 4 digits!" /><?php echo $last4ssnerror; ?></p>
        <br />

        <p>Education: </p>
        <select name="EducationSelect" required>
            <option> </option>
            <option value="None"> None</option>
            <option value="GED"> GED </option>
            <option value="High School Diploma"> High School Diploma </option>
            <option value="Associates Degree"> Associate's Degree </option>
            <option value="Bachelors Degree"> Bachelor's Degree </option>
            <option value="Masters Degree"> Master's Degree</option>
            <option value="Doctorate Degree"> Doctorate Degree </option>
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



