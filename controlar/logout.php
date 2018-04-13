<?php
session_start();
include '../model/db.php';
session_destroy();
header("Location: ../view/login.php");
exit();
?>

