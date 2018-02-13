
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
    <form method="post">
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
        <input id="Submit" type="submit" value="Submit" />
    </form>

    <?php
        if(isset ($_POST['username']) && isset($_POST['password'])){

            $username = $_POST['username'];
            $password=$_POST['password'];

            $con = mysqli_connect("localhost", "brachaj_63", "zVgdb8mj");
            
            echo $username;
            echo $password;

        }

    ?>




</body>
</html>
