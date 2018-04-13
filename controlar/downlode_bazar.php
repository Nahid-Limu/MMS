<?php

include '../model/db.php';

$output = '';
if (isset($_POST['downlode_bazar'])) {

    global $con;
    $sql = "SELECT user.name, bazar.date, bazar.ammount FROM user , bazar Where user.user_id=bazar.user_id ORDER by user.user_id;";
    $result = mysqli_query($con, $sql);

    $output .= '<table class="table bordered="1">
                <h2 class="text-center">Bazars</h2>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Ammount</th>

                        </tr>
                        ';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= '<tr>
                        <td>' . $row['name'] . '</td>
                        <td>' . $row['date'] . '</td>
                        <td>' . $row['ammount'] . '</td>
                    <tr>';
    }
    
    $output .= '</table>';
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=bazar_details.xls");

    echo $output;
}
?>

