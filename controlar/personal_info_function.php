<?php

include '../model/db.php';

function show_name() {
    global $con;
    if (isset($_SESSION['s_login_id'])) {

        $uid = $_SESSION['s_login_id'];

        $sql = "SELECT name FROM `user` WHERE user_id = '$uid'";

        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<h1 class="jumbotron text-center"> Wellcome<br> ' . $row['name'] . '</h1>';
        }
    }
}

function meal_rate() {

    global $con;
    $sql = "SELECT SUM(bazar.ammount) / SUM(meals.num_of_meal) as meal_rate FROM bazar, meals";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr >";
        echo '<td class="text-center" style="font-size: 30px;">' . $row['meal_rate'] . ' tk</td>';
        echo "</tr>";
    }
}

function personal_total_meal() {

    global $con;

    if (isset($_SESSION['s_login_id'])) {

        $uid = $_SESSION['s_login_id'];

        $sql = "SELECT  SUM( num_of_meal ) as total_meal FROM meals WHERE meals.user_id = '$uid' AND m_m_s =1";

        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {



            echo "<tr >";
            echo '<td class="text-center" style="font-size: 30px;">' . $row['total_meal'] . '</td>';
            echo "</tr>";
        }
    }
}

function personal_total_bazar() {

    global $con;

    if (isset($_SESSION['s_login_id'])) {

        $uid = $_SESSION['s_login_id'];

        $sql = "SELECT  SUM( ammount ) as total_bazar FROM bazar WHERE user_id = '$uid' AND bazar.b_m_s = 1";

        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {



            echo "<tr >";
            echo '<td class="text-center" style="font-size: 30px;">' . $row['total_bazar'] . ' tk</td>';
            echo "</tr>";
        }
    }
}

function result() {
    global $con;
    $output = '';

    if (isset($_SESSION['s_login_id'])) {

        $uid = $_SESSION['s_login_id'];

        $sql_mr = "SELECT SUM(bazar.ammount) / SUM(meals.num_of_meal) as meal_rate FROM bazar, meals";
        $result_1 = mysqli_query($con, $sql_mr);
        $sql_tm = "SELECT SUM(num_of_meal) as total_meal FROM meals WHERE user_id = '$uid';";
        $result_2 = mysqli_query($con, $sql_tm);
        $sql_tb = "SELECT SUM(ammount) as total_bazar FROM bazar WHERE user_id = '$uid';";
        $result_3 = mysqli_query($con, $sql_tb);



        $row1 = mysqli_fetch_assoc($result_1);
        $row2 = mysqli_fetch_assoc($result_2);
        $row3 = mysqli_fetch_assoc($result_3);


        $mr = $row1['meal_rate'];
        $tm = $row2['total_meal'];
        $tb = $row3['total_bazar'];
        $te = $mr * $tm;
        
        $res = '';

        if ($te > $tb) {
            $res = $te - $tb;
            echo '<thead>
            <tr>
            <th class = "text-center" style = "font-size: 30px;">Due</th>
            </tr>
            </thead>
            <tbody>
            <td class="text-center" style="font-size: 30px;">'.$res. '</tr>
            </tbody>';
        } else {
            $res = $tb - $te;
            
            echo '<thead>
            <tr>
            <th class = "text-center" style = "font-size: 30px;">Get</th>
            </tr>
            </thead>
            <tbody>
            <td class="text-center" style="font-size: 30px;">'.$res.' tk</tr>
            </tbody>';
        }

        
    }
}

echo "<tr >";

function show_personal_meal() {
    global $con;

    if (isset($_SESSION['s_login_id'])) {

        $uid = $_SESSION['s_login_id'];

        $sql = "SELECT date , num_of_meal, period  FROM meals WHERE user_id = '$uid'";

        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo '<td>' . $row['date'] . '</td>';

            echo '<td>' . $row['num_of_meal'] . '</td>';

            echo '<td>' . $row['period'] . '</td>';

            echo "</tr>";
        }
    }
}

function show_personal_bazar() {
    global $con;

    if (isset($_SESSION['s_login_id'])) {

        $uid = $_SESSION['s_login_id'];

        $sql = "SELECT date, ammount FROM `bazar` WHERE user_id = '$uid'";

        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";

            echo '<td>' . $row['date'] . '</td>';
            echo '<td>' . $row['ammount'] . '</td>';
            echo "</tr>";
        }
    }
}
?>
