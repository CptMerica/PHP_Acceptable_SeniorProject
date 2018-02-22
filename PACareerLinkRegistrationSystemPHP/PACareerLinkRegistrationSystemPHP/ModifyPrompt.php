<html>
<head>
    <title>Modify</title>
    <link href="StyleSheet.css" rel="stylesheet" />

</head>

<body>
    

    <form method="post">
        <p>Do you need to Update any of your information?</p>

        <p>
            Yes
            <input type="radio" value="yes" name="m" />
        </p>
        <p>
            No
            <input type="radio" value="no" name="m" />
        </p>

        <input id="Submit1" type="submit" value="submit" />

    </form>
</body>

</html>


<?php

if($_POST['m']=='yes'){
    $yredirect='ModifyUser.php';
    header('Location: ' .$yredirect);
}
elseif($_POST['m']=='no'){
    $nredirect ="SignIn.php";
    header('Location: ' .$nredirect);

}

die();




?>