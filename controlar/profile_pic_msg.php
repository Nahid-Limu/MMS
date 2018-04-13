<?php

include '../model/db.php';

?>

<?php

function w_m_pp() {
    global $con;
    if (isset($_SESSION['s_login_id'])) {
        $u_id = $_SESSION['s_login_id'];


        $sql = "SELECT * FROM user WHERE user_id = '$u_id'";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            $msg = $row['username'];
            $img = $row['img'];


            echo '<a href="../view/personalInfo.php"><img class="img-circle img-responsive" src="../user_images/' . $img . '" style="width: 100px; height: 100px; ">
                <h5 class="text-center text-info" style="font-weight: bolder;"> Wellcome<br> ' . $msg . '</h5></a>';
        }
    }
}
?>

