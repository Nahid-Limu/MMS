<?php
include '../model/db.php';

function name_total_meal() {

    global $con;

    $sql = "SELECT * FROM user, meals WHERE user.user_id =meals.meal_id ";
    $result = mysqli_query($con, $sql);
    

    while ($row = mysqli_fetch_assoc($result)) {
        
        $id = $row['user_id'];
        $name = $row['name'];
        
        echo "<tr>";
        
        echo '<td>' . $name . '</td>';
        
        $sql2 = "SELECT  SUM( num_of_meal ) as total_meal FROM meals WHERE meals.user_id = '$id' AND m_m_s =1";
        $result2 = mysqli_query($con, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        echo '<td>' . $row2['total_meal'] . '</td>';
        
        echo "</tr>";
    }
}


function name_total_bazar() {

    global $con;

    $sql = "SELECT * FROM user, bazar WHERE user.user_id =bazar.bazar_id";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['user_id'];
        $name = $row['name'];
        
        echo "<tr>";
        
        echo '<td>' . $name . '</td>';
        
        $sql2 = "SELECT  SUM( ammount ) as total_bazar FROM bazar WHERE user_id = '$id' AND bazar.b_m_s = 1";
        $result2 = mysqli_query($con, $sql2);
        $row2 = mysqli_fetch_assoc($result2);
        echo '<td>' . $row2['total_bazar'] . '</td>';
        
        echo "</tr>";
    }
}

?>
