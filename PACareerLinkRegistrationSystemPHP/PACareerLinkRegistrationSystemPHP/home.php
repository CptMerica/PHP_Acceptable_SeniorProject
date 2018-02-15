<?php
session_start();
if(!isset($_SESSION['simple_login'])){
    header("Location: index.php");
    exit();
}

/*** you can  write your protected content here ***/

?>
<h1 align="center">
    Welcome, <?php echo $_SESSION['simple_login']; ?>
</h1>
<form>
    <button id="RegPagebtn"> RegistrationPage</button>
    <script type="text/javascript">
        document.getElementById("RegPagebtn").onclick = function () {
            window.location.href ="RegistrationForm.php";
        }
    </script>

    <a href="RegistrationForm.php">RegistrationForm.php</a> 
 
</form>

<p align="center">
    <a href="logout.php">Logout</a>
</p>