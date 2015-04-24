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
    	<!-- <table class="table">
    	<tr class="active">
    		<th>#</th>
    		<th>Status</th>
    		<th>Description</th>
    	</tr> -->
	    <?php
            //Må sjekke om databasen er oppdatert. HVis ikke

            makeArrayFromFile();

            $skrivUt = implode("-", $toiletStatus);
            echo $skrivUt;
	  //   	$results = $db->query("SELECT * FROM lds");

			// while ($row = $results->fetchArray()) {
   //              if ($row[status]) {
   //                  $status = "Free";
			// 	    echo '<tr class="success">';
   //              } else {
   //                  $status = "Taken";
   //                  echo '<tr class="busy">';
   //              }
		 //        echo "<th>".$row['id']."</th>";

   //              echo '<td>'.$status.'</td>';
		 //        echo "<td>".$row['description']."</td>";

			// 	echo "</tr>";
			// }

	    ?>
	    </table>
    </div>
    </body>
</html>
