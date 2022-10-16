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
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    echo "User: $nome";
    ?>
  </div>
  <div class="boas-vindas">

    <h1>Bem vindo!</h1> <br>
    <p>Seu código está funcionando</p>

  </div>
</body>

</html>