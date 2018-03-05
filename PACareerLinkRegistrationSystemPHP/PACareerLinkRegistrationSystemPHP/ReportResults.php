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
            <li><a href="reports.php">Back</a></li>
            <li style="float:right"><a>Help</a></li>
        </ul>
    </div>
>
    <h2> Report Results</h2>
    <h2> Your report results will show below! </h2>
    
    
    <table>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Last 4 SSN:</th>
            <th>Government Assistance</th>
            <th>Food Stamps</th>
            <th>Office Location</th>
            <th>Residing County</th>
            <th>Education</th>
            <th>Employement Status</th>
            <th>Purpose of Visit</th>
        </tr>


        <?php while($row = mysqli_fetch_array($search_result)):?>
        <tr>
            <td>
                <?php echo $row['PARTICIPANT_ID'];?>
            </td>
            <td>
                <?php echo $row['F_NAME'];?>
            </td>
            <td>
                <?php echo $row['L_NAME'];?>
            </td>
            <td>
                <?php echo $row['LAST_4_SSN'];?>
            </td>
            <td>
                <?php echo $row['GOV_ASST'];?>
            </td>
            <td>
                <?php echo $row['FOOD_STAMPS'];?>
            </td>
            <td>
                <?php echo $row['OFFICE_LOCATION'];?>
            </td>
            <td>
                <?php echo $row['COUNTY_RESIDENCE'];?>
            </td>
            <td>
                <?php echo $row['EDUCATION'];?>
            </td>
            <td>
                <?php echo $row['STATUS'];?>
            </td>
            <td>
                <?php echo $row['VISIT_PURPOSE'];?>
            </td>
        </tr>
        <?php endwhile;?>
    </table>

    
    
    
    
    
    
    
    <p align="center">
    <input type="button" onclick="window.location = 'Admin.php'" class="Redirect" value="Close" />
        </p>

    </body>

</html>

<?php 

include 'reports';


?>