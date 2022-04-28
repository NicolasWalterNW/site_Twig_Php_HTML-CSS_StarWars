<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Réception de données de formulaires</title>

	<style>
		.niv1 {
			color: red;
			font-size: 30pt;
			font-weight: bold;
		}

		.niv2 {
			color: black;
			font-size: 20pt;
			font-weight: bold;
		}

		.niv3 {
			color: green;
			font-size: 16pt;
			font-weight: bold;
		}
	</style>

</head>

<body>

	<?php 
		print("<div class='niv1'>Variables reçues par la méthode POST</div>");
	foreach ($_POST as $key => $value) {
		print("<div class='niv2'>$key</div>");
		print("<div class='niv3'>$value</div>");
	}
?>


</body>

</html>