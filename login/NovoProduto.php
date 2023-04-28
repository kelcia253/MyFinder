<?php
//echo $_SERVER['REQUEST_METHOD'];
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao,trim($_POST['nome']));
$descricao = mysqli_real_escape_string($conexao,trim($_POST['descricao']));
$link = mysqli_real_escape_string($conexao,trim($_POST['link'])); 
$imagem = date("Ymd").date("His").mysqli_real_escape_string($conexao,trim($_POST['imagem']));   


//include("conexao.php");

 if(isset($_POST['acao'])){
     $arquivo = $_FILES['file'];
     $arquivoNovo = explode('.', $arquivo['name']);
     if($arquivoNovo[sizeof($arquivoNovo)-1] !='jpg'){
         die('Este tipo de arquivo não pode fazer upload');

     }else{
         echo "Upload ok!";
         move_uploaded_file($arquivo['tmp_name'], 'imagensProduto/' .date("Ymd").date("His").$arquivo['name']);
     }
 }
 
 
 
 


$sql = "SELECT COUNT(*) AS total FROM produtos WHERE nome = '".$nome."'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);
echo($sql);

if($row['total'] == 1){
    $_SESSION['produtos_existe'] = true;
     

    header('Location: TelaNovoProduto.php');
    exit;
}

$sql = "INSERT INTO produtos (nome, descricao, link, imagem) VALUES ('$nome', '$descricao', '$link', '$imagem')";
echo ($sql);

$result = mysqli_query($conexao, $sql);
//$row = mysqli_fetch_assoc($result);
//if($conexao->query($sql) === TRUE){
//    $_SESSION['status_cadastro'] = true;
//}



echo("sql: ".$sql);
header("Location: MeusProdutos.php");




?>
