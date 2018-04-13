<?php

include '../model/db.php';
global $con;

if (isset($_POST['select_name_id'])) {
    $id = $_POST['select_name_id'];
    $date = $_POST['select_date'];
   // if ($id ) {
        $sql = "SELECT user.name, user.img, meals.num_of_meal, meals.date, bazar.ammount FROM user, meals, bazar WHERE user.user_id = '$id' AND meals.user_id = '$id' AND bazar.user_id='$id' AND meals.date = '$date' AND bazar.date = '$date'";
        $res = mysqli_query($con, $sql);
        $x = '<tr>';
        $y = '</td>';
        while ($row = mysqli_fetch_assoc($res)) {
            echo '<img class="img-circle img-responsive col-md-offset-7" " src="../user_images/' . $row['img'] . '" style="width: 100px; height: 100px; "><br>';
            echo '<tr class="form-group">
                                <td>
                                    <label>Full Name:</label>
                                </td>';
            echo '<td>' . $row['name'] . '</td>';
            echo $y;

            echo '<tr class="form-group">
                                <td>
                                    <label>Date:</label>
                                </td>';
            echo '<td>' . $row['date'] . '</td>';
            echo $y;

            echo '<tr class="form-group">
                                <td>
                                    <label>No Of Meal:</label>
                                </td>';
            echo '<td>' . $row['num_of_meal'] . '</td>';
            echo $y;

            echo '<tr class="form-group">
                                <td>
                                    <label>Bazar:</label>
                                </td>';
            echo '<td>' . $row['ammount'] . '</td>';
            echo $y;

//            echo '<tr class="form-group">
//                                <td>
//                                    <label>User Status:</label>
//                                </td>';
//            echo '<td>' . $row['status'] . '</td>';
            echo $y;
        }
//    } else {
//        
//    }
}
?>
