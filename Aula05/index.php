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

			$p1 = new ContaBanco();
			$p2 = new ContaBanco();

			$p1 -> abrirConta("CC");
			$p1 -> setDono("Jubileu");
			$p1 -> setNumConta(111);
			$p1 -> depositar(300);
			$p1 -> pagarMensal();
			$p1 -> fecharConta();

			$p2 -> abrirConta("CP");
			$p2 -> setDono("Creuza");
			$p2 -> setNumConta(222);
			$p2 -> depositar(500);
			$p2 -> sacar(100);
			$p2 -> pagarMensal();
			$p2 -> sacar(530);
			$p2 -> fecharConta();

			print_r($p1);
			echo '<br>';
			print_r($p2);
		?>
	</pre>

</body>
</html>