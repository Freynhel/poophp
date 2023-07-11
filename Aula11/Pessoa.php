<?php
	abstract class Pessoa {
		protected $nome;
		protected $idade;
		protected $sexo;

		public final function fazerAniversario() {
			$this->idade++;
		}

		public function setNome($a) { $this->nome = $a; }
		public function setIdade($b) { $this->idade = $b; }
		public function setSexo($c) { $this->sexo = $c; }

		public function getNome() { return $this->nome; }
		public function getIdade() { return $this->idade; }
		public function getSexo() { return $this->sexo; }
	}
	