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

    <link rel="shortcut icon" href="Imagens/logo_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../projetofinal_2024_clinica/views/css/login.css">

    <style>

    </style>

    <title>SP Medical Group - Login/Cadastro</title>
</head>

<body style="overflow-x: hidden;">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <img src="../../projetofinal_2024_clinica/views/Imagens/medico segurando coraçao2.jpg" alt="Imagem demonstrativa"
                        style="height: 100%; width: auto;">
                </div>
                <div class="col-sm-4">                    

                    <form class="d-flex" method="POST" action="/projetofinal_2024_clinica/home" class="nav-link hover-zoom">
                        <input type="hidden" name="action" value="home">
                        <button class="hover-zoom"  type="submit"  style="border: none; margin-left: 100px; width: 250px;" name="voltar_home" ><img src="../../projetofinal_2024_clinica/views/Imagens/logo_preto.png"></button>
                    </form>

                    <div id="bola1"></div>
                    <div id="bola2"></div>
                    
                    <br>

                    
                        <div class="input-group">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                        </div>
                        <div class="input-group">
                            <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                        </div>
                        <div class="input-group mb-3">
                            <select class="form-select" name="tipo_usuario" required>
                                <option value="" selected disabled>Selecione...</option>
                                <option value="pacientes">Paciente</option>
                                <option value="medicos">Médico</option>
                                <option value="administradores">Administrador</option>
                            </select>
                        </div>
                            <form class="d-flex" method="POST" action="/projetofinal_2024_clinica/login_adm" class="nav-link hover-zoom" >
                                <button name="login_adm" class="btn hover-zoom" type="submit">Entrar</button>
                        </form>   
                    

                    <form class="d-flex" method="POST" action="/projetofinal_2024_clinica/escolha">
                    <input type="hidden" name="action" value="cadastro">
                        <button name="cadastro" class="nav-link hover-zoom" type="submit" style="text-decoration: overline; margin-left:210px">Cadastro</button>
                    </form>

                    <div id="bola3"></div>
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