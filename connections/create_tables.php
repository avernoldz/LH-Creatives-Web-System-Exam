<!DOCTYPE html>
<html>

<head>
	<title>Tables</title>
</head>

<body>

	<?php

	require_once "db_include.php";

	try {
		$query =
			"CREATE TABLE IF NOT EXISTS `users` (
		`id` bigint(20) NOT NULL AUTO_INCREMENT,
		`name` varchar(100) NOT NULL,
		`password` varchar(100) NOT NULL,
		PRIMARY KEY (`id`),
		UNIQUE KEY `name-idx` (`name`)
	  	) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ";

		$pdo->exec($query);

		$insert = "INSERT INTO `users` (`id`, `name`, `password`) VALUES
		(1, 'name', 'cb825a05d743c50112becede14b2c132'),
		(2, 'foo',  '3858f62230ac3c915f300c664312c63f');";

		$pdo->exec($insert);

		$pdo = null;
		$stmt = null;

		die();
	} catch (PDOException $e) {
		die("Query failed: " . $e->getMessage());
	}

	?>
</body>

</html>