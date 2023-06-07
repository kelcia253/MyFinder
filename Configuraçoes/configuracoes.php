<?php
session_start();
include("conexao.php");

if (isset($_POST['id_cliente'])) {
    $id_cliente = $_POST['id_cliente'];

    // Estabelecer a conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "myfinder");

    // Verificar se a conexão foi estabelecida com sucesso
    if (mysqli_connect_errno()) {
        echo "Falha na conexão com o banco de dados: " . mysqli_connect_error();
        exit();
    }

    // Preparar a consulta SQL
    $sql_code = "SELECT * FROM cliente WHERE id_cliente = '$id_cliente'";

    // Executar a consulta SQL
    $resultado = mysqli_query($conexao, $sql_code);

    // Verificar se a consulta foi executada com sucesso
    if ($resultado) {
        // Verificar se foram encontrados registros
        if (mysqli_num_rows($resultado) > 0) {
            // Loop para processar cada registro retornado pela consulta
            while ($row = mysqli_fetch_assoc($resultado)) {
                // Acessar os valores retornados do banco de dados
                $id = $row['id_cliente'];
                $nome = $row['nome'];
                $email  = $row['email'];
                $senha = $row['senha'];
                $senha = md5($senha);
              

                // Realizar qualquer ação necessária com os valores obtidos
            }
        } else {
            echo "Nenhum registro encontrado.";
        }
    } else {
        echo "Erro na execução da consulta: " . mysqli_error($conexao);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
}
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MyFinder</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='MeusProdutos.css'>
    <link rel = 'stylesheet' type = 'text/css' media='screen' href='../css/bootstrap.min.css'>
    <script src='../js/bootstrap.bundle.min.js'></script>
    <script src='main.js'></script>
</head>
<body>
   
  
  <!--MENU de notificação-->
     
    <nav class="navbar bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#" style="color: white">
            MyFinder
          </a>
          
        </div>
      </nav>
      <!--fim do nome do site-->

      <!--MENU de notificação-->
          <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="./posLogin.php" style="color: white">Principal</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active meu-produto" aria-current="page" href="../login/MeusProdutos.php" style="color: white">Meus Produtos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active configuracoes" aria-current="page" href="../Configuraçoes/configuracoes.php" style="color: white">Configurações</a>
                  </li>
                 
                </ul>

               


              </div>
            </div>
          </nav>
          <div class="text-center">
          <form class="form-signin" action="cadastrar.php" method="post">
    <div class="border border-dark p-2 mb-2 border-2 border cadastro" id="borda">
        <h1 class="h3 mb-3 font-weight-normal align-self-center">Editar Usuário</h1>
        <label for="inputNome" class="sr-only"></label> 
        <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Nome"  value="<?php echo $nome; ?>" required autofocus>
        <label for="inputEmail" class="sr-only"></label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email"  value="<?php echo $email; ?>"required>
        <label for="inputPassword" class="sr-only"></label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha"  value="<?php echo $senha; ?>"required>
        <div id="botaologin">
    <button class="btn btn-Lg btn-dark btn-block" type="submit">Enviar</button>
    <button class="btn btn-Lg btn-dark btn-block" type="reset">Limpar</button>
    </div>
    <h8>Já tem cadastro? <a href="../login/Login.php">Clique aqui!</a></h8>
    <p class="mt-5 mb-3 text-muted">Desde 2023</p>
    </form>   
    </div>

    <style>
    .text-center{
      max-width: 50%;
      margin-top: 50px;
      margin-left: 25%;
    }
    
    
    
    </style>
  

   
</body>
      <!--Fim do menu-->
       
      
</body>
</html>