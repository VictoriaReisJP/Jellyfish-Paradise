<?php
// Verificar se o formulário foi enviado.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  // Verificar se o login e senha estão corretos
  if ($login == "paradise" && $senha == "1011") {
    // Redirecionar para a página menu.php
    header("Location: /sistema/JellyfishParadise/menu.php");
    exit;
  } else {
    // Mostrar mensagem de erro se o login ou senha estiverem incorretos
    $erro = "Login ou senha incorretos!";
  }
  
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jellyfish Paradise</title>
    <link rel="icon" href="jellyfish_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/index_dois.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <div><img id="jellyfish_logo" src="img/jellyfish_logo.png" alt="logo" width=50px></div> 
    <div class="paradise"> Jellyfish Paradise </div>
</header>
<form method="POST" action="#">
<div class="corpo">
    <div class="welcome">
        <h1>SEJA BEM VINDO!</h1>
    </div>
    <div class="campos_respostas">
    <div><h3>LOGIN <div class="login"><input type="text"  id="login" name="login" required title="Insira seu login"></div></h3></div>
    <div><h3>SENHA <div class="senha"><input type="password"  id="senha" name="senha" required title="Insira sua senha"></div></h3></div>

        <div class="botão"><input type="submit" value="LOGAR" id="bt_login"></div>
        <?php if (isset($erro)) {
        echo "<p style='color: red;'>$erro</p>";
      } ?>
    </div>
</div>
</form>  
    
</body>
</html>