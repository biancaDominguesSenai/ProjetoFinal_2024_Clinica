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
    <link rel="stylesheet" href="../../projetofinal_2024_clinica/views/css/cadastro.css">

    <title>SP Medical Group - Cadastro Médico</title>
</head>

<body style="overflow-x: hidden;">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="container">
                        <div id="bola1"></div>
                    </div>
                    <div class="container">
                        <div id="bola2"></div>
                    </div>


                    <h2>Cadastro</h2>
                    <div class="row">
                        <h3>Dados Pessoais:</h3>
                    </div>


                    <form method="POST" action="/projetofinal_2024_clinica/save-medico">
                    <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="nome" placeholder="Nome Completo" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input name="cpf" type="text" class="form-control" placeholder="CPF" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input name="telefone" type="tel" class="form-control" placeholder="Número para Contato" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input name="data_nascimento" id="nascimento" type="date" placeholder="Data de nascimento" onfocus="(this.type='date')" onblur="(this.type='date')" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input name="crm" type="text" class="form-control" placeholder="C.R.M." required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h3>Dados da conta</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input name="senha" type="password" class="form-control" placeholder="Crie uma Senha" required>
                                </div>
                            </div>
                        </div>
                        <div class="row botao">
                            <div class="col-md-12">
                            <form class="d-flex" method="POST" action="/projetofinal_2024_clinica/list-medico" class="nav-link hover-zoom" >
                                <input type="submit" class="btn hover-zoom" value="Cadastrar">
                            </form>  
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-md-12" style="padding: 0px;">
                        <form class="d-flex" method="POST" action="/projetofinal_2024_clinica/escolha" class="nav-link hover-zoom" >
                                <button name="botaoEscolha" class="hover-zoom voltar" style="border: none;" type="submit">
                                <img src="../../projetofinal_2024_clinica/views/Imagens/voltar-icon.png" style="width: 50px; margin: 15px; ">
                                </button>
                        </form>  

                        
                            <img class="float-end ajuda hover-zoom" src="../../projetofinal_2024_clinica/views/Imagens/ajuda-icon.png" alt="Ajuda" onclick="exibirDiv()">
                            <div id="minhaDiv" class="minha-div">
                                <p>Para ajuda ligue:(11)4829-5598</p>
                            </div>
                    </div>
                </div>
            </div>

                <div class="col-md-4 float-end">
                    
                    <img class="float-end" src="../../projetofinal_2024_clinica/views/Imagens/cadastro_médico.jpg" alt="Cadastro Paciente">
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