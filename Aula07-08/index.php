<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula 07</title>
</head>
<body>
	<pre>
	<?php
		require_once 'Luta.php';
		
		$fighter = array();
		$fighter[0] = new Lutador("Preety Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
		$fighter[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
		$fighter[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
		$fighter[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
		$fighter[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3); 
		$fighter[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
		
		$UEC01 = new Luta();
		$UEC01->marcarLuta($fighter[rand(0, 5)], $fighter[rand(0, 5)]);
		$UEC01->lutar();
		
		if ($UEC01->getAprovada()) {
			$UEC01->resultados();
		}

	?>
	</pre>

</body>
</html>