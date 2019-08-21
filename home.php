<?php
session_start();
if(isset($_SESSION['userID'])){
$email = $_SESSION['userEmail'];
$id = $_SESSION['userID'];
}else{
header("location: login.php?err=102");
exit;
}
?>
<html>
<head>
<title>HOME PAGE</title>
</head>
<body>
<p>Olá <?php echo $email;?>
</p>
<p>
<a href="logoff.php">Logoff</a>
</p>
</body>
<html>
