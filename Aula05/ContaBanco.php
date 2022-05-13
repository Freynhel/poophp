<?php

	class ContaBanco {
		public 		$numConta;
		protected	$tipo;
		private		$dono;
		private		$saldo;
		private		$status;

		public function __construct() {
			$this->saldo = 0;
			$this->status = false;
		}

		public function getNumConta() { return $this->numConta; }
		public function getTipo() { return $this->tipo; }
		public function getDono() { return $this->dono; }
		public function getSaldo() { return $this->saldo; }
		public function getStatus() { return $this->status; }
		public function setNumConta($n) { $this->numConta = $n; }
		public function setTipo($t) { $this->tipo = $t; }
		public function setDono($d) { $this->dono = $d; }
		public function setSaldo($s) { $this->saldo = $s; }
		public function setStatus($stts) {$this->status = $stts; }

		public function abrirConta($t) {
			switch ($t = strtoupper($t)) {
				case 'CC':
					$this->setTipo($t);
					$this->setSaldo(50);
					$this->setStatus(true); break;
				case 'CP':
					$this->setTipo($t);
					$this->setSaldo(150);
					$this->setStatus(true); break; 
								
				default: echo 'Tipo de conta não reconhecido, insira CC ou CP'; break; 
			}
		}
		
		public function fecharConta() {

		}

		public function depositar() {

		}

		public function sacar() {

		}

		public function pagarMensal() {

		}
	}

?>