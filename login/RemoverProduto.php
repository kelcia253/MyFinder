<?php
if(isset($_POST['botaosId'])){
    $id_produtos = $_POST['id_produtos'];
  
    // Estabelecer a conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "myfinder");
  
    // Verificar se a conexão foi estabelecida com sucesso
    if(mysqli_connect_errno()){
      echo "Falha na conexão com o banco de dados: " . mysqli_connect_error();
      exit();
    }
  
    // Preparar a consulta SQL
    $sql_code = "DELETE FROM produtos WHERE id_produtos = '$id_produtos'";
  
    // Executar a consulta SQL
    $resultado = mysqli_query($conexao, $sql_code);
  
    // Verificar se a consulta foi executada com sucesso
    if($resultado){
      // Verificar se foram encontrados registros
      if(mysqli_num_rows($resultado) > 0){
        // Loop para processar cada registro retornado pela consulta
        while($row = mysqli_fetch_assoc($resultado)){
          // Acessar os valores retornados do banco de dados
          $id = $row['id_produtos'];
          $nome = $row['nome'];
         $descricao = $row['descricao'];
         $link = $row['link'];
       
  
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