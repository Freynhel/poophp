<?php

use function PHPSTORM_META\override;

	require_once __DIR__ . '/Aluno.php';
	
	// Class Bolsista may not inherit from final class (Aluno)
	class Bolsista extends Aluno {
		private $bolsa;

		public function pagarMensalidade() {
			echo "<p>$this->nome é bolsista! Então paga com desconto!</p>";
		}

		public function renovarBolsa() {
			echo '<p>Bolsa renovada</p>';
		}

		public function getBolsa() {
			return $this->bolsa;
		}

		public function setBolsa($bol) {
			$this->bolsa = $bol;
		}
	}