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
    <link rel="stylesheet" href="../../projetofinal_2024_clinica/views/css/list-medico.css">
</head>
<body style="background-color: #f0f0f0">

<form class="d-flex" method="POST" action="/projetofinal_2024_clinica/login" class="nav-link hover-zoom" >
    <input type="hidden" name="action" value="login">
    <button name="botaoLogin" class="btn-voltar" style="border: none;" type="submit"><img src="../../projetofinal_2024_clinica/views/Imagens/voltar-icon.png" style="width: 50px; margin: 15px; "></button>
</form>

    <h1>Médicos <div class="Cadastro">Cadastrados</div></h1>

    <div class="search-container">
        <input type="text" id="search" placeholder="Pesquisar médicos..." />
    </div>

    <?php if (empty($medicos)): ?>
        <p>Nenhum médico cadastrado.</p>
    <?php else: ?>
        <?php foreach ($medicos as $medico): ?>
            <div class="medico">
                <h2><?php echo htmlspecialchars($medico['nome']); ?></h2>
                <p><strong>E-mail:</strong> <?php echo htmlspecialchars($medico['email']); ?></p>
                <p><strong>Data de nascimento:</strong> <?php echo htmlspecialchars($medico['data_nascimento']); ?></p>
                <p><strong>Telefone:</strong> <?php echo htmlspecialchars($medico['telefone']); ?></p>
                <p><strong>CPF:</strong> <?php echo htmlspecialchars($medico['cpf']); ?></p>
                <p><strong>CRM:</strong> <?php echo htmlspecialchars($medico['crm']); ?></p>
<br>
                <div class="actions">
                    <a href="/projetofinal_2024_clinica/update-medico/<?php echo $medico['id']; ?>" class="btn btn-warning">Editar</a>

                    <form action="/projetofinal_2024_clinica/medicoDelete" method="POST" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir este paciente?');">
                        <input class="btn" type="hidden" name="id" value="<?php echo $medico['id']; ?>">
                        <button class="btn" type="submit">Excluir</button>
                    </form>                
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <a href="/meu_projeto_livraria/public/">Cadastrar novo medico</a>

</body>
</html>