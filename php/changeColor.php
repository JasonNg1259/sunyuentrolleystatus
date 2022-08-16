<?php
    include_once "config.php";
    $value = mysqli_real_escape_string($conn, $_POST['value']);
    $output = "";
    $sql = mysqli_query($conn, "SELECT * FROM trolleystatus WHERE trolley_id='{$value}'");

    if(mysqli_num_rows($sql) == 1){
        while($row = mysqli_fetch_assoc($sql)){
            //$output .= $row['bg_color'];

            if($row['bg_color']=='lightgreen'){
                $sql2 = mysqli_query($conn, "UPDATE trolleystatus SET bg_color = 'red' WHERE trolley_id ='{$value}'");
                $sql3 = mysqli_query($conn, "UPDATE trolleystatus SET color = 'white' WHERE trolley_id ='{$value}'");
            }

            else if($row['bg_color']=='red'){
                $sql2 = mysqli_query($conn, "UPDATE trolleystatus SET bg_color = 'lightgrey' WHERE trolley_id ='{$value}'");
                $sql3 = mysqli_query($conn, "UPDATE trolleystatus SET color = 'black' WHERE trolley_id ='{$value}'");
            }

            else if($row['bg_color']=='lightgrey'){
                $sql2 = mysqli_query($conn, "UPDATE trolleystatus SET bg_color = 'lightgreen' WHERE trolley_id ='{$value}'");
                $sql3 = mysqli_query($conn, "UPDATE trolleystatus SET color = 'black' WHERE trolley_id ='{$value}'");
            }

        }
    }
?>