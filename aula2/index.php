<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 PHP OO</title>
</head>
<body>
	<?php
		require_once 'Caneta.php';
		// Objeto 1
		echo "Objeto 1<br>";
		$c1 = new Caneta;
		$c1->cor = "Azul";
		$c1->ponta = 0.5;
		$c1->tampar();
		print_r($c1);
		echo "<br><br>";

		// Objeto 2
		echo "Objeto 2<br>";
		$c2 = new Caneta;
		$c2->cor = "Verde";
		$c2->carga = 50;
		$c2->tampar();
		print_r($c2);

	?>
</body>
</html>