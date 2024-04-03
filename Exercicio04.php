<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 04</title>
</head>
<body>
  <a href="index.php">Voltar</a>
  
  <p><h3>Altere o programa anterior para mostrar no final a soma dos números: </h3></p>
  <br>

  <form action="" method="GET">
    <label for="">Informe o primeiro número: </label><br>
    <input type="text" name="num1"><br>
    <label for="">Informe o segundo número: </label><br>
    <input type="text" name="num2"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php  
  
  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];

  $i;
  $soma = 0;

  for($i = $num1 + 1; $i < $num2; $i++){
    echo $i . "<br>";
    $soma += $i;
  }

  echo "<br>A soma dos valores do intervalo é {$soma}";




?>

</body>
</html>