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

    <link rel="shortcut icon" href="../../projetofinal_2024_clinica/views/Imagens/logo_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../projetofinal_2024_clinica/views/css/escolha.css">

    <title>SP Medical Group - Escolha</title>
</head>

<body style="overflow-x: hidden;">
    <section>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <img src="../../projetofinal_2024_clinica/views/Imagens/escolha-cadastro.png" alt="Imagem demonstrativa"
                        style="height: 100%; width: auto;">
                </div>

                <div class="col-md-5">

                    <div class="container-fluid">
                    <form class="d-flex" method="POST" action="/projetofinal_2024_clinica/home" class="nav-link hover-zoom logo">
                        <input type="hidden" name="action" value="home">
                        <button class="hover-zoom logo"  type="submit"  style="border: none; margin-left: 170px; margin-top: 0px" name="botaoHome" ><img src="../../projetofinal_2024_clinica/views/Imagens/logo_preto.png" class="logo"></button>
                    </form>

                    <div id="bola1"></div>
                    <div id="bola2"></div>
                        
                                <div class="botoes">
                            <div class="col-md" style="margin-top: -30px;">
                                <form class="d-flex" method="POST" action="/projetofinal_2024_clinica/cadastro_paciente">
                                <input type="hidden" name="action" value="cadastro_paciente">
                                    <div class="row"><button name="botaoCadastroPaciente" class="btn hover-zoom" type="submit">Paciente</button></div>
                                </form>
                                <form class="d-flex" method="POST" action="/projetofinal_2024_clinica/cadastro_medico">
                                <input type="hidden" name="action" value="cadastro_medico">
                                    <div class="row"><button name="botaoCadastroMedico" class="btn hover-zoom" type="submit">Médico</button></div>
                                </form>
                                <form class="d-flex" method="POST" action="/projetofinal_2024_clinica/cadastro_adm">
                                <input type="hidden" name="action" value="cadastro_adm">
                                    <div class="row"><button name="botaoCadastroAdm" class="btn hover-zoom" type="submit">Administrador</button></div>
                                </form>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="padding: 0px;">
                            <form class="d-flex" method="POST" action="/projetofinal_2024_clinica/login" class="nav-link hover-zoom" >
                                <input type="hidden" name="action" value="login">
                                <button name="botaoLogin" class="hover-zoom voltar" style="border: none;" type="submit"><img src="../../projetofinal_2024_clinica/views/Imagens/voltar-icon.png" style="width: 50px; margin: 15px; "></button>
                            </form>
                                
                                
                                <img class="float-end ajuda hover-zoom" src="../views/Imagens/ajuda-icon.png" alt="Ajuda" onclick="exibirDiv()">
                                <div id="minhaDiv" class="minha-div">
                                    <p>Para ajuda ligue:(11)4829-5598</p>
                                </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-flid footer">
            <div class="row">
                <div class="col md-6 logo">
                    <img src="../../projetofinal_2024_clinica/views/Imagens/logo_preto.png" alt="logo">
                    <p style="text-align: center;">Cuidando sempre de você!</p>
                </div>
                <div class="col md-6 contatos">
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
            </div>
        </div>
    </footer>
    <script src="script/script.js"></script>
</body>

</html>