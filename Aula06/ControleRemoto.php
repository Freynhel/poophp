<?php

require_once 'Controlador.php';

	class ControleRemoto implements Controlador {
		private $volume;
		private $ligado;
		private $tocando;

		public function ligar() {
			$this -> setLigado(true);
		}

		public function desligar() {
			$this -> setLigado(false);
		}

		public function abrirMenu() {
			echo '<br> Está Ligado? ' . ($this -> getLigado()?'SIM':'NÃO');
			echo '<br> Está Tocando? '. ($this -> getTocando()?'SIM':'NÃO');
			echo '<br> Volume: ' . $this -> getVolume();
		}

		public function fecharMenu() {
			echo 'Fechando Menu!';
		}

		public function maisVolume() {
			if ($this -> getLigado()) {
				$this -> setVolume($this -> getVolume() + 5);
			}
		}

		public function menosVolume() {
			if ($this -> getLigado()) {
				$this -> setVolume($this -> getVolume() - 5);
			}
		}

		public function ligarMudo() {
			if ($this -> getLigado() && $this -> getVolume() > 0) {
				$this -> setVolume(0);
			}
		}

		public function desligarMudo() {
			if ($this -> getLigado() && $this -> getVolume() == 0) {
				$this -> setVolume(50);
			}
		}

		public function play() {
			if ($this -> getLigado() && !$this -> getTocando()) {
				$this -> setTocando(true);
			}
		}

		public function pause() {
			if ($this -> getLigado() && $this -> getTocando()) {
				$this -> setTocando(false);
			}
		}

		function __construct() {
			$this->volume = 50;
			$this->ligado = false;
			$this->tocando = false;
		}

		private function getVolume() { return $this->volume; 	}
		private function getLigado() { return $this->ligado; 	}
		private function getTocando() { return $this->tocando; 	}
		private function setVolume($V) { $this->volume = $V; 	}
		private function setLigado($L) { $this->ligado = $L; 	}
		private function setTocando($T) { $this->tocando = $T; 	}
	}
?>