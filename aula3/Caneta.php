<?php 
	// $this vai significar o objeto que foi chamado //
	// 
	class Caneta
	{
		public $modelo;
		public $cor;
		private $ponta;
		protected $carga;
		protected $tampada;

		public function rabiscar()
		{
			if ($this->tampada == true) {
				echo "<p>Destampa a caneta burro!!!</p>";
			}else{
				echo "<p>Estou rabiscando...</p>";
			}
		}
		public function tampar()
		{
			$this->tampada = true;
		}
		public function destampar()
		{
			$this->tampada = false;
		}
	}	
?>
