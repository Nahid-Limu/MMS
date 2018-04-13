<?php

include '../model/db.php';

class meal {
    

    public static function show_meal() {
        global $con;

        $sql = "SELECT meals.date, meals.period, meals.num_of_meal,  user.name FROM user , meals Where user.user_id=meals.user_id AND user.status = '1'  AND meals.m_m_s = '1'  ORDER by date";
        $result = mysqli_query($con, $sql);
       

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<tr>";
            echo '<td>' . $row['date'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['num_of_meal'] . '</td>';
            echo '<td>' . $row['period'] . '</td>';
            
            echo "</tr>";
        }
    }
 
}
 
class bazar {

    public static function show_bazar() {
        global $con;
        
        $sql = "SELECT user.name, bazar.date, bazar.ammount FROM user , bazar Where user.user_id=bazar.user_id AND bazar.b_m_s = '1'  ORDER by date";
        $result = mysqli_query($con, $sql);
        
        while ($row = mysqli_fetch_assoc($result)) {
            
            echo "<tr>";
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            echo '<td>' . $row['ammount'] . ' tk</td>';
            echo "</tr>";
            
        }
    }

}

class total_meal {

    public static function show_tatal_meal() {
        global $con;
        
        $sql = "SELECT SUM(num_of_meal) as total_meal FROM meals WHERE m_m_s = 1";
        $result = mysqli_query($con, $sql);
        
        while ($row = mysqli_fetch_assoc($result)) {
            
            echo "<tr >";
            echo '<td class="text-center" style="font-size: 30px;">'.$row['total_meal'].'</td>';
            echo "</tr>";
            
        }
    
    }

}

class total_bazar {

    public static function show_taotal_bazar() {
        
        global $con;
        
        $sql = "SELECT SUM(ammount) AS total_bazar FROM bazar WHERE b_m_s = 1";
        $result = mysqli_query($con, $sql);
        
        while ($row = mysqli_fetch_assoc($result)) {
            
            echo "<tr >";
            echo '<td class="text-center" style="font-size: 30px;">'.$row['total_bazar'].' tk</td>';
            echo "</tr>";
            
        }
    
    }

}

class meal_rate {

    public static function show_meal_rate() {
        
        global $con;
        $sql = "SELECT SUM(bazar.ammount) / SUM(meals.num_of_meal) as meal_rate FROM bazar, meals WHERE bazar.b_m_s = 1 AND meals.m_m_s = 1";
        $result = mysqli_query($con, $sql);
        
        while ($row = mysqli_fetch_assoc($result)) {
            
            echo "<tr >";
            echo '<td class="text-center" style="font-size: 30px;">'.$row['meal_rate'].' tk</td>';
            echo "</tr>";
            
        }
    }

}
?>
