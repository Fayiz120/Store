<?php
session_start();

if (!(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] === true)) {
    header("Location: login.php"); 
    exit();
}
require_once('templates/header.php');
?>
<link rel="stylesheet" href="css/style.css">
<?php
require_once('templates/header2.php');
?>
<?php
require_once('templates/footer.php');
?>
