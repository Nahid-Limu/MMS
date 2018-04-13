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
include '../controlar/deleteMember_function.php';
?>

<html>
    <body>
        <div class="container col-lg-9">

            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center"><kbd>Delete</kbd></h1>

                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">
                        <div class="container">
                            <table class="table table-responsive table-bordered" style="width: 400px;">
                                <tbody>

                                    <tr class="form-group">
                                        <td>
                                            <label class="form-control text-center">Select Member:</label>
                                        </td>
                                        <td>
                                            <select class="form-control" name="select_name_id" id="select_name_id">
                                                <option value="">--Select Name--</option>

                                                <?php
                                                get_member();
                                                ?>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr class="form-group " align="center">

                                        <td colspan="2"><button class="btn btn-md bg-primary " type="submit" name="add_member" style="font-size: 20px; font-weight: bolder;"><i class="glyphicon glyphicon-remove-circle"> </i><i class="glyphicon glyphicon-user"></i> Delete Member</button></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </form>

                </div>



                <div class="col-md-6">

                    <h1 class="text-center"><kbd>Details</kbd></h1>
                    <div class="container">
                        <table class="table table-responsive table-bordered" id="show_detail"style="width: 400px;">


                        </table>

                    </div>
                </div>

            </div>
    </body>

    <script>
        $(document).ready(function () {
            $('#select_name_id').change(function () {
                var select_name_id = $(this).val();

                $.post("../controlar/loadDetails.php", {select_name_id: select_name_id}, function (data) {

                    $('#show_detail').html(data);

                });
            });

        });
    </script>
</html>
