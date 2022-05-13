<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aula05</title>
</head>
<body>
	
	<pre>
		<?php
			require_once 'ContaBanco.php';
			$c1 <-new ContaBanco();
			$c1->abrirConta('Cs');
			echo '<br><br>';
			print_r($c1);
		?>
	</pre>

</body>
</html>