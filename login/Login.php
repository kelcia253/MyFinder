<?php
  include("conexao.php");

  if(isset($_POST['email']) || isset($_POST['senha'])){
   
    if(strlen($_POST['email'])==0){
        echo"Preencha seu email";
    }
    else if(strlen($_POST['senha'])==0){
        echo"Preencha sua senha";
    }
    else{
       
        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cliente WHERE email = '$email' AND senha ='$senha'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do banco de dados" . $conexao->error);
        

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
           

            $ususario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['user'] = $cliente['id'];
            $_SESSION['name'] = $cliente['nome'];

           header("Location: painel.php");


        }else{
            echo "Falha ao logar! Email ou senha incorretos";
        }
    }

  }
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
    <link rel="stylesheet" href="./loginCss/login.css">
</head>
<body class="text-center">
  

    <form class="form-signin">
    <div class="border border-dark p-2 mb-2 border-2 border" id="borda">
        <h1 class="h3 mb-3 font-weight-normal">Acesso ao sistema</h1>
        <label for="inputLogin" class="sr-only"></label> 
        <input type="text" id="inputLogin" class="form-control" placeholder="Login" required autofocus>
        <label for="inputPassword" class="sr-only"></label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
        <div id="botaologin">
    <button class="btn btn-Lg btn-dark btn-block" type="submit">Enviar</button>
    <button class="btn btn-Lg btn-dark btn-block" type="reset">Limpar</button>
    </div>
    <p class="mt-5 mb-3 text-muted">Desde 2023</p>
    </form>   
    </div>

   
</body>
</html>