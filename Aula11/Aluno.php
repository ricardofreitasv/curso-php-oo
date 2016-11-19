<?php
require_once 'Pessoas.php';
class Aluno extends Pessoas{
   private $matricula;
   private $curso;
   public function pagarMensalidade(){
	  echo "<p>Pagando mensalidade do aluno $this->nome";
   }
   public function getMatricula() {
	  return $this->matricula;
   }

   public function getCurso() {
	  return $this->curso;
   }

   public function setMatricula($matricula) {
	  $this->matricula = $matricula;
   }

   public function setCurso($curso) {
	  $this->curso = $curso;
   }


}
