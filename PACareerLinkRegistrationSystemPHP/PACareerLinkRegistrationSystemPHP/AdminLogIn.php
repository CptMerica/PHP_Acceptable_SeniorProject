<?php
include 'databaseConnection.php';

if(isset($_POST['login'])){

    $uname=$_POST['username'];
    $password=$_POST['password'];

    $query="select * from ADMINISTRATOR where ADMIN_USERNAME='".$uname."'AND ADMIN_PASSWORD='".$password."' limit 1";

    $result=mysqli_query($con,$query);

    if(mysqli_num_rows($result)==1){

        session_start();
        $_SESSION['admin_login'] = $uname;
        header("Location: admin.php");
        exit();
    } else{
        
        $error = "Invalid Log-In";

    }
        
    

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin Log-In</title>
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
        
        <form accept-charset="UTF-8" role="form" method="post" action="AdminLogIn.php">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="Username" name="username" type="text" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Password" name="password" type="password" value="" />
               
                 </div>
              <p class="error"> <?php echo $error; ?></p>  
                <input class="btn btn-lg btn-success btn-block" name ="login" type="submit" value="Login" />
            </fieldset>
        </form>
    </div>


</body>
</html>