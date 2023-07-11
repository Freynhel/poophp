<?php
	class Pessoa {
		private $nome;
		private $idade;
		private $sexo;

		public function fazerAniv() {
			$this->setIdade($this->getIdade() + 1);
		}

		public function setNome($a) { $this->nome = $a; }
		public function setIdade($a) { $this->idade = $a; }
		public function setSexo($a) { $this->sexo = $a; }

		public function getNome() { return $this->nome; }
		public function getIdade() { return $this->idade; }
		public function getSexo() { return $this->sexo; }

	}
?>