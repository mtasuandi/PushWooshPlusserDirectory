<?php
	
	$dbhost = '127.0.0.1';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'employee';
		$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	$db = mysql_select_db($dbname);

?>