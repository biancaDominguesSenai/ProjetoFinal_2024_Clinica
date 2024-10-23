<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <h1>Pacientes Cadastrados</h1>

    <?php if (empty($paciente)): ?>
        <p>Nenhum livro cadastrado.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Data de Cadastro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pacientes as $paciente): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($paciente['id']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['title']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['author']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['publication_year']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['genre']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['price']); ?></td>
                        <td><?php echo htmlspecialchars($paciente['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="/meu_projeto_livraria/public/">Cadastrar novo livro</a>
</body>
</html> 
