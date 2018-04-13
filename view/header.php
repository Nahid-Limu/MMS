<!DOCTYPE html>
<?php
include '../controlar/profile_pic_msg.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title >Meal Management System</title>
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="all">
        <link rel="stylesheet" type="text/css" href="../css/style.css" />

        <meta name="viewport" content="width=device-width initial-scale=1">

        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>

    </head>
    <header class="container header">
        <nav class="nav navbar-inverse">
            <h2 id="h-txt" >Meal Management System</h2>
            <div class="nav navbar-nav navbar-left " style="margin-left: 20px;">

                <?php
                w_m_pp();
                ?>

            </div>



            <div class="navbar-header all_btn">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse"  id="h-btn">

                <ul class="nav navbar-nav navbar-right" style="margin: 5px; margin-top: 80px;">

                    <li class="bg-primary text-center" style="right: 20%">
                        <?php
                        
                        $dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
                        echo $dt->format('F j, Y')."<br>";
                        echo $dt->format('g:i a');
                        
//                        echo $dt->format('Y-m-d')."<br>";
//                        echo $dt->format('g:i a');
                        
                        
                        ?>
                    </li>




                    <?php
                    global $_SESSION;
                    if ($_SESSION['s_role'] == 'admin') {

                        echo '
                            
                            
                            <li>
                                <a href="deshboad.php"><button class = "btn btn-warning btn-md" name="admin" ><span class="glyphicon glyphicon-plus-sign"></span> Aadmin Panel</button></a>
                            </li>
                              ';
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['s_login_id'])) {

                        echo '
                        <li>
                            <a href="index.php"><button class = "btn btn-info btn-md" name="home" id="home_btn" style = "width: 99px; "><span class="glyphicon glyphicon-home"></span>  Home</button></a>
                        </li>
                        <li>
                            <a href = "../controlar/logout.php"><button type = "button" name = "logout" class = "btn btn-danger btn-md" style = "width: 99px; "><span class = "glyphicon glyphicon-log-in"></span> LogOut </button></a>
                        </li>
                        ';
                    }
                    ?>

                </ul>
            </div>

        </nav>
    </header>

</html>

