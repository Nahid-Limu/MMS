<?php

include '../model/db.php';




function add_member() {
    
    global $con;
    if (isset($_POST['add_member'])) {

    $f_Name = $_POST['f_name'];
    $u_Name = $_POST['u_name'];
    $u_pass = $_POST['u_pass'];
    $u_Role = $_POST['select_role'];
    $u_status = $_POST['select_status'];
    
    $u_image = $_FILES['image']['name'];
    $u_image_tmp =$_FILES['image']['tmp_name'];
    move_uploaded_file($u_image_tmp, "../user_images/$u_image");


    $sql_check = "SELECT * FROM user WHERE username = '$u_Name' AND role = '$u_Role'";
    $res_check = mysqli_query($con, $sql_check);

    if ($row = mysqli_fetch_assoc($res_check)) {
        
        echo "<script>alert('UserName Allready Exist...!!!')</script>";
    } else {
        $sql = "INSERT INTO user(name, username, password, role, status, img) VALUES ('$f_Name','$u_Name','$u_pass','$u_Role','$u_status','$u_image')";
        $resust = mysqli_query($con, $sql);
        if ($resust) {

           echo "<script>alert('Member added succesfully...!!!')</script>";
        }
    }
}
    
}
echo add_member();
?>




