<?php
include "conexão.php";
if (isset($_POST['botaoId'])) {
    $id_produtos = $_POST['id_produtos'];

    // Estabelecer a conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", "myfinder");

    // Verificar se a conexão foi estabelecida com sucesso
    if (mysqli_connect_errno()) {
        echo "Falha na conexão com o banco de dados: " . mysqli_connect_error();
        exit();
    }

    // Preparar a consulta SQL
    $sql_code = "DELETE FROM produtos WHERE id_produtos = '$id_produtos'";

    // Executar a consulta SQL
    $resultado = mysqli_query($conexao, $sql_code);

    // Verificar se a consulta foi executada com sucesso
    if ($resultado) {
        echo "Registro excluído com sucesso.";
    } else {
        echo "Erro na exclusão do registro: " . mysqli_error($conexao);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
}
?>
