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
			if ($this->getSaldo() > 0) {
				echo "Conta ainda possui dinheiro";

			} elseif ($this->getSaldo() < 0) {
				echo "Conta em débito";

			} else {
				$this->setStatus(false);
			}
		}

		public function depositar($dep) {
			if ($this->getStatus()) {
				$this->setSaldo($this->getSaldo() + $dep);
			} else {
				echo "Conta atualmente fechada";
			}
		}

		public function sacar($sac) {
			if ($this->getStatus() && $this->getSaldo() >= $sac) {
				$this->setSaldo($this->getSaldo() - $sac);
			}
		}

		public function pagarMensal() {
			$mensal = 0;
			switch ($this->getTipo()) {
				case 'CC':
					$mensal = 12;
					break;
				
				case 'CP':
					$mensal = 20;
					break;
			}

			if ($this->getStatus() && $this->getSaldo() >= $mensal) {
				$this->setSaldo($this->getSaldo() - $mensal);
			}


		}
	}

?>