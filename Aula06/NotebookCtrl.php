<?php
	interface NotebookCtrl {
		public function ligar();
		public function desligar();
		public function login();
		public function logout();
		public function abrirWord();
		public function digitar($texto);
		public function salvarWord();
		public function fecharWord();
	}
?>