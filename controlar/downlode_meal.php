<?php

include '../model/db.php';

$output = '';
if (isset($_POST['downlode_meal'])) {

    global $con;
    $sql = "SELECT meals.date, meals.period, meals.num_of_meal,  user.name FROM user , meals Where user.user_id=meals.user_id AND user.status = '1' ORDER by user.user_id;";
    $result = mysqli_query($con, $sql);

    $output .= '<table class="table bordered="1">
                <h2 class="text-center">Meal</h2>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Num Of Meal</th>
                            <th>Period</th>

                        </tr>
                        ';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= '<tr>
                        <td>' . $row['date'] . '</td>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['num_of_meal'] . '</td>
                        <td>' . $row['period'] . '</td>

                     </tr>';
                
    }
    $output .= '</table>';
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=meal_details.xls");
    
    echo $output;
}
?>
