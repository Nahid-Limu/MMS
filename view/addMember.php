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
include '../controlar/addMemeber_function.php';
?>

<html>
    <body>
        <div class="container col-lg-9">

            <div class="page-header"> <h1 class="text-center"><kbd>Add Member</kbd></h1></div>

            <div class="container">
                <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">



                    <div class="container col-md-8 col-md-offset-2">
                        <table class="table table-responsive table-bordered " style="width: 600px;">

                            <tbody>

                                <tr class="form-group">
                                    <td>
                                        <label class="form-control text-center" for="f_name">Full Name:</label>
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" id="f_name" name="f_name" placeholder="Your Full name" required="1">
                                    </td>
                                </tr>

                                <tr class="form-group">
                                    <td>
                                        <label class="form-control text-center" for="f_name">User Name:</label>
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" name="u_name" placeholder="Your User name" required="1">
                                    </td>
                                </tr>

                                <tr class="form-group">
                                    <td>
                                        <label class="form-control text-center" for="u_pass">Password:</label>
                                    </td>
                                    <td>
                                        <input class="form-control" type="password" name="u_pass" id="u_pass" placeholder="Password" required="1">
                                    </td>
                                </tr>

                                <tr class="form-group">
                                    <td>
                                        <label class="form-control text-center" for="u_role">Role:</label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="select_role" id="select_role">
                                            <option value="">---Update Role---</option>
                                            <option value="user">User</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="form-group">
                                    <td>
                                        <label class="form-control text-center" for="u_status">Status:</label>
                                    </td>
                                    <td>
                                        <select class="form-control" name="select_status" id="select_status">
                                            <option value="">--- Select Status---</option>
                                            <option value="1">ON</option>
                                            <option value="0">OFF</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr class="form-group">
                                    <td class="f">
                                        <label class="form-control text-center" for="">Uplode Image </label>
                                    </td>
                                    <td>
                                        <input type="file" class="form-control text-right" name="image" required="1">
                                    </td>

                                </tr>
                                <tr class="form-group " align="center">

                                    <td colspan="2"><button class="btn btn-md bg-primary " type="submit" name="add_member" style="font-size: 20px; font-weight: bolder;"><i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-user"></i> Add Member</button></td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </form>




            </div>
    </body>
</html>

