<?php 
    // Start MySQL Connection
    include('connect.php'); 


?>

<html>
<head>
    <title>Raspberry Pi Sensor Log</title>
    <style type="text/css">
        .table_titles, .table_cells_odd, .table_cells_even {
                padding-right: 20px;
                padding-left: 20px;
                color: #000;
        }
        .table_titles {
            color: #FFF;
            background-color: #000;
        }
        .table_cells_odd {
            background-color: #D7CCC8;
        }
        .table_cells_even {
            background-color: #FAFAFA;
        }
        table {
            border: 2px solid #333;
        }
        body { font-family: "Trebuchet MS", Arial; }
    </style>
</head>

    <body>
        <h1>Raspberry Pi Sensor Log</h1>


    <table border="0" cellspacing="0" cellpadding="4">
      <tr>
            <td class="table_titles">ID</td>
            <td class="table_titles">Date</td>
            <td class="table_titles">Temperature</td>
            <td class="table_titles">Humidity</td>
            <td class="table_titles">Methane Concentration</td>
           
          </tr>
<?php


    // Retrieve all records and display them
    $result = mysql_query("SELECT * FROM data ORDER BY id DESC");

    // Used for row color toggle
    $oddrow = true;

    // process every record
    while( $row = mysql_fetch_array($result) )
    {
        if ($oddrow) 
        { 
            $css_class=' class="table_cells_odd"'; 
        }
        else
        { 
            $css_class=' class="table_cells_even"'; 
        }

        $oddrow = !$oddrow;

        echo '<tr>';
        echo '   <td'.$css_class.'>'.$row["id"].'</td>';
        echo '   <td'.$css_class.'>'.$row["date"].'</td>';
        echo '   <td'.$css_class.'>'.$row["temperature"].'</td>';
        echo '   <td'.$css_class.'>'.$row["humidity"].'</td>';
        echo '   <td'.$css_class.'>'.$row["ppm"].'</td>';
       
        echo '</tr>';
    }
?>
    </table>
    </body>
</html>