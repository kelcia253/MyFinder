<?php
//include('conexao.php');
 
 if(isset($_POST['botaoId'])){
  echo "oi lalala " . $_POST['id_produtos'];
 }  

if(isset($_POST['id_produtos'])){
 
    $id_produtos = $_POST['id_produtos'];
  
    //consulta SQL para recuperar as informações do produto com o ID fornecido
    $sql_code = "SELECT * FROM produtos WHERE id_produtos = '$id_produtos'";
   /* $sql_query = $conexao->query($sql_code) or die("Falha na execução do banco de dados" . $conexao->error);
    
    //exibe as informações do produto
    $dados = $sql_query->fetch_assoc();
    echo "<h1>" . $dados['nome'] . "</h1>";
    echo "<p>" . $dados['descricao'] . "</p>";
    echo "<a href='" . $dados['link'] . "' class='btn btn-primary' target='_blank'>Visitar</a>";*/
} else {
    echo "ID do produto não fornecido.";
}
?>
