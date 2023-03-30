function vejaMais(idProduto) {


    // Recupera as informações do produto
    var nomeProduto = document.getElementById('nome_' + idProduto).innerHTML;
   // var descricaoProduto = document.getElementById('preco_' + idProduto).innerHTML;
    //var linkProduto = document.getElementById('quantidade_' + idProduto).value;

    // Armazena as informações no objeto localStorage
    var veja = JSON.parse(localStorage.getItem('veja') || '[]');
    var produto = {
      id: idProduto,
      nome: nomeProduto,
      //descricao: descricaoProduto,
      //link: linkProduto
    };
    veja.push(produto);
    localStorage.setItem('veja', JSON.stringify(veja));
  
    // Redireciona para a página do carrinho de compras
    window.location.href = 'veja.php';
  }
  