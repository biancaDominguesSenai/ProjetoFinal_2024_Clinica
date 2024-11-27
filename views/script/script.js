/* Botao de redirecionar atraves do dropdown */
function redirecionarPagina() {
    var select = document.getElementById("inputGroupSelect01");
    var opcaoSelecionada = select.options[select.selectedIndex].value;

    if (opcaoSelecionada !== "") {
        document.location.href = opcaoSelecionada;
    }
}

/* aparece div para o botão de ajuda */
function exibirDiv() {
    var div = document.getElementById("minhaDiv");
    if (div.style.display === "block") {
        div.style.display = "none"; // Esconde a div quando já estiver visível
    } else {
        div.style.display = "block"; // Mostra a div quando estiver escondida
    }
}