<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula04</title>
</head>

<body>
	<pre>
	<?php
	require_once 'Caneta.php';

	$c1 = new Caneta("Bic", "Vermelha", 0.5);
	$c2 = new Caneta("Padrão", "Azul", 0.5);
	# $c1->setModelo('BIC');
	# $c1->setPonta(0.5);
	# echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}.";
	print_r($c1);
	?>
	</pre>
</body>

</html>