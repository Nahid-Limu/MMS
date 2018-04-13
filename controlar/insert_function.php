<?php

include '../model/db.php';

function show_name() {

    global $con;
    $sql = "SELECT * FROM user WHERE user.status ='1'";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        $uid = $row['user_id'];
        $name = $row['name'];

        echo '<option value=' . $uid . '>' . $name . '</option>';
    }



    if (isset($_POST['insert_data'])) {





        $i_id = $_POST['select_name_id'];
        $i_date = $_POST['date'];
        $i_nom = $_POST['nom'];
        $i_ammount = $_POST['bazar'];

        $sql_datecheck = "SELECT  meals.user_id, meals.date FROM meals WHERE user_id = '$i_id' AND meals.date = '$i_date' 
";
        $result_date = mysqli_query($con, $sql_datecheck);

        if ($row = mysqli_fetch_assoc($result_date)) {

            echo "<script>alert('Already Insert...!!!')</script>";
        } else {

            $sql = "INSERT INTO bazar (bazar_id, user_id, ammount, date) VALUES (NULL, '$i_id', '$i_ammount', '$i_date'); "
                    . "INSERT INTO meals (meal_id, user_id, num_of_meal, period, date) VALUES (NULL, '$i_id', '$i_nom', 'All Day', '$i_date');";
            $result = mysqli_multi_query($con, $sql);
            
            if ($result) {
            echo "<script>alert('Insert Successfully...!!!')</script>";
        }
        }

        
    }
}
?>




<?php

/* class get_name {

  public static function show_name() {

  global $con;
  $sql = "SELECT * FROM user";
  $result = mysqli_query($con, $sql);

  while ($row = mysqli_fetch_assoc($result)) {

  $uid = $row['user_id'];
  $name = $row['name'];

  echo '<option value=' . $uid . '>' . $name . '</option>';
  }

  if (isset($_POST['insert_data'])) {





  $i_id = $uid;
  $i_date = $_POST['date'];
  $i_nom = $_POST['nom'];
  $i_ammount = $_POST['bazar'];


  $sql = "INSERT INTO bazar (bazar_id, user_id, ammount, date) VALUES (NULL, '$i_id', '$i_ammount', '$i_date')";
  $result = mysqli_multi_query($con, $sql);

  if (isset($result)) {
  echo "<script>alert('Insert Successfully...!!!')</script>";
  }
  }
  }

  } */
?>
