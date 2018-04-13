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

function delete() {

    global $con;

    if (isset($_POST['select_name_id'])) {
        $id = $_POST['select_name_id'];

        $sql = "DELETE FROM user WHERE user_id = '$id'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script> alert('Member Delete Successfully....!!!')</script>";
        }
    }
}
echo delete();
?>
