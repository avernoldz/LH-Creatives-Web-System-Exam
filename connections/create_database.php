<!DOCTYPE html>
<html>

<head>
	<title>Connect</title>
</head>

<body>

	<?php
	try {

		$dsn = "mysql:host=localhost";
		$dbusername = "root";
		$dbpass = "";

		try {
			$pdo = new PDO($dsn, $dbusername, $dbpass);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "Connection Failed:" . $e->getMessage();
		}

		$query = "CREATE DATABASE LHCreatives";

		$pdo->exec($query);

		$pdo = null;
		$stmt = null;
	} catch (PDOException $e) {
		die("Query failed: " . $e->getMessage());
	}
	?>

	<h1>Database and Tables Created</h1>
</body>

</html>