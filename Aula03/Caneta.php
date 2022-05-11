<?php
	class Caneta {
		public $modelo;
		public $cor;
		private $ponta;
		protected $carga;
		protected $tampada;

		public function rabiscar() {
			
			if($this->tampada) {
				echo '<p>Não posso rabiscar, estou tampada!</p>';

			} else {
				echo '<p>Estou rabiscando...</p>';
			}

		}

		private function tampar() {
			$this->tampada = true;
		}

		private function destampar() {
			$this->tampada = false;
		}
	}
?>