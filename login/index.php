<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="_css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">;
</head>

<body>
<div class="login-box">
<h1>Login</h1>
<?php
if (isset($_SESSION['nao_autenticado'])):
?>
<p class="erro">ERRO: Usuário ou senha inválidos.</p>
<?php
endif;
unset($_SESSION['nao_autenticado']);
?>
<div class="textbox">
<form method="post" action="login.php">
<i class="fas fa-user" aria-hidden="true"></i>
<input type="text" placeholder="Username" name="usuario" value="">
</div>

<div class="textbox">
<i class="fas fa-lock" aria-hidden="true"></i>
<input type="password" placeholder="Passoword" name="senha" value="">
</div>
<button type="submit" class="btn">Sing in</button>
</form>
</div>
</body>
</html>
