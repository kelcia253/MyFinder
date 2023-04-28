<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionar novo produto</title>
    <link rel='stylesheet' type='text/css' media='screen' href='configuraçoes.css'>
    <link rel = 'stylesheet' type = 'text/css' media='screen' href='../css/bootstrap.min.css'>
    <script src='../js/bootstrap.bundle.min.js'></script>
    <script src='main.js'></script>
    <link rel="stylesheet" href="./loginCss/cadastro.css">
</head>
 
<body class="text-center">
<form class="form-signin" action="NovoProduto.php" method="post" >
    <div class="border border-dark p-2 mb-2 border-2 border" id="borda">
        <h1 class="h3 mb-3 font-weight-normal align-self-center">Adicione um novo produto</h1>
        <label for="inputNome" class="sr-only"></label> 
        <input type="text" name="nome" id="inputNome" class="form-control" placeholder="Nome do produto..." required autofocus>
        <label for="inputDescricao" class="sr-only"></label>
        <input type="text" name="descricao" id="inputdescricao" class="form-control" placeholder="Descrição..." required>
        <label for="inputPassword" class="sr-only"></label>
        <input type="text" name="link" id="inputLink" class="form-control" placeholder="Link..." required>
        <label for="inputLink" class="sr-only"></label>


        
      
 
  

        <div id="botaoNovo">
    <button class="btn btn-Lg btn-dark btn-block" type="submit" >Adicionar</button>
    <button class="btn btn-Lg btn-dark btn-block" type="reset">Limpar</button>
    </div>
    <p class="mt-5 mb-3 text-muted">Desde 2023</p>
    </form>   
    <?php
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
        
        
        
        
        ?>

    <form action="" method="post" enctype="multipart/form-data">
    <label for="imagem">Selecione uma imagem:</label> 
  <input type="file"  name="file">
  <input type="submit" name="acao" value="enviar">

    </form>
    </div>
   
    
</body>
 
</html>