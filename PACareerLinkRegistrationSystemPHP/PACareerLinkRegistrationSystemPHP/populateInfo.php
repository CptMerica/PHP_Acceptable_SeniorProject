
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




    <h2>Update your Information</h2>
    <p> Please Complete the form below to update. </p>



</body>


<?php

require_once('databaseConnection.php');

if(isset($_POST['submit']))
{
    $search = $_POST['search'];
    $query = "SELECT * FROM WORKER WHERE LAST_4_SSN = '".$search."'";
    $search_result = filterTable($query);


    // $data="SELECT * FROM WORKER WHERE LAST_4_SSN = '".$ssnumber."'";
   // $query = mysqli_query($con,$data) or die("Couldn't execute query. ". mysqli_error($con));
    //$data2 = mysqli_fetch_array($query);
}






/*if(isset ($_POST{'search'}))
{

$last4ssn = $_POST['ssnumber'];
$query="SELECT F_NAME,L_NAME,LAST_4_SSN,GOV_ASST,FOOD_STAMPS,OFFICE_LOCATION,COUNTY_RESIDENCE,EDUCATION,STATUS,VISIT_PURPOSE,OVER_55,VET_STATUS,YOUTH_STATUS WHERE LAST_4_SSN = '{$SESSION['ssnumber']}'";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_assoc($result))
{
echo 'First Name:';
echo '<input type="text" value='.$row['F_NAME'].'><br />';
?>
*/
?>

<form name="form" method="POST" action="populateInfo2.php">

    First Name: <input type="text" name="fname" value="<?php echo $query['F_NAME']?>" /> <br />
    Last Name: <input type="text" name="lname" value="<?php echo $query['L_NAME']?>" /> <br /> 
    Last 4 of your Social: <input type="text" name="ssnumber" value="<?php echo $query['LAST_4_SSN']?>" /> <br />


    <input type="hidden" name="ssnumber" value="<?php echo $search?>" />
    <input type="submit" value="submit" />


</form>
