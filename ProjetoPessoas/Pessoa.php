<?php

class Pessoa {
   private $Nome;
   private $Idade;
   private $Sexo;
   
   public function fazerAniversario() {
	  $this->idade ++;
   }
   public function getNome() {
	  return $this->Nome;
   }

   public function getIdade() {
	  return $this->idade;
   }

   public function getSexo() {
	  return $this->sexo;
   }

   public function setNome($Nome) {
	  $this->Nome = $Nome;
   }

   public function setIdade($idade) {
	  $this->idade = $idade;
   }

   public function setSexo($sexo) {
	  $this->sexo = $sexo;
   }


}
