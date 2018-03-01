
<head>
    <title> Welcome to Registration</title>

    <link href="StyleSheet.css" rel="stylesheet" />

</head>
<body>

    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
    <p:titlebar>
        <input type="button" onclick="window.location = 'home.php'" class="Redirect" value="Home" />
        <input type="button" onclick="window.location = 'returnvisitor.php'" class="Redirect" value="Back" />
    </p:titlebar>

</body>


    <?php
    require_once('databaseConnection.php');

    $inputname=$_POST['Search'];

	$query="SELECT * FROM WORKER WHERE F_NAME='$F_NAME', L_NAME='$L_NAME', LAST_4_SSN = '$LAST_4_SSN'";
    $result = $con->query($sql);

	

	while($rowvalue=mysqli_fetch_array($result))
	{
		$F_NAME=$rowvalue['fname'];
		$L_NAME=$rowvalue['lname'];
		$LAST_4_SSN=$rowvalue['ssnumber'];

         echo "<table><tr><th>First Name</th><th>Last Name</th><th>LAST 4 SSN</th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {


                echo "<tr><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["ssnumber"]."</td></tr>";
            }
            echo "</table>";
        } 



        if ($result->num_rows > 0) {



	}





  //if(isset($_POST['search']) && ctype_alpha($_POST['fname']) && ctype_alpha($POST['lname']) && ctype_digit($POST['ssnumber'])){

//$row = mysqli_fetch_array(mysqli_query("SELECT * FROM WORKER WHERE LAST_4_SSN={$_POST['ssnumber']}, F_NAME = {$POST['fname']}, L_NAME = {$post['lname']}"));


//}











?>














