<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 02</title>
</head>
<body>
  <a href="index.php">Voltar</a>
  
  <p><h3>Faça um programa que imprima na tela apenas os números ímpares entre 1 e 50: </h3></p>

  <br>

  <?php

  $i;

  for( $i = 0; $i <= 50; $i++ ){
    if ($i % 2 != 0){
      echo $i . "<br>";
    }
  }





?>


</body>
</html>