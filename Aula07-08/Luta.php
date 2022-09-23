<?php

require_once __DIR__ . '/Lutador.php';

	class Luta {
		private $desafiado;
		private $desafiante;
		private $rounds;
		private $aprovada;

		public function marcarLuta($l1, $l2){
			if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
				$this->setAprovada(true);
				$this->setDesafiado($l1);
				$this->setDesafiante($l2);
				echo 'Luta marcada com sucesso!';

			} else {
				$this->setAprovada(false);
				$this->setDesafiado(null);
				$this->setDesafiante(null);
			}
		}

		public function lutar(){
			if($this->getAprovada()) {
				$this->getDesafiado()->apresentar();
				$this->getDesafiante()->apresentar();
				
				$vencedor = rand(0, 2);

				switch($vencedor) {
					case 0:
						echo '<br><br>Empate!!';
						$this->getDesafiado()->empatarLuta();
						$this->getDesafiante()->empatarLuta();
						break;
					
					case 1: 
						echo '<br><br>' . $this->desafiado->getNome() . " venceu!";
						$this->getDesafiado()->ganharLuta();
						$this->getDesafiante()->perderLuta();
						break;

					case 2: 
						echo '<br><br>' . $this->desafiante->getNome() . " venceu!";
						$this->getDesafiante()->ganharLuta();
						$this->getDesafiado()->perderLuta();
						break;		
				}

			} else { echo '<p><b>Desculpe, a luta não foi aprovada!</b></p>'; }
		}

		public function resultados() {
			return $this->getDesafiado()->status() . '<br>' . $this->getDesafiante()->status();
		}

		private function setDesafiado($varA){$this->desafiado = $varA;}
		private function setDesafiante($varB){$this->desafiante = $varB;}
		private function setRounds($varC){$this->rounds = $varC;}
		private function setAprovada($varD){$this->aprovada = $varD;}

		private function getDesafiado() { return $this->desafiado; }	
		private function getDesafiante() { return $this->desafiante; }
		private function getRounds() { return $this->rounds; }
		public function getAprovada() { return $this->aprovada; }
	}
?>