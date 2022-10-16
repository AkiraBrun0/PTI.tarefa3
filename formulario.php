<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles.css">

  <title>Boas Vindas</title>
</head>

<body>
  <div class=post-php>
    <?php
    if ($_POST['nome'] && $_POST['senha']) {
      $nome = $_POST['nome'];
      $senha = $_POST['senha'];

      echo "User: $nome";
      echo "<div class='boas-vindas'>";

      echo "<h1>Bem vindo!</h1> <br>";
      echo "<p>Seu código está funcionando</p>";

      echo "</div>";
    } else {
      echo "<div class='boas-vindas'>";

      echo "<h1>Você não preencheu a senha!</h1> <br>";
      echo "<p>Mas seu código está funcionando</p> <br>";
      echo "<input type='button' value='Voltar' class='btn' onClick='history.go(-1)'>";
      echo "</div>";
    }
    ?>
  </div>

</body>

</html>