<?php
session_start();

if (!isset($_SESSION['s_login_id'])) {
    header("Location: login.php");
}
?>


<?php
include '../view/header.php';
include './sideber.php';
?>

<html>
    <head>

    </head>
    <body>
        
            
            <div class="container col-lg-9 jumbotron" >
                <h1 class=" text-center text-primary ">
                    WellCome To MMS DashBord
                </h1>
            </div>
        
    </body>
</html>