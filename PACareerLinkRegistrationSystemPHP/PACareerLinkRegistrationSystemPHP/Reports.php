
<!DOCTYPE html>
<html>
<head>
    <title> Reports Page</title>
    <meta charset="utf-8" />

    <link href="StyleSheet.css" rel="stylesheet" />

</head>
<body>

    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
    <div>
        <ul id="menu">
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="admin.php">Back</a>
            </li>
           
            <li>
                <a style="float:right">Help</a>
            </li>
          
        </ul>
    </div>


    <class:reports align="center">

        <h2> Report Form</h2>
        <h2> Please fill out the from with the information you would like to build a report with. </h2>
        <form method="post" id="reportform">
            Location:
            <select name="LocationReportSelect">
                <option> </option>
                <option> Beaver </option>
                <option> Washington </option>
                <option> Mon Valley </option>
                <option> Greene </option>
            </select>
            <br />
            <br />
            Workers Education:
            <select name="EducationReportSelect">
                <option> </option>
                <option> High School Diploma </option>
                <option> Associate Degree </option>
                <option> Bachelor </option>
                <option> Master </option>
                <option> Doctorate </option>
                <option> GED </option>
                <option> None </option>
            </select>
            <br />
            <br />
            County of Residence:
            <select name="CountyReportSelect">
                <option> </option>
                <option> Washington </option>
                <option> Fayette </option>
                <option> Westmoreland </option>
                <option> Allegheny </option>
                <option> Indiana </option>
                <option> Beaver </option>
                <option>Butler</option>
                <option> Greene </option>
            </select>
            <br>
            <br />
            Employement Status:
            <select name="EmploymentReportSelect">
                <option> </option>
                <option> Unemployed </option>
                <option> Employed </option>
                <option> Dislocated</option>
            </select>
            <br>
            <br />
            Select Person over 55?
            <select name="Over55ReportSelect">
                <option></option>
                <option> Yes </option>
                <option> No </option>
            </select>
            Select Youth?
            <select name="YouthReportSelect">
                <option></option>
                <option> Yes </option>
                <option> No </option>
            </select>
            Select Veteran?
            <select name="VetReportSelect">
                <option></option>
                <option> Yes </option>
                <option> No </option>
            </select>
            Recieving Food Stamps?
            <select name="FoodStampsReportSelect">
                <option></option>
                <option> Yes </option>
                <option> No </option>
            </select>
            Recieving Government Assistance?
            <select name="GovAssistanceReportSelect">
                <option> </option>
                <option> Yes </option>
                <option> No </option>
            </select>

            <p align="center">
                <input type="submit" onclick="window.location = 'ReportResults.php'" class="Redirect" value="Submit" name="submit" />
            </p>
        
        </form>


    </class:reports>
</body>
</html>

<?php 
    
require_once('databaseConnection.php');


    if (isset ($_POST['submit'])){
        
        $locationreport = $_POST['LocationReportSelect'];
        $educationreport = $_POST['EducationReportSelect'];
        $countyreport = $_POST['CountyReportSelect'];
        $empstatusreport = $_POST['EmploymentReportSelect'];
        $over55report = $_POST['Over55ReportSelect'];
        $youthreport = $_POST['YouthReportSelect'];
        $veteranreport = $_POST['VetReportSelect'];
        $foodstampreport = $_POST['FoodStampsReportSelect'];
        $govassistancereport = $_POST['GovAssistanceReportSelect'];

        $sql = "SELECT * FROM WORKER WHERE COUNTY_RESIDENCE = '".$countyreport."'";

        $result=$con ->query($sql);


        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo"Participant_ID:".$row["PARTICIPANT_ID"].  "First Name:" .$row["F_NAME"]. "Last Name:" .$row["L_NAME"]. "Last Four SSN:" .$row["LAST_4_SSN"]. "Government Assistance:" .$row["GOV_ASST"]. "Food Stamps:" .$row["FOOD_STAMPS"]. "Office Location:" .$row["OFFICE_LOCATION"]. "Residing County:" . $row["COUNTY_RESIDENCE"]. "Education:" .$row["EDUCATION"]. "EMP STATUS:" .$row["STATUS"]. "Vist Reason:" .$row["VISIT_PURPOSE"]. "<br>";
                
                
            }
        } else {
            echo "0 results";
        }

        
    }



?>