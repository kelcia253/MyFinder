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
       
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cliente WHERE email = '$email' AND senha ='$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do banco de dados" . $mysqli->error);
        

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