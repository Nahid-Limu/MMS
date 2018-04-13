<?php

session_start();
include '../model/db.php';


if (isset($_POST['login_btn'])) {

    $user_name = $_POST['name'];
    $user_pass = $_POST['pass'];

    $sql = "SELECT * FROM `user` WHERE username ='$user_name'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);


    if ($row['password'] == $user_pass) {


        $_SESSION['s_login_id'] = $row['user_id'];
        $_SESSION['s_role'] = $row['role'];


        header("Location: ../view/index.php");
    } else {
        echo 'sorry.....!';
    }
}
?>