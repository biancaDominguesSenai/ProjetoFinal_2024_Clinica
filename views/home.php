<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="../views/Imagens/logo_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../projetofinal_2024_clinica/views/css/home.css">

    <title>SP Medical Group</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
                <a class="navbar-brand"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link hover-zoom" href="javascript:void(0)">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-zoom" href="#sobreNos">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hover-zoom" href="#contatos">Contatos</a>
                        </li>
                    </ul>
                    <form class="d-flex" method="POST" action="/projetofinal_2024_clinica/login">
                    <input type="hidden" name="action" value="login">
                        <button value="login" name="login" class="btn hover-zoom" type="submit" style="color: #efefef;" >LOGIN</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <section>
        <br>
        <div class="container imgHome" id="home">
            <img class="float-start" src="../../projetofinal_2024_clinica/views/Imagens/home.png" alt="Home">
            <img class="img-fluid" src="../../projetofinal_2024_clinica/views/Imagens/logo_preto.png" alt="Logo">
        </div>
        <br>
        <br>
        <div class="container" id="sobreNos">
            <div class="row">
                <h2 class="display-1">Sobre Nós</h2>
                <p class="lead">O SP Medical Group, em seu primeiro ano, destaca-se como uma clínica comprometida com a
                    saúde
                    integral. Com um corpo clínico especializado, prioriza não apenas o tratamento, mas também a
                    prevenção. Seu objetivo é proporcionar atendimento humanizado, inovador e orientado para a promoção
                    do bem-estar. Parabéns ao SP Medical Group por um ano dedicado a cuidar da saúde com excelência e
                    compromisso.</p>

                <div class="container" id="circulo1"></div>
                <div class="container" id="circulo2"></div>
                <div class="container" id="circulo3"></div>
            </div>
        </div>
    </section>
    <footer>
        <br>
        <div class="container-fluid footer" id="contatos">
            <div class="container">
                <div class="row">
                    <div class="col logo">
                        <img class="img-fluid" src="../../projetofinal_2024_clinica/views/Imagens/logo_preto.png" alt="logo">
                        <p style="text-align: center;">Cuidando sempre de você!</p>
                    </div>
                    <div class="col contatos">
                        <h2>contatos:</h2>
                        <ul>
                            <li>
                                <a href="">@instagramSpMedicaGroup</a>
                            </li>
                            <li>
                                <a href="">Página de ajuda ao consmidor</a>
                            </li>
                            <li>
                                <a href="">Endereço: Rua Presidente Prudente, 1007, Jd Botânico, salto - SP</a>
                            </li>
                            <li>
                                <p>Telefone da Clínica: 4029 - 5598</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li>
                                <p>Termos de Serviço: Ao utilizar nosso site, você concorda com os termos estabelecidos.
                                    Leia-os para entender melhor nossas diretrizes e limitações.</p>
                            </li>
                            <li>
                                <p>Cookies: Utilizamos cookies para aprimorar sua experiência online. Consulte nossa
                                    política de cookies para obter detalhes sobre como os usamos.</p>
                            </li>
                            <li>
                                <p>FAQ: Explore nossa seção de Perguntas Frequentes para respostas rápidas e
                                    esclarecimentos sobre nossos serviços e produ</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>