<?php
	$dblink = mysql_connect('localhost', 'root','') or die(mysql_error());
	$database = "mariupol_club_fans_light_aircraftbase";
	mysql_select_db ($database, $dblink) or die("Не могу подключиться к базе.");

	if (isset($_POST[submit])){
		$username = $_POST["username"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$charter = $_POST["charter"];
		$query = mysql_query("INSERT INTO services VALUES ('', '$username', '$phone', '$email', '$charter')") or die(mysql_error());
	mysql_close($dblink);
				
		}
	header("Location: /zak.php");
	exit(0);

?>