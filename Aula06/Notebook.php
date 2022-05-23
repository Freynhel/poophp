<?php
	require_once 'NotebookCtrl.php';
	class Notebook implements NotebookCtrl {
		private $ligado;
		private $logado;
		private $texto;
		private $wordStatus;
		private $arqStatus;

		public function __construct() {
			$this->ligado = false;
			$this->logado = false;
			$this->wordStatus = false;
		}

		private function getLigado() { return $this -> ligado ; }
		private function getLogado() { return $this -> logado ; }
		private function getTexto() { return $this -> texto ; }
		private function getWordStatus() { return $this -> wordStatus; }
		private function getArqStatus() { return $this -> arqStatus; }

		private function setLigado($ligado) { $this -> ligado = $ligado; }
		private function setLogado ($logado) { $this -> logado = $logado; }
		private function setTexto($texto) { $this -> texto = $texto; }
		private function setWordStatus($wordStatus) { $this -> wordStatus = $wordStatus; }
		private function setArqStatus($arqStatus) { $this -> arqStatus = $arqStatus; }

		public function detalhes() {
			echo '<br>Ligado: ' . ($this -> getLigado() ? 'Sim' : 'Não');
			echo '<br>Logado: ' . ($this -> getLogado() ? 'Sim' : 'Não');
			echo '<br>Word: ' . ($this -> getWordStatus() ? 'Aberto' : 'Fechado');
		}

		public function ligar() {
			$this -> setLigado(true);
			echo '<br> Notebook ligado!';
		}

		public function desligar() {
			$this -> setLigado(false);
			$this -> setLogado(false);
			$this -> setWordStatus(false);
			echo '<br> Notebook desligado!';
		}

		public function login() {
			$this -> setLogado(true);
			echo '<br> Usuário Logado';
		}

		public function logout() {
			$this -> setLogado(false);
			echo '<br> Usuário Deslogado';
		}

		public function abrirWord() {
			if($this -> getLigado() && $this -> getLogado()) {
				$this -> setWordStatus(true);
				echo '<br> Aplicativo Word Aberto!';
			}
		}

		public function digitar($texto) {
			if($this -> getWordStatus()) {
				if ($texto == "") {
					echo '<br> Você não digitou nada!';
				
				} else {
					$this -> setTexto($texto);
					echo '<br> Você digitou ' . $this->getTexto();

				}

				$this->setArqStatus(false);
	
			} else {
				echo '<br> Abra um documento de texto para começar a digitar!';
			}
		}

		public function salvarWord() {
			if(!$this -> getArqStatus() && $this -> getWordStatus()) {
				$this -> setArqStatus(true);
				echo '<br> Você salvou o documento com o texto: ' . $this->texto;
			}
		}

		public function fecharWord() {
			$this -> setWordStatus(false);
		}
	}
?>