<?php
session_start();

if (!isset($_SESSION['s_login_id'])) {
    header("Location: login.php");
}
?>

<?php
include '../model/db.php';
include './header.php';
include './sideber.php';
include '../controlar/month_end_function.php';

?>
<html>
    <!--start meal and bazar-->
    <div class="container  col-lg-9">

        <div class="row">
            <!--mill table1-->
            <div class="col-lg-6">
                <table class=" table table-responsive table-hover table-bordered">
                    <thead>
                    <h2 class="text-center">Meal</h2>
                    <tr>
                        <th class="text-center">Name</th>
                        <th class="text-center">Total Meal</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        name_total_meal();
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
                        <th class="text-center">Name</th>

                        <th class="text-center">Total Bazar</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        name_total_bazar();
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
        
        

    </div>
    <!--end meal and bazar-->
    
    <form class=" container form-horizontal" action=" " method="POST">
            <div style="margin-top: 20px;">
                <button class="btn btn-lg btn-danger center-block" type="submit" name="end_month" id="end_month">End Month</button>
            </div>
        </form>
    
    <script>
        $(document).ready(function () {
            $('#end_month').click(function () {
                var end_month = $(this).val();

                $.post("../controlar/end_month_btn.php", {end_month: end_month}, function (data) {

                    $().html(data);

                });
            });

        });
    </script>
    
</html>