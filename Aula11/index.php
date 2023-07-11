<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<pre><?php
		require_once __DIR__ . "/Visitante.php";
		require_once __DIR__ . "/Aluno.php";
		require_once __DIR__ . "/Bolsista.php";
		// $p1 = new Pessoa(); // Cannot instantiate abstract class
		
		$v1 = new Visitante();
		$v1->setNome("Juvenal");
		$v1->setIdade(33);
		$v1->setSexo("M");

		$a1 = new Aluno();
		$a1->setNome("Pedro");
		$a1->setMatricula(1111);
		$a1->setIdade(16);
		$a1->setSexo("M");
		$a1->setCurso("Informática");
		$a1->pagarMensalidade();
		print_r($a1);

		$b1 = new Bolsista();
		$b1->setMatricula(1112);
		$b1->setNome("Jubileu");
		$b1->setBolsa(250);
		$b1->setCurso("Administração");
		$b1->setIdade(17);
		$b1->pagarMensalidade(); //Cannot override final method Aluno::pagarMensalidade()
		print_r($b1);


	?></pre>
</body>
</html>