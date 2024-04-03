<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 06</title>
</head>
<body>
  <a href="index.php">Voltar</a>
  
  <p><h3>Exercício 06 - A série de Fibonacci é formada pela sequência 1,1,2,3,5,8,13,21,34,55... Faça um programa capaz de gerar a série até o enésimo termo: </h3></p>
  

  <form action="" method="GET">
    <label for="">Informe um número (será o termo N da sequência Fibonacci): </label><br>
    <input type="text" name="n"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php
  $n = $_GET['n'];
  $num1 = 1; 
  $num2 = 0;

  echo "{$num2},{$num1},";

  for ($i = 0; $i < $n - 2; $i++){
    $num1 = $num1 + $num2;
    $num2 = $num1 - $num2;
    echo "{$num1},";
  }



 


  ?>

  

</body>
</html>