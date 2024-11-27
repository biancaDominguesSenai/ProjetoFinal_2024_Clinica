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
    <link rel="stylesheet" href="../../projetofinal_2024_clinica/views/css/login_adm.css">

    
</head>
<body style="background-color: #f0f0f0">

<form class="d-flex" method="POST" action="/projetofinal_2024_clinica/login" class="nav-link hover-zoom" >
    <input type="hidden" name="action" value="login">
    <button name="botaoLogin" class="hover-zoom voltar" style="border: none;" type="submit"><img src="../../projetofinal_2024_clinica/views/Imagens/voltar-icon.png" style="width: 50px; margin: 15px; "></button>
</form>

    <h1><div class="Cadastro">Cadastrados</div></h1>



    <div class="row botoes">
        <div class="container" style="text-align: center;">
        
            <form  method="POST" action="/projetofinal_2024_clinica/paciente-list" class="nav-link">
                <button class="btn">Cadastros Pacientes</button>
            </form>


            <form method="POST" action="/projetofinal_2024_clinica/medico-list" class="nav-link">
                <button class="btn">Cadastros Médicos</button>
            </form>
        

            <form  method="POST" action="/projetofinal_2024_clinica/adm-list" class="nav-link">
                <button class="btn">Cadastros Adms</button>
            </form>
        </div>
    </div>



</body>
</html>
