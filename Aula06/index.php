<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<pre>
		<?php
			require_once 'ControleRemoto.php';
			require_once 'Notebook.php';

			$n = new Notebook();
			$n -> ligar();
			$n -> login();
			$n -> abrirWord();
			$n -> digitar("AAAAaaa");
			$n -> salvarWord();
			$n -> logout();
			$n -> detalhes();
			?>
	</pre>
</body>
</html>