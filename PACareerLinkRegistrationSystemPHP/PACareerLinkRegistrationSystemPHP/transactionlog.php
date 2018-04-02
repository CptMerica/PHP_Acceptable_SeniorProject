<?php
require 'databaseConnection.php';

if(isset($_POST['barcodesearch'])){
    $barcodeToSearch = $_POST['bcodesearch'];

    $query = "SELECT * FROM TRANSACTION WHERE BARCODE_NUM = '".$barcodeToSearch."'";

    $search_result = filterTable($query);

}
else if(isset($_POST['visitreasonsearch'])){
    $visitreasonToSearch = $_POST['vreasonsearch'];

    $query = "SELECT * FROM TRANSACTION WHERE VISIT_REASON = '".$visitreasonToSearch."'";

    $search_result = filterTable($query);

}else if(isset($_POST['officelocationsearch'])){
    $visitreasonToSearch = $_POST['olocationsearch'];

    $query = "SELECT * FROM TRANSACTION WHERE OFFICE_LOCATION = '".$visitreasonToSearch."'";

    $search_result = filterTable($query);

}else if(isset($_POST['reset'])){

    $query = "SELECT * FROM `TRANSACTION`";
    $search_result = filterTable($query);
}else {

    $query = "SELECT * FROM `TRANSACTION`";
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
    <title>Transaction Log</title>

    <link href="StyleSheet.css" rel="stylesheet" />

</head>

<body>

    <h1>
        <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
    </h1>
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

    <form method="post">

        <h1 align="center">Transaction Log</h1>
        <div class="transactionlogTableDiv" style="width:100%">
            <table> 
                <tr>
                    <th>Transaction ID</th>
                    <th>Visitor Number</th>
                    <th>Reason for Visit</th>
                    <th>Office Location</th>
                    <th>Date/Time</th>
                </tr><?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td>
                        <?php echo $row['TRANSACTION_ID'];?>
                    </td>
                    <td>
                        <?php echo $row['BARCODE_NUM'];?>
                    </td>
                    <td>
                        <?php echo $row['VISIT_REASON'];?>
                    </td>
                    <td>
                        <?php echo $row['OFFICE_LOCATION'];?>
                    </td>
                    <td>
                        <?php echo $row['TIMESTAMP'];?>
                    </td>


                </tr><?php endwhile;?>
            </table>

           
        </div>
        <input type="submit" value="Reset" />
        <br />
        <br />
        <p>Please select one category to search.</p>
        <div style="font-size:small">
            Barcode Number:
            <input type="text" name="bcodesearch" />
            <input type="submit" name="barcodesearch" value="Search" />
        </div>
        <br />
        <div style="font-size:small">
            Reason for Visit:
            <select name="vreasonsearch">
                <option> </option>
                <option value="Apprentice Information"> Apprenticeship Information </option>
                <option value="EARN"> EARN </option>
                <option value="Education Training"> Education and Training </option>
                <option value="Employer Recruitment"> Employer Recruitment </option>
                <option value="Employment Testing"> Employment Testing </option>
                <option value="GED/Adult Remediation"> GED/Adult Remediation </option>
                <option value="JobGateway Enrollment"> JobGateway Enrollment </option>
                <option value="Job Order Listing"> Job Order Listing </option>
                <option value="Job Search/Application"> Job Search/Application </option>
                <option value="OVR"> OVR </option>
                <option value="Prep Class"> Prep Class </option>
                <option value="Scheduled Appointment"> Scheduled Appointment </option>
                <option value="UC Hotline"> UC Hotline </option>
                <option value="Workshop"> Workshop </option>
            </select>
            <input type="submit" name="visitreasonsearch" value="Search" />
        </div>
        <br />

        <div style="font-size:small">
            Office Location:
            <select name="olocationsearch">
                <option> </option>
                <option value="Mon Valley"> Mon Valley </option>
                <option value="Washington"> Washington </option>
                <option value="Beaver"> Beaver </option>
                <option value="Greene"> Greene </option>
            </select>
            <input type="submit" name="officelocationsearch" value="Search" />
        </div>
    </form>


</body>

</html>