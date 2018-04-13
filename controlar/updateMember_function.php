<?php

include '../model/db.php';

function get_member() {

    global $con;
    $sql = "SELECT * FROM user";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $uid = $row['user_id'];
        $name = $row['name'];

        echo '<option value=' . $uid . '>' . $name . '</option>';
    }
}

function update() {
    if (isset($_POST['select_name_id'])) {

        global $con;
        $id = $_POST['select_name_id'];
        $update_role = $_POST['userrole'];
        $update_status = $_POST['userstatus'];
        $sql = "UPDATE user SET role='$update_role',status='$update_status' WHERE user_id = '$id'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script> alert('Update success ...!!'); </script>";
        }
    }
}
echo update();

?>