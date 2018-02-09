
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <title></title>


    <link href="SystemStyleSheet.css" rel="stylesheet" type="text/css" />

</head>
<body>

    <h1>
        <img src="pacareerlink.jpg" style="height: 93px; width: 459px" />
    </h1>
    <h2>Registration System</h2>
    <p>Please log in to gain access.</p>
    <form method="post" action="WalkinRegistration.html">
        <p>
            Username:
            <input type="text" name="username" />
        </p>
        <br />
        <p>
            Password:
            <input type="password" name="password" />
        </p>
        <br />
        <input id="Submit" type="button" value="Submit" />
    </form>

    <?php
        $host="localhost3306";
        $user="root";
        $password="";
        $db="paclregdb";

    mysql_connect($host,$user, $password);
    mysql_select_db($db);

    if(isset($_POST['username']))
{
	$uname=$_POST['username'];
	$password=$_POST['password']

	$sql = "select * from Admin where username='".$uname."'AND password='".$password."' limit 1";

	$result=mysql_query($sql);

	if(mysql_num_rows($result)==1)
		{
			echo "You have Sucessfully Logged in";
			exit();
		}

	else
		{
		echo = "You have entered an incorrect password"
		exit();
		}
}
    ?>




</body>
</html>
