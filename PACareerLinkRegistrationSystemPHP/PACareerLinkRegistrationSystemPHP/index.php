<?php
include 'databaseConnection.php';

if(isset($_POST['login'])){

    $uname=$_POST['user'];
    $password=$_POST['pass'];

    $query="select * from CENTER_USER where CENTER_USER_USERNAME='".$uname."'AND CENTER_USER_PASSWORD='".$password."' limit 1";

    $result=mysqli_query($con,$query);

    if(mysqli_num_rows($result)==1){

        session_start();
        $_SESSION['center_user_login'] = $uname;
        header("Location: home.php");
        exit();
    }
    else{
         $loginerr = "Invalid Log-In";
        
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title></title>

    <link href="StyleSheet.css" rel="stylesheet" />
</head>
<body>

    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
    <h2>Registration System</h2>
   
  <h3 >Please sign in</h3>
                    
   <div class="panel-body">
      
     <form accept-charset="UTF-8" role="form" method="post" action="index.php">
           <fieldset>
             <div class="form-group">
                 <input class="form-control" placeholder="Username" name="user" type="text" />
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password" name="pass" type="password" />
               <p class="error"><?php echo $loginerr; ?></p> 
            </div>
                <input class="btn btn-lg btn-success btn-block" type="submit" name="login" value="Login" />
           </fieldset>
      </form>
    
</div>
                
          
      
</body>
</html>