<html>
	<head>
		<?php include_once('Includes'.DIRECTORY_SEPARATOR.'connect.php'); ?>
		<title> Create content </title>
	</head>
	<body>

		<form action="create.php" method="post">
			Project category: <input type="text" name="name"><br><hr>
			Name: <input type="text" name="name"><br>
			Description: <input type="text" name="description"><br><hr>
			Име: <input type="text" name="name_bg"><br>
			Описание: <input type="text" name="description_bg"><br>
			<input type="submit">
		</form>