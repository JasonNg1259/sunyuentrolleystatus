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
    $sql = mysqli_query($conn, "SELECT * FROM trolleystatus WHERE unique_id BETWEEN 62 AND 99");
    $output = "";

    if(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){

            $output .='<button id="'.$row['trolley_id'] .'" ondblclick="changeColor()" style="background-color:'.$row['bg_color'].';color:'.$row['color'].'">'. $row['name'] .'</button>';
        }
        echo $output;
    }

?>
