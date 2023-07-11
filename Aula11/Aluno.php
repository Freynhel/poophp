<?php
	require_once __DIR__ . '/Pessoa.php';

	class Aluno extends Pessoa {
		private $matricula;
		private $curso;

		public function pagarMensalidade() {
			echo "<p>Pagando mensalidade do aluno $this->nome</p>";
		}

		public function getMatricula() {
			return $this->matricula;
		}

		public function setMatricula($mat) {
			$this->matricula = $mat;
		}

		public function getCurso() {
			return $this->curso;
		}

		public function setCurso($cur) {
			$this->curso = $cur;
		}
	}