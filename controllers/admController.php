<?php

require_once '../models/adm.php';

class AdmController {

    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/cadastro_adm.php';
    }

    public function saveAdm() {
        // Recebe dados do formulário
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $senhaAcesso = $_POST['senhaAcesso'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        // Cria um novo livro
        $adm = new Adm();
        $adm->nome = $nome;
        $adm->cpf = $cpf;
        $adm->telefone = $telefone;
        $adm->data_nascimento = $data_nascimento;
        $adm->senhaAcesso = $senhaAcesso;
        $adm->email = $email;
        $adm->senha = $senha;

        // Salva no banco de dados
        if ($adm->save()) {
            // Redireciona para a página de listagem
            header('Location: /projetofinal_2024_clinica/adm-list');
        } else {
            echo "Erro ao salvar o livro!";
        }
    }

    public function listAdms() {
        // Pega todos os livros do banco de dados
        $adm = new Adm();
        $adms = $adm->getAll();

        // Exibe a lista de livros
        require_once '../views/list_adm.php';
    }

    public function showUpdateFormAdm($id) {
        $adm = new Adm();
        $admInfo = $adm->getById($id);
        require_once '../views/edit_adm.php'; // Inclua o arquivo do formulário de atualização
    }

    // Método para atualizar um livro
    public function updateAdm() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $adm = new Adm();
            $adm->id = $_POST['id'];
            $adm->nome = $_POST['nome'];
            $adm->cpf = $_POST['cpf'];
            $adm->telefone = $_POST['telefone'];
            $adm->data_nascimento = $_POST['data_nascimento'];
            $adm->email = $_POST['email'];
            $adm->senha = $_POST['senha'];

            if ($adm->update()) {
                header('Location: /projetofinal_2024_clinica/adm-list');
            } else {
                echo "Erro ao atualizar o adm.";
            }
        }
    }

    public function deleteAdmId() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $adm = new Adm();
            $adm->id = $_POST['id']; // Pega o ID do formulário
    
            if ($adm->deleteIdAdm()) { // Chama o método deleteId para excluir
                header('Location: /projetofinal_2024_clinica/adm-list');
                exit(); // Sempre use exit após um redirecionamento
            } else {
                echo "Erro ao excluir o adm.";
            }
        }
    }
}