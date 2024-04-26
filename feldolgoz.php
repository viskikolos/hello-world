<!DOCTYPE html>
<html>
<head>
    <title>Beolvasott adatok</title>
    <meta charset="utf-8">
</head>
<body>
	<pre>
	<?php
		print_r($_GET);	// kiírja a GET változó értékeit
		print_r($_POST);	// kiírja a POST változó értékeit.
	?>
	</pre>
	<?php
		echo "Email: ".$_POST["email"]."<br>";
		echo "Név: ".$_POST["nev"]."<br>";
		echo "Megjegyzés: ".$_POST["megjegyzes"]."<br>";
	?>
</body>
</html>