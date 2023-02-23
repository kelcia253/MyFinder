<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao,trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao,trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao,trim(md5($_POST['senha'])));   

$sql = "SELECT COUNT(*) AS total FROM cliente WHERE email = '".$email."'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['cliente_existe'] = true;
    header('Location: cadastro.php');
    exit;
}
$sql = "INSERT INTO cliente (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
//if($conexao->query($sql) === TRUE){
   // $_SESSION['status_cadastro'] = true;
//}


echo("sql: ".$sql);





?>