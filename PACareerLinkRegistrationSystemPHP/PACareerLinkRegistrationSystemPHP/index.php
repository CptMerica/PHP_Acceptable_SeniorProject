<?php
$error = "";
if(isset($_POST['username'],$_POST['password'])){

    $user = array(
                    "user" => "Username",
                    "pass"=>"Password"
            );
    $username = $_POST['username'];
    $pass = $_POST['password'];
    if($username == $user['user'] && $pass == $user['pass']){
        session_start();
        $_SESSION['simple_login'] = $username;
        header("Location: home.php");
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

    <link href="StyleSheet.css" rel="stylesheet" />
</head>
<body>

    <img src="pacareerlink.jpg" style="height: 93px; width:459px;" />
    <h2>Registration System</h2>
   
  <h3 >Please sign in</h3>
                    
   <div class="panel-body">
      <?php echo $error; ?>
     <form accept-charset="UTF-8" role="form" method="post" action="index.php">
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