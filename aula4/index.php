<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP OO</title>
  </head>
  <body>
    <pre>
      <?php
        require_once 'Caneta.php';

        //$c1 = new Caneta;

        $c1 = new Caneta("BIC", "Azul", 0.5); // Metodo construtor
        $c2 = new Caneta("Castell", "Preta", 0.1);
        print_r($c1);
        print_r($c2);

        // Inicio metodo setter
        // $c1->setModelo("BIC");
        // $c1->setPonta(0.5);
        // Fim metodo setter

        // Inicio metodo getter
        // echo "<br>Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
        // Fim metodo getter
       ?>
    </pre>
  </body>
</html>
