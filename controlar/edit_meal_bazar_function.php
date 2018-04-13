<?php

include '../model/db.php';

//member name in dropdown
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

//date in dropdown
function get_date() {

    global $con;
    $sql = "SELECT DISTINCT date FROM meals";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        //$uid = $row['user_id'];
        $date = $row['date'];

        echo '<option value=' . $date . '>' . $date . '</option>';
    }
}

//update data 
function update() {
    if (isset($_POST['select_name_id'])) {

        global $con;
        
        $id = $_POST['select_name_id'];
        $date = $_POST['select_date'];
        $update_nom = $_POST['nom'];
        $update_ammount = $_POST['ammount'];
        
        $sql = "UPDATE meals, bazar SET meals.num_of_meal ='$update_nom', bazar.ammount ='$update_ammount' WHERE meals.user_id = '$id' AND bazar.user_id = '$id' AND meals.date = '$date' AND bazar.date = '$date'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script> alert('Update success ...!!'); </script>";
        }
    }
}
echo update();

?>