<?php

include '../model/db.php';
if (isset($_POST['end_month'])) {
    
    global $con;
    $sql = "UPDATE meals, bazar SET meals.m_m_s='0' , bazar.b_m_s ='0' WHERE meals.m_m_s='1' AND bazar.b_m_s = '1'";
    $result = mysqli_query($con, $sql);
    
    if (mysqli_affected_rows($result)>0) {

        echo "<script>alert('This Month Is Close...!!!')</script>";
        
    }
}
?>
