<?php
session_start();
unset($_SESSION['simple_login']);
session_destroy();
header("Location: index.php");
exit();

?>