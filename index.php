<?php
session_start();

if (!isset($_SESSION['s_login_id'])) {
    header("Location: view/login.php");
}
?>
<?php

include 'model/db.php';
include './view/header.php';
include 'controlar/show_table_data.php';
include '../model/db.php';
include './header.php';
include '../controlar/show_table_data.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="container">

            <!--Dashbord-->
            <nav class="nav navbar-default">
                <div class="row text-danger ">
                    <div class="col-sm-4">
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr >
                                    <th class="text-center" style="font-size: 30px;">Total Meal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                total_meal::show_tatal_meal();
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-4">

                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" style="font-size: 30px;">Total Bazar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                total_bazar::show_taotal_bazar();
                                ?>
                            </tbody>

                        </table>
                    </div>
                    <div class="col-sm-4">

                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" style="font-size: 30px;">Meal Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                meal_rate::show_meal_rate();
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </nav>

        </div>
        <!--end dashbord-->

        <!--end downlode-->
        <div class="container">
            <div class="row">
                <form class="form-horizontal" action="../controlar/downlode_meal.php" method="POST">

                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-md btn-success center-block" name="downlode_meal">Downlode Meal</button>
                    </div>
                </form>
                <form class="form-horizontal" action="../controlar/downlode_bazar.php" method="POST">
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-md btn-success center-block" name="downlode_bazar">Downlode Bazar</button>
                    </div>
                </form>
            </div>
        </div>
        <!--end downlode-->

        <!--start meal and bazar-->
        <div class="container">

            <div class="row">
                <!--mill table1-->
                <div class="col-lg-6">
                    <table class=" table table-responsive table-hover table-bordered">
                        <thead>
                        <h2 class="text-center">Meal</h2>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Num Of Meal</th>
                            <th>Period</th>

                        </tr>


                        </thead>
                        <tbody>
                            <?php
                            meal::show_meal();
                            ?>
                        </tbody>

                    </table>
                </div>

                <!--bazar table1-->
                <div class="col-lg-6">

                    <table class="table table-responsive table-hover table-bordered">
                        <thead>
                        <h2 class="text-center">Bazars</h2>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Ammount</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            bazar::show_bazar();
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
        <!--end meal and bazar-->

    </body>
</html>
