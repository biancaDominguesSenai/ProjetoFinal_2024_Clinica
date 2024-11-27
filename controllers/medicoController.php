<?php

require_once '../models/medico.php';

class MedicoController {

    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/cadastro_medico.php';
    }

    public function saveMedico() {
        // Recebe dados do formulário
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $crm = $_POST['crm'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        // Cria um novo livro
        $medico = new Medico();
        $medico->nome = $nome;
        $medico->cpf = $cpf;
        $medico->telefone = $telefone;
        $medico->data_nascimento = $data_nascimento;
        $medico->crm = $crm;
        $medico->email = $email;
        $medico->senha = $senha;

        // Salva no banco de dados
        if ($medico->save()) {
            // Redireciona para a página de listagem
            header('Location: /projetofinal_2024_clinica/medico-list');
        } else {
            echo "Erro ao salvar o livro!";
        }
    }

    public function listMedicos() {
        // Pega todos os livros do banco de dados
        $medico = new Medico();
        $medicos = $medico->getAll();

        // Exibe a lista de livros
        require_once '../views/list_medico.php';
    }

    public function showUpdateFormMedico($id) {
        $medico = new Medico();
        $medicoInfo = $medico->getById($id);
        include '../views/edit_medico.php';  // Inclua o arquivo do formulário de atualização
    }

    // Método para atualizar um livro
    public function updateMedico() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $medico = new Medico();
            $medico->id = $_POST['id'];
            $medico->nome = $_POST['nome'];
            $medico->cpf = $_POST['cpf'];
            $medico->telefone = $_POST['telefone'];
            $medico->data_nascimento = $_POST['data_nascimento'];
            $medico->email = $_POST['email'];
            $medico->senha = $_POST['senha'];

            if ($medico->updateMedico()) {
                header('Location: /projetofinal_2024_clinica/medico-list');
            } else {
                echo "Erro ao atualizar o medico.";
            }
        }
    }

    public function deleteMedicoId() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $medico = new Medico();
            $medico->id = $_POST['id']; // Pega o ID do formulário
    
            if ($medico->deleteIdMedico()) { // Chama o método deleteId para excluir
                header('Location: /projetofinal_2024_clinica/medico-list');
                exit(); // Sempre use exit após um redirecionamento
            } else {
                echo "Erro ao excluir o medico.";
            }
        }
    }
}