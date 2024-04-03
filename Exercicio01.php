<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 01</title>
</head>
<body>

<a href="index.php">Voltar</a>

<p><h3>Exercício 01 - Faça um programa que imprima na tela os números de 1 a 20, um abaixo do outro. Depois modifique o programa para que ele mostre
  os números um ao lado do outro.</h3></p>

  <br>

  <?php

  $i = 0;

  for( $i = 0; $i <= 20; $i++ ){
    echo $i . "<br>";
  }

  echo "<br><br><br>";

  for( $i = 0; $i <= 20; $i++ ){
    echo $i . " - ";
  }


?>
  
</body>
</html>