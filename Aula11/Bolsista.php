<?php
require_once 'aluno.php';
class Bolsista extends Aluno {
   private $bolsa;
   public function renovarBolsa(){
	  echo "bolsa renovada!";
   }
   public function pagarMensalidade(){
   echo "<p>$this->nome é bolsista! Então paga com desconto!";
   }
   public function getBolsa() {
	  return $this->bolsa;
   }

   public function setBolsa($bolsa) {
	  $this->bolsa = $bolsa;
   }


}
