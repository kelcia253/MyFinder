function verificar() {
    try {
        var elemento = document.getElementById("inputPreco").value;
        var resposta = document.getElementById("mesg");

        if (elemento === "") {
            throw "Campo vazio!";
        } else if (isNaN(elemento)) {
            throw "Não é um número válido";
        } else {
            throw "Erro identificado";
        }
    } catch (error) {
        resposta.innerText = "Erro: " + error;
    }
}

function limpar() {
    var resposta = document.getElementById('mesg');
    resposta.innerHTML = "";
}
