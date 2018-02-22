
<html>
<head>
    <title>Modify User</title>
    <link href="StyleSheet.css" rel="stylesheet" />

</head>

<body>


    <form method="post">
        <p>Enter the information you'd like to change. Click submit to save changes.</p>
          
        <br />
        <p>First Name:<input name="fname" type="text" /> </p>
        <p>Last Name: <input name="lname" type="text" /></p>
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
        <br />
        
        <input id="Submit1" type="submit" value="submit" onclick="ReturningUser.php"/>

    </form>
</body>

</html>


<?php

?>