<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 03</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <p><h3>Faça um programa que receba dois números inteiros e gere os números inteiros que estão no intervalo compreendidos por eles: </h3></p>
  
  <br>

  <form action="" method="GET">
    <label for="">Informe o primeiro número: </label><br>
    <input type="text" name="num1"><br>
    <label for="">Informe o segundo número: </label><br>
    <input type="text" name="num2"><br>
    <button type="submit">Enviar</button><br>
  </form>

  <?php 

  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];

  echo "<br>Intervalo entre os números {$num1} e {$num2}: ";
  echo "<br>";
  for ($i = $num1 + 1; $i < $num2; $i++){
    echo $i . "<br>";
  }





?>
</body>
</html>