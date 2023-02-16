<?php
  include("conexao.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MyFinder</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='configuraçoes.css'>
    <link rel = 'stylesheet' type = 'text/css' media='screen' href='../css/bootstrap.min.css'>
    <script src='../js/bootstrap.bundle.min.js'></script>
    <script src='main.js'></script>
</head>
<body>
  
    <form action="" method="post">
        <h1>Acesse sua conta</h1>
        <p>
            <label>Email</label>
            <input type="email" name="email" autofocus required>
            </p>
        <p>
        <label>Senha</label>
        <input type="password" name="senha"  required>
        </p>
        <p>
            <button type="submit"> Entrar</button>
        </p>
    </form>
 
  
       
      
</body>
</html>