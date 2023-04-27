<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se um arquivo foi enviado
    if (isset($_FILES['imagem'])) {
        $imagem = $_FILES['imagem'];

        // Verifica se houve algum erro no upload
        if ($imagem['error'] === UPLOAD_ERR_OK) {
            $nomeTemporario = $imagem['tmp_name'];
            $nomeArquivo = $imagem['name'];

            // Move o arquivo temporário para o diretório desejado
            move_uploaded_file($nomeTemporario, './imagensProduto' . $nomeArquivo);

            // Exibe uma mensagem de sucesso
            echo "Upload realizado com sucesso!";
        } else {
            // Exibe uma mensagem de erro
            echo "Erro ao realizar o upload da imagem.";
        }
    }
}
?>
