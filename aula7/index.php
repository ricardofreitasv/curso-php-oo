<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Curso PHP OO - Curso em Video</title>
  </head>
  <body>
    <pre>
      <?php
        require_once 'Lutador.php';
        $l = array();
        $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);

        $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);

        $l[2] = new Lutador("SnapShadown", "EUA", 35, 1.65, 80.9, 12, 2, 1);

        $l[3] = new Lutador("DeadCode", "Australia", 28, 1.93, 81.1, 13, 0, 2);

        $l[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);

        $l[5] = new Lutador("Nerdaart", "EUA", 30, 1.81,  105.1, 12, 2, 4);

        echo $l[0]->apresentar() . "<br>";
        echo $l[1]->apresentar() . "<br>";
        echo $l[2]->apresentar() . "<br>";
        echo $l[3]->apresentar() . "<br>";
        echo $l[4]->apresentar() . "<br>";
        echo $l[5]->apresentar() . "<br>";
       ?>
    </pre>
  </body>
</html>
