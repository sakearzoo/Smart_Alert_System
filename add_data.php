<?php
    // Connect to MySQL
    include("connect.php");

    // Prepare the SQL statement
      date_default_timezone_set('Asia/Kolkata');
     $dateS = date('d/m/Y h:i:s', time());
    echo $dateS;
    $SQL = "INSERT INTO sensorpi.data (date,gps,pidate) VALUES ('$dateS','".$_GET["temperature"]."','".$_GET["humidity"]."','".$_GET["ppm"]."')";     

    // Execute SQL statement
    mysql_query($SQL);

    // Go to the review_data.php (optional)
    header("Location: index.php");
?>