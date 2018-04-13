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
include '../controlar/edit_meal_bazar_function.php';
?>

<html>
    <body>
        <div class="container col-lg-9">

            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center"><kbd>Edit Data</kbd></h1>

                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                        <div class="container">
                            <table class="table table-responsive table-hover table-bordered" style="width: 400px;">
                                <tbody>

                                    <tr class="form-group">
                                        <td>
                                            <label class="form-control text-center">Select Date:</label>
                                        </td>
                                        <td>
                                            <select class="form-control" name="select_date" id="select_date">
                                                <option value="">---Select Date---</option>

                                                <?php
                                                get_date();
                                                ?>
                                            </select>
                                        </td>

                                    <tr class="form-group">
                                        <td>
                                            <label class="form-control text-center">Select Member:</label>
                                        </td>
                                        <td>
                                            <select class="form-control" name="select_name_id" id="select_name_id">
                                                <option value="">---Select Name---</option>

                                                <?php
                                                get_member();
                                                ?>
                                            </select>
                                        </td>
                                    </tr>

                                    </tr>




                                    <tr class="form-group">
                                        <td>
                                            <label>Update No Of Meal:</label>
                                        </td>
                                        <td>
                                            <input class="form-control" type="number" id="nom" name="nom" value="2">
                                        </td>
                                    </tr>
                                    <tr class="form-group">
                                        <td>
                                            <label>Update Ammount:</label>
                                        </td>
                                        <td>
                                            <input class="form-control" type="number" id="ammount" name="ammount" value="0">
                                        </td>

                                    </tr>
                                    <tr class="form-group " align="center">

                                        <td colspan="2"><button class="btn btn-md bg-primary " type="submit" name="add_member" style="font-size: 20px; font-weight: bolder;"><i class="glyphicon glyphicon-refresh"></i><i class="glyphicon glyphicon-user"></i> Update</button></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </form>

                </div>



                <div class="col-md-6">

                    <h1 class="text-center"><kbd>Details</kbd></h1>
                    <div class="container">
                        <table class="table table-responsive table-bordered" id="show_detail" style="width: 400px;">


                        </table>

                    </div>
                </div>

            </div>
            
        </div>
        
    </body>

    <script>
        $(document).ready(function () {
            $('#select_name_id').change(function () {
                var select_name_id = $('#select_name_id').val();
                var select_date = $('#select_date').val();

                $.post("../controlar/load_Meal_bazar_date.php", {select_name_id: select_name_id, select_date: select_date}, function (data) {

                    $('#show_detail').html(data);

                });
            });

        });
    </script>
</html>
