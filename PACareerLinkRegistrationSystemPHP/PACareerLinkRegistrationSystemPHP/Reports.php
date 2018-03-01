
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
            <li><a href="home.php">Home</a></li>
            <li><a href="admin.php">Back</a></li>
            <li style="float:right"><a>Help</a></li>
        </ul>
    </div>

    <class:reports align="center">

        <h2> Report Form</h2>
        <h2> Please fill out the from with the information you would like to build a report with. </h2>
        <form>
            Location:
            <select id="LocationReportSelect">
                <option> </option>
                <option> Beaver </option>
                <option> Washington </option>
                <option> Mon Valley </option>
                <option> Greene </option>
            </select>
            <br />
            <br />
            Workers Education:
            <select id="EducationReportSelect">
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
            <select id="CountyReportSelect">
                <option> </option>
                <option> Washington </option>
                <option> Fayette </option>
                <option> Westmoreland </option>
                <option> Allegheny </option>
                <option> Indiana </option>
                <option> Beaver </option>
                <option> Butler </option>
                <option> Greene </option>
            </select>
            <br>
            <br />
            Employement Status:
            <select id="EmploymentReportSelect">
                <option> </option>
                <option> Unemployed </option>
                <option> Employed </option>
                <option> Dislocated</option>
            </select>
            <br>
            <br />
            Select Person over 55?
            <select id="Over55ReportSelect">
                <option></option>
                <option> Yes </option>
                <option> No </option>
            </select>
            Select Youth?
            <select id="YouthReportSelect">
                <option></option>
                <option> Yes </option>
                <option> No </option>
            </select>
            Select Veteran?
            <select id="VetReportSelect">
                <option></option>
                <option> Yes </option>
                <option> No </option>
            </select>
            Recieving Food Stamps?
            <select id="FoodStampsReportSelect">
                <option></option>
                <option> Yes </option>
                <option> No </option>
            </select>
            Recieving Government Assistance?
            <select id="GovAssistanceReportSelect">
                <option> </option>
                <option> Yes </option>
                <option> No </option>
            </select>
        </form>
        <p align="center">
        <input type="button" onclick="window.location = 'ReportResults.php'" class="Redirect" value="Submit" />
            </p>

    </class:reports>
</body>
</html>