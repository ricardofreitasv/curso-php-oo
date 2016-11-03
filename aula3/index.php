<!DOCTYPE html>
<html>
<head>
	<title>Aula 2 PHP OO</title>
</head>
<body>
	<pre>
	<?php
		require_once 'Caneta.php';
		$c1 = new Caneta;
		$c1->modelo = "BIC Cristal";
		$c1->cor = "Azul";
		// Vai gerar um erro por causa do objeto ser privado
		//$c1->ponta = 0.5;
		$c1->rabiscar();
		$c1->destampar();
		print_r($c1);

	?>
	</pre>
</body>
</html>