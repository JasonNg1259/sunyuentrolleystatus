<?php
    //Get Heroku ClearDB connection information
    $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db = substr($cleardb_url["path"],1);
    $active_group = 'default';
    $query_builder = TRUE;
    // Connect to DB
    $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
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
