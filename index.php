<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form method="get">
		<input type="text" name="username">
		<button type="submit">Submit</button>
	</form>
	<?php

	      $myname = $_GET['username'];
	     echo $myname." is a software engineer";
	?>
</body>
</html>