<?php
require 'databaseConnection.php';

$query = "SELECT * FROM TRANSACTION";
$search_result = filterTable($query);

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
        <div class="transactionlogTableDiv">
            <table class="transactionlog">
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

    </form>


</body>

</html>