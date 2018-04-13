<?php

include '../model/db.php';
global $con;

if (isset($_POST['select_name_id'])) {
    $id = $_POST['select_name_id'];
    if ($id) {
        $sql = " SELECT * FROM user  WHERE user_id='$id'";

        $res = mysqli_query($con, $sql);
        $x = '<tr>';
        $y = '</td>';
        while ($row = mysqli_fetch_assoc($res)) {
            echo '<img class="img-circle img-responsive" src="../user_images/' . $row['img'] . '" style="width: 100px; height: 100px; margin-left: 150px; ">';
            echo '<tr class="form-group">
                                <td>
                                    <label>Full Name:</label>
                                </td>';
            echo '<td>' . $row['name'] . '</td>';
            echo $y;

            echo '<tr class="form-group">
                                <td>
                                    <label>User Name:</label>
                                </td>';
            echo '<td>' . $row['username'] . '</td>';
            echo $y;

            echo '<tr class="form-group">
                                <td>
                                    <label>User Pasword:</label>
                                </td>';
            echo '<td>' . $row['password'] . '</td>';
            echo $y;

            echo '<tr class="form-group">
                                <td>
                                    <label>User Role:</label>
                                </td>';
            echo '<td>' . $row['role'] . '</td>';
            echo $y;

            echo '<tr class="form-group">
                                <td>
                                    <label>User Status:</label>
                                </td>';
            echo '<td>' . $row['status'] . '</td>';
            echo $y;
        }
    } else {
        
    }
}
?>
