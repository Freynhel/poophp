<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula02</title>
</head>
<body>

	<?php
		require_once 'Caneta.php';
		require_once 'Notebook.php';
		$c1 = new Caneta;
		$c1->modelo = "Bic";
		$c1->cor = "Azul";
		$c1->ponta = 0.5;
		$c1->carga = 75;
		$c1->tampada = true;
		# $c1->destampar();
		$c1->rabiscar();

		foreach ($c1 as $key => $value) {
			echo "{$key} => {$value} <br>";
		}

		$n1 = new Notebook;
		$n1->marca = 'Dell';
		$n1->modelo = 'Inspiron 15 wemf-23-fw';
		$n1->cpu = 'i7 10th gen';		
		$n1->ram = 16;
		$n1->armHDD = 500;
		$n1->armSSD = 500;
		$n1->tamTela = 15.6;
		$n1->resolucao = 1080;
		$n1->SO = 'Win11';
		$n1->temperatura = "Detectando...";
		
		$n1->ligar();
		$n1->fazerLogin();
		$n1->abrirPasta();
		$n1->desligar();
		
		foreach ($n1 as $key => $value) {
			echo "{$key} => {$value} <br>";
		}
	?>

</body>
</html>