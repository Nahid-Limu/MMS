<!DOCTYPE html>
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
include '../controlar/insert_function.php';

?>
<html>



    <div class="container col-lg-9">

        <div class="page-header"> <h1 class="text-center"><kbd>Insert Data</kbd></h1></div>


        <form  class="form-horizontal" method="POST" action="" enctype="multipart/form-data">

            <div class="container">

                <table class="table table-responsive table-bordered" style="width: 800px;">

                    <tbody>
                        <tr class="form-group">
                            <td>
                                <label>Name:</label>
                            </td>
                            <td>
                                <select class="form-control" name="select_name_id">
                                    <option>---Select Name---</option>

                                    <?php
                                    show_name();
                                    ?>
                                </select>
                            </td>

                        </tr>
                        <tr class="form-group">
                            <td>
                                <label>Date:</label>
                            </td>
                            <td>
                                <input class="form-control" type="text" name="date" required="1" value="<?php $dt = new DateTime('now', new DateTimezone('Asia/Dhaka')); echo $dt->format('Y-m-d'); ?>">
                            </td>
                        </tr>
                        <tr class="form-group">
                            <td>
                                <br><label for="nom">Number Of Meal:</label>

                            </td>
<!--                            <td>
                                <input class="form-control" type="number" name="nom" required="1">
                            </td>-->
                            <td>
                                <h5 class="form-control text-info">
                                    <input type="radio" name="nom" value="0"> 0
                                    <input type="radio" name="nom" value="1"> 1
                                    <input type="radio" name="nom" value="2" checked> 2
                                    <input type="radio" name="nom" value="3"> 3
                                    <input type="radio" name="nom" value="4"> 4
                                </h5>
                            </td>

                        </tr>
                        <tr class="form-group">
                            <td>
                                <label for="">Bazar </label>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="bazar" value="0">
                            </td>

                        </tr>

                        <tr class="form-group " align="center">

                            <td colspan="2"><button class="btn btn-md bg-primary " type="submit" name="insert_data" style="font-size: 20px; font-weight: bolder;"><i class="glyphicon glyphicon-upload"></i> Insert All</button></td>

                        </tr>
                    <div>

                    </div>
                    </tbody>
                </table>

            </div>
        </form>



    </div>

</html>



