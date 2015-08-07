	<?php
	
	include 'views\DataBase.php';

	$c_id = $_POST["c_id"]; 
	$c_name = $_POST["c_name"] ;
	$c_ways = $_POST["c_ways"] ;
	$admin = $_POST["admin"] ;
	$location = $_POST["location"] ;
	
	mysql_query("INSERT INTO crossroad (id_CrossRoad, crossroadName, numOfWays, crossroad_Admin, id_location) VALUES ('$c_id', '$c_name', '$c_ways', '$admin', '$location')",$connection);
	
	echo '<script>window.location = "crossroad_add2.php";</script>';
	?>