<?php
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM trolleystatus WHERE unique_id BETWEEN 1 AND 61");
    $output = "";


    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){

            $output .='<button id="'.$row['trolley_id'] .'" ondblclick="changeColor()" style="background-color:'.$row['bg_color'].';color:'.$row['color'].'">'. $row['name'] .'</button>';
        }
        echo $output;
    }

?>