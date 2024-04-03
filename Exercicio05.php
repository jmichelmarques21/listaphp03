<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 05</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <p><h3>Exercício 05 - Desenvolva um gerador de tabuada, capaz de gerar a tabuada de qualquer número inteiro entre 1 a 10. O usuário deve informar
    de qual número ele deseja ver a tabuada.</h3></p>
    <br>

    <form action="" method="GET">
      <label for="">Qual tabuada você deseja visualizar? </label><br>
      <input type="text" name="num"><br>
      <button type="submit">Enviar</button><br><br>
    </form>

    <?php

  $num = $_GET['num'];
  $resultado;


  echo "TABUADA DE {$num}: <br><br>";
  for ($i = 0; $i <= 10; $i++) {
    $resultado = $num * $i;
    echo "{$num} x {$i} = {$resultado}<br>";
  }




?>
</body>
</html>