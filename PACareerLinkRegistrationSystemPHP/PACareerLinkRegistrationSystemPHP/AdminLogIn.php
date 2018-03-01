<?php
$error = "";
if(isset($_POST['username'],$_POST['password'])){

   
    $adminuser = array(
                    "user" => "Admin",
                    "pass"=>"adminpass"
            );
    $username = $_POST['username'];
    $pass = $_POST['password'];
    if($username == $adminuser['user'] && $pass == $adminuser['pass']){
        session_start();
        $_SESSION['admin_login'] = $username;
        header("Location: admin.php");
        exit();
    }else{
        $error = '<div class="alert alert-danger">Invalid Login</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />


    <link href="StyleSheet.css" rel="stylesheet" />
</head>
<body>
   
     <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />

    <div>
        <ul id="menu">
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="home.php">Back</a>
            </li>
            <li style="float:right">
                <a>Help</a>
            </li>
        </ul>
    </div>
    
    
    
     <h2>Admin Login</h2>

    <h3>Please sign in</h3>

    <div class="panel-body">
        <?php echo $error; ?>
        <form accept-charset="UTF-8" role="form" method="post" action="AdminLogIn.php">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="Username" name="username" type="text" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" type="password" value="" />
                </div>
                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" />
            </fieldset>
        </form>
    </div>


</body>
</html>