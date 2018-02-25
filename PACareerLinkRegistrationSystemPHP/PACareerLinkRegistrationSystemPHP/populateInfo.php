


<?php
/*//Connect To Database
$hostname="11.62.0.35";
$username="fowler";
$password="$cottiE10";
$dbname="paclregdb";
$usertable="County";
$yourfield = "COUNTY_DESC";

2	if(isset($_GET['LAST_4_SSN'])){
3	$LAST_4_SSN=$_GET['LAST_4_SSN'];
4	//connect  to the database
5	$connection = mysqli_connect($hostname, $username, $password);
mysqli_select_db($dbname, $connection);
//Check connection
if (mysqli_connect_error){
    die("Connection Failed: " .mysqli_connect_error());
}
echo "connected successfully";
$connection->close();
8	//-query  the database table
9	$sql="SELECT  * FROM Worker WHERE LAST_4_SSN=" . $LAST_4_SSN;
10	//-run  the query against the mysql query function
11	$result=mysql_query($sql);
12	//-create  while loop and loop through result set
13	while($row=mysql_fetch_array($result)){
14	  $F_NAME =$row['F_NAME'];
15	            $L_NAME=$row['L_NAME'];
16
18	//-display  the result of the array
19	echo  "<ul>\n";
20	echo  "<li>" . $F_NAME . " " . $L_NAME .  "</li>\n";
21	echo  "<li>" . $LAST_4_SSN . "</li>\n";
23	echo  "</ul>";
24	}
25
*/
?>
<p:titlebar>
    <input type="button" onclick="window.location = 'home.php'" class="Redirect" value="Home" />
    <input type="button" onclick="window.location = 'returnvisitor.php'" class="Redirect" value="Back" />
</p:titlebar>
<table style="width:100%">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Last 4 SNN</th>
    </tr>
    
</table>