<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 07</title>
</head>
<body>
  <a href="index.php">Voltar</a>
  <p><h3>Faça um programa que calcule o fatorial de um número inteiro fornecido pelo usuário: Ex: 5!=5.4.3.2.1 = 120: </h3></p>

  <form action="" method="GET">
    <label for="">Informe um número para o cálculo do seu fatorial: </label><br>
    <input type="text" name="num"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php

  $num = $_GET['num'];
  $fat;
  $calcFat = 1;

  echo "O fatorial de {$num} é: ";

  for ($i = $num; $i > 0; $i--){
    $fat = $i;
    $calcFat *= $fat;
    echo $fat . "!";
  }

  echo "<br>Resultado: {$calcFat}<br>";



  ?>
</body>
</html>