<?php

include_once 'includes/db_connect.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
        <title>Availability system</title>
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/custom.css" />
    </head>
    <body>
    <div class="col-md-2"></div>
    <div class="col-md-8">
    	<h1> Toilet availability system </h1>
    	<table class="table">
    	<tr class="active">
    		<th>#</th>
    		<th>Name</th>
    		<th>Status</th>
            <th>Time of last event</th>
    	</tr>
	    <?php
	    	
            $results = $mysqli->query("SELECT * FROM lds_unit");
            $taken = array();

			while ($row = $results->fetch_array()) {
                if ($row['status']) {
                    $status = "Free";
				    echo '<tr class="success">';
               
    		        echo "<th>".$row['id']."</th>";
                    echo "<td>".$row['navn']."</td>";
                    echo '<td>'.$status.'</td>';
    		        echo "<td>".$row['time']."</td>";
    				echo "</tr>";
                }else{
                    $line = array($row['id'], $row['navn'], $status, $row['time']);
                    array_push($taken, $line);
                }
			}

            foreach ($taken as $row) {
                if (! $row['status']) {
                    $status = "Taken";
                    echo '<tr class="busy">';
              
                    echo "<th>".$row[0]."</th>";
                    echo "<td>".$row[1]."</td>";
                    echo '<td>'.$status.'</td>';
                    echo "<td>".$row[3]."</td>";

                    echo "</tr>";
                }
             } 

	    ?>
	    </table>
    </div>
    </body>
</html>
