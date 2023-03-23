<?php
//echo $_SERVER['REQUEST_METHOD'];
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao,trim($_POST['nome']));
$descricao = mysqli_real_escape_string($conexao,trim($_POST['descricao']));
$link = mysqli_real_escape_string($conexao,trim($_POST['link']));   

$sql = "SELECT COUNT(*) AS total FROM produtos WHERE nome = '".$nome."'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
echo($sql);

if($row['total'] == 1){
    $_SESSION['produtos_existe'] = true;
     

    header('Location: TelaNovoProduto.php');
    exit;
}

$sql = "INSERT INTO produtos (nome, descricao, link) VALUES ('$nome', '$descricao', '$link')";
echo ($sql);

$result = mysqli_query($conexao, $sql);
//$row = mysqli_fetch_assoc($result);
//if($conexao->query($sql) === TRUE){
//    $_SESSION['status_cadastro'] = true;
//}


echo("sql: ".$sql);
header("Location: MeusProdutos.php");

?>