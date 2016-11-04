<?php
  class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    // Metodo construtor
    public function Caneta($m, $c, $p){
      // Metodo Construtor pode ser declarado de duas formas: __construct ou o nome da classeCaneta
      $this->modelo = $m;
      $this->cor = $c;
      $this->ponta = $p;
      $this->tampar();
    }

    public function tampar(){
      $this->tampada = true;
    }

    public function getModelo(){
      return $this->modelo;
    }

    public function setModelo($m){
      $this->modelo = $m;
    }
    public function getPonta(){
      return $this->ponta;
    }

    public function setPonta($p){
      $this->ponta = $p;
    }
  }
 ?>
