<!DOCTYPE HTML>
<html>
<head>
<title>Employee Directory</title>
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<link rel="stylesheet" href="css/jquery.mobile-1.0rc2.min.css" />
<link rel="stylesheet" href="css/styles.css" />
</head>

<body>

<div data-role="page" data-theme="b">

  <div data-role="header">
    <h1>Employee Directory</h1>
  </div>

  <div data-role="content"> 
    <ul data-role="listview" data-filter="true">
		<?php
		include 'config.php';
		$sql = "select e.id, e.firstName, e.lastName, e.title, e.picture, count(r.id) reportCount " . 
				"from employee e left join employee r on r.managerId = e.id " .
				"group by e.id order by e.lastName, e.firstName";
		$run 	= mysql_query($sql);
		//$data	= mysql_fetch_array($run);
		while ($emp=mysql_fetch_object($run)) {
				echo "<li><a href='employeedetails.php?id=$emp->id'>" .
					"<img src='pics/$emp->picture'/>" .
					"<h4>$emp->firstName $emp->lastName</h4>" .
					"<p>$emp->title</p>" .
					"<span class='ui-li-count'>$emp->reportCount</span></a></li>";
			}
		
		//var_dump($data);
		// try {
			// $dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
			// $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// $stmt = $dbh->query($sql);
			
			// while ($emp = $stmt->fetch(PDO::FETCH_OBJ)) {  
				// echo "<li><a href='employeedetails.php?id=$emp->id'>" .
					// "<img src='pics/$emp->picture'/>" .
					// "<h4>$emp->firstName $emp->lastName</h4>" .
					// "<p>$emp->title</p>" .
					// "<span class='ui-li-count'>$emp->reportCount</span></a></li>";
			// }
			// $dbh = null;
		// } catch(PDOException $e) {
			// echo $e->getMessage(); 
		// }
		?> 
	</ul>
  </div>

</div>

<script src="js/jquery-1.6.4.min.js"></script>
<script src="js/jquery.mobile-1.0rc2.min.js"></script>

</body>
</html>