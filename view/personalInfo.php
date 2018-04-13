<?php
session_start();

if (!isset($_SESSION['s_login_id'])) {
    header("Location: login.php");
}
?>
<?php
include '../model/db.php';
include './header.php';
include '../controlar/personal_info_function.php';
?>
<html>
    <body class="container">
        <div>
            <?php
            show_name();
            ?>
        </div>
        <div class="container">

            <!--Dashbord-->
            <nav class="nav navbar-default">
                <div class="row text-danger ">
                    <div class="col-sm-3">
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr >
                                    <th class="text-center" style="font-size: 30px;">Meal Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                meal_rate();
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3">
                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr >
                                    <th class="text-center" style="font-size: 30px;">Total Meal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                personal_total_meal();
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-3">

                        <table class="table table-responsive table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center" style="font-size: 30px;">Total Bazar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                personal_total_bazar();
                                ?>
                            </tbody>

                        </table>
                    </div>
                    <div class="col-sm-3">

                        <table class="table table-responsive table-bordered">

                            <?php
                            result();
                            ?>

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
                            <th class="text-center">Date</th>

                            <th class="text-center">Num Of Meal</th>
                            <th class="text-center">Period</th>

                        </tr>


                        </thead>
                        <tbody>
                            <?php
                            show_personal_meal();
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

                            <th class="text-center">Date</th>
                            <th class="text-center">Ammount</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            show_personal_bazar();
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
        <!--end meal and bazar-->
    </body>

</html>
