<?php 
	class Lutador {
		private $nome, $nacionalidade, $idade;
		private $altura, $peso, $categoria;
		private $vitorias, $derrotas, $empates;

		public function __construct($no, $na, $idd, $al, $pe, $vi, $de, $em) {
			$this->setNome($no);
			$this->setNacionalidade($na);
			$this->setIdade($idd);
			$this->setAltura($al);
			$this->setPeso($pe);
			$this->setVitorias($vi);
			$this->setDerrotas($de);
			$this->setEmpates($em);
		}

		public function apresentar(){
			echo "<p>----------------------------------</p>";
			echo "Chegou a hora! O lutador " . $this->getNome();
			echo " veio diretamente de " . $this->getNacionalidade() . ",";
			echo " tem " . $this->getIdade() . " anos e pesa " . $this-> getPeso() . "Kg";
			echo "<br>Ele tem " . $this->getVitorias() . " vitórias, ";
			echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
		}

		public function status(){
			echo "<p> ---------------------------------- </p>";
			echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
			echo " e já ganhou " . $this->getVitorias() . " vezes, ";
			echo " perdeu " . $this->getDerrotas() . " vezes e ";
			echo " empatou " . $this->getEmpates() . " vezes!";
		}
		
		public function ganharLuta(){$this->setVitorias($this->getVitorias() + 1);}
		public function perderLuta(){$this->setDerrotas($this->getDerrotas() + 1);}
		public function empatarLuta(){$this->setEmpates($this->getEmpates() + 1);}


		public function setPeso($pe) {
			$this->peso = $pe;
			$this->setCategoria();
		}

		private function setCategoria() {
			if ($this->getPeso() < 52.2) {
				$this->categoria = "Inválido";

			} elseif ($this->getPeso() <= 70.3) {
				$this->categoria = "Leve";

			} elseif ($this->getPeso() <= 83.9) {
				$this->categoria = "Médio";
				
			} elseif ($this->getPeso() <= 120.2) {
				$this->categoria = "Pesado";

			} else {
				$this->categoria = "Inválido";
			}
		}


		public function setNome($no){$this->nome = $no;}
		public function setNacionalidade($na){$this->nacionalidade = $na;}
		public function setIdade($idd){$this->idade = $idd;}
		public function setAltura($al){$this->altura  = $al;}
		public function setVitorias($vi){$this->vitorias = $vi;}
		public function setDerrotas($de){$this->derrotas = $de;}
		public function setEmpates($em){$this->empates = $em;}

		public function getNome() {return $this->nome;}
		public function getNacionalidade() {return $this->nacionalidade;}
		public function getIdade() {return $this->idade;}
		public function getAltura() {return $this->altura;}
		public function getPeso() {return $this->peso;}
		public function getCategoria() {return $this->categoria;}
		public function getVitorias() {return $this->vitorias;}
		public function getDerrotas() {return $this->derrotas;}
		public function getEmpates() {return $this->empates;}

	}
?>