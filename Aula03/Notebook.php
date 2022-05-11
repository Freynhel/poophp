<?php
	class Notebook {
		var $marca;
		var $modelo;
		var $cpu;
		var $gpu;
		var $ram;
		var $armHDD;
		var $armSSD;
		var $cor;
		var $tamTela;
		var $resolucao;
		var $SO;
		var $temperatura;

		var $ligado;
		var $logado;


		function ligar() {
			$this->ligado = true;
			echo '<p>Computador ligado!</p>';
		}

		function desligar() {
			$this->ligado = false;
			echo '<p>Computador desligado!</p>';
		}

		function fazerLogin() {
			if($this->ligado) {
				$this->logado = true;
				echo '<p>Bem vindo!</p>';
			} else {
				echo '<p>O Notebook precisa estar ligado para fazer login!</p>';
			}
		}

		function abrirPasta() {
			if ($this->logado) {
				echo "<p>Você abriu a pasta</p>";
			} else {
				echo "<p>Faça login para abrir uma pasta</p>";
			}
		}
	}


?>