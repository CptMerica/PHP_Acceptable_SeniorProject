<?php
 if(isset($_POST['fnamesearch'])){
    $fnameToSearch = $_POST['firstnamesearch'];

    $query = "SELECT * FROM VISITOR WHERE F_NAME = '".$fnameToSearch."'";

    $search_result = filterTable($query);

}    else if(isset($_POST['lnamesearch']))
{
    $lnameToSearch = $_POST['lastnamesearch'];

    $query = "SELECT * FROM VISITOR WHERE L_NAME = '".$lnameToSearch."'";

    $search_result = filterTable($query);
    

} else if(isset($_POST['l4ssnsearch']))
    {
        $l4ssnToSearch = $_POST['last4ssnsearch'];

        $query = "SELECT * FROM VISITOR WHERE LAST_4_SSN = '".$l4ssnToSearch."'";

        $search_result = filterTable($query);



}else if(isset($_POST['EDUsearch']))
{
    $educationToSearch = $_POST['EducationReportSelect'];

    $query = "SELECT * FROM VISITOR WHERE EDU_STATUS = '".$educationToSearch."'";

    $search_result = filterTable($query);


} else if (isset($_POST['countysearch'])){

    $countyToSearch = $_POST['CountyReportSelect'];

    $query = "SELECT * FROM VISITOR WHERE COUNTY_RESIDENCE = '".$countyToSearch."'";

    $search_result = filterTable($query);


} else if (isset($_POST['empstatussearch'])){

    $empstatusToSearch = $_POST['EmploymentReportSelect'];

    $query = "SELECT * FROM VISITOR WHERE EMP_STATUS = '".$empstatusToSearch."'";

    $search_result = filterTable($query);


} else if(isset($_POST['barcodesearch'])){
 
    $barcodetosearch = $_POST['bcodesearch'];

    $query = "SELECT * FROM VISITOR WHERE BARCODE_NUM = '".$barcodetosearch."'";

    $search_result = filterTable($query);
    

}else if (isset($_POST['55search'])){

    $over55ToSearch = $_POST['Over55ReportSelect'];

    $query = "SELECT * FROM VISITOR WHERE OVER_55= '".$over55ToSearch."'";

    $search_result = filterTable($query);

} else if (isset($_POST['youthsearch'])){

    $youthToSearch = $_POST['YouthReportSelect'];

    $query = "SELECT * FROM VISITOR WHERE YOUTH_STATUS = '".$youthToSearch."'";

    $search_result = filterTable($query);
} else if (isset($_POST['vetsearch'])){

    $vetToSearch = $_POST['VetReportSelect'];

    $query = "SELECT * FROM VISITOR WHERE VET_STATUS = '".$vetToSearch."'";

    $search_result = filterTable($query);
} else if (isset($_POST['fssearch'])){

    $fsToSearch = $_POST['FoodStampsReportSelect'];

    $query = "SELECT * FROM VISITOR WHERE FOOD_STAMPS = '".$fsToSearch."'";

    $search_result = filterTable($query);

} else if (isset($_POST['govasstsearch'])){

    $govToSearch = $_POST['GovAssistanceReportSelect'];

    $query = "SELECT * FROM VISITOR WHERE GOVT_ASST = '".$govToSearch."'";

    $search_result = filterTable($query);

} else if(isset($_POST['reset'])){
    
    $query = "SELECT * FROM `VISITOR`";
    $search_result = filterTable($query);
}


    else {

        $query = "SELECT * FROM `VISITOR`";
        $search_result = filterTable($query);

    }



function filterTable($query)
{
    $hostname = "www.scwdbpacl.com";
    $username="terhorst";
    $password="password";
    $dbname="paclregdb";

    $con = mysqli_connect($hostname, $username, $password, $dbname);


    $filter_Result = mysqli_query($con, $query);

    return $filter_Result;

}


?>

<html>
<head>
    <title>PACL Reports</title>
    <link href="styleSheet.css" rel="stylesheet" />
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

            <li style="float:right">
                <a>Help</a>
            </li>

        </ul>
    </div>
    <br />
    <form action="reports.php" method="post">
        
        
        <div class="reportTableDiv">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Barcode Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Last 4 SSN</th>
                    <th>Residing County</th>
                    <th>Education</th>
                    <th>Employment Status</th>
                    <th>Veteran Status</th>
                    <th>Over 55</th>
                    <th>Between 14 and 24</th>
                    <th>Government Assistance</th>
                    <th>Food Stamps</th>
                </tr><?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['VISITOR_ID'];?>
                    </td>
                    <td><?php echo $row['BARCODE_NUM'];?>
                    </td>
                    <td><?php echo $row['F_NAME'];?>
                    </td>
                    <td><?php echo $row['L_NAME'];?>
                    </td>
                    <td><?php echo $row['LAST_4_SSN'];?>
                    </td>
                    <td><?php echo $row['COUNTY_RESIDENCE'];?>
                    </td>
                    <td><?php echo $row['EDU_STATUS'];?>
                    </td>
                    <td><?php echo $row['EMP_STATUS'];?>
                    </td>
                    <td><?php echo $row['VET_STATUS'];?>
                    </td>
                    <td><?php echo $row['OVER_55'];?>
                    </td>
                    <td><?php echo $row['YOUTH_STATUS'];?>
                    </td>
                    <td><?php echo $row['GOVT_ASST'];?>
                    </td>
                    <td><?php echo $row['FOOD_STAMPS'];?>
                    </td>
                </tr><?php endwhile;?>
            </table>

        </div>
        
        <input type="submit" name="reset" value="Reset"/>
        <br />
        
        
        
        <p>Please select one category to search.</p>
        
        <div style="font-size:small">
            Barcode Number:
            <input type="text" name="bcodesearch" />
            <input type="submit" name="barcodesearch" value="Search" />
        </div>
        <br />
            <div style="font-size:small">
                First Name:
                <input type="text" name="firstnamesearch" />
                <input type="submit" name="fnamesearch" value="Search" />
            </div>
            <br />
        <div style="font-size:small">
            Last Name:
            <input type="text" name="lastnamesearch" />
            <input type="submit" name="lnamesearch" value="Search" />
        </div>
            <br />
        <div style="font-size:small">
            Last 4 SSN:
            <input type="text" name="last4ssnsearch" />
            <input type="submit" name="l4ssnsearch" value="Search" />
        </div>
            <br />
        <div style="font-size:small">
            Site Location:
            <select name="OfficeLocationReportSelect">
                <option> </option>
                <option value="Mon Valley"> Mon Valley </option>
                <option value="Washington"> Washington </option>
                <option value="Beaver"> Beaver </option>
                <option value="Greene"> Greene </option>
            </select>
            <input type="submit" name="locationsearch" value="Search" />
        </div>
            <br />

        <div style="font-size:small">
            Education:
            <select name="EducationReportSelect">
                <option> </option>
                <option value="None"> None</option>
                <option value="GED"> GED </option>
                <option value="High School Diploma"> High School Diploma </option>
                <option value="Associates Degree"> Associate's Degree </option>
                <option value="Bachelors Degree"> Bachelor's Degree </option>
                <option value="Masters Degree"> Master's Degree</option>
                <option value="Doctorate Degree"> Doctorate Degreee </option>
            </select>
            <input type="submit" name="EDUsearch" value="Search" />
        </div>
            <br />

        <div style="font-size:small">
            County of Residence:
            <select name="CountyReportSelect">
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
            <input type="submit" name="countysearch" value="Search" />
        </div>
            <br>
        <div style="font-size:small">
            Employment Status:
            <select name="EmploymentReportSelect">
                <option> </option>
                <option> Unemployed </option>
                <option> Employed </option>
                <option> Dislocated</option>
            </select>
            <input type="submit" name="empstatussearch" value="Search" />
        </div>
        
        <br />
        <div style="font-size:small">
            People over 55:
            <select name="Over55ReportSelect">
                <option></option>
                <option> Yes </option>
                <option> No </option>
            </select>
            <input type="submit" name="55search" value="Search" />
        </div>
            <br />

        <div style="font-size:small">
            People between 14 and 24:
            <select name="YouthReportSelect">
                <option></option>
                <option> Yes </option>
                <option> No </option>
            </select>
            <input type="submit" name="youthsearch" value="Search" />
        </div>
            <br />

        <div style="font-size:small">
            Veteran Status:
            <select name="VetReportSelect">
                <option></option>
                <option> Yes </option>
                <option> No </option>
            </select>
            <input type="submit" name="vetsearch" value="Search" />
        </div>
            <br />
        <div style="font-size:small">
            Recieving Food Stamps:
            <select name="FoodStampsReportSelect">
                <option></option>
                <option> Yes </option>
                <option> No </option>
            </select>
            <input type="submit" name="fssearch" value="Search" />
        </div>
            <br />

        <div style="font-size:small">
            Recieving Government Assistance:
            <select name="GovAssistanceReportSelect">
                <option> </option>
                <option> Yes </option>
                <option> No </option>
            </select>
            <input type="submit" name="govasstsearch" value="Search" />
        </div>
        
    </form>

</body>
</html>