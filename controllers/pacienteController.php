<?php

require_once '../models/paciente.php';

class PacienteController {

    public function showForm() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/cadastro_paciente.php';
    }

    public function savePaciente() {
        // Recebe dados do formulário
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $data_nascimento = $_POST['data_nascimento'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        // Cria um novo livro
        $paciente = new Paciente();

        $paciente->id = $id;
        $paciente->nome = $nome;
        $paciente->cpf = $cpf;
        $paciente->telefone = $telefone;
        $paciente->data_nascimento = $data_nascimento;
        $paciente->email = $email;
        $paciente->senha = $senha;

        // Salva no banco de dados
        if ($paciente->save()) {
            header('Location: /projetofinal_2024_clinica/paciente-list');
            echo "Cadastrado";
        } else {
            echo "Erro ao salvar o livro!";
        }
    }

    public function listPacientes() {
        // Pega todos os livros do banco de dados
        $paciente = new Paciente();
        $pacientes = $paciente->getAll();

        // Exibe a lista de livros
        require_once '../views/list_paciente.php';
    }

    public function showUpdateForm($id) {
        $paciente = new Paciente();
        $pacienteInfo = $paciente->getById($id);
        include '../views/edit_paciente.php'; // Inclua o arquivo do formulário de atualização
    }

    // Método para atualizar um livro
    public function updatePaciente() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Paciente();
            $paciente->id = $_POST['id'];
            $paciente->nome = $_POST['nome'];
            $paciente->cpf = $_POST['cpf'];
            $paciente->telefone = $_POST['telefone'];
            $paciente->data_nascimento = $_POST['data_nascimento'];
            $paciente->email = $_POST['email'];
            $paciente->senha = $_POST['senha'];

            if ($paciente->update()) {
                header('Location: /projetofinal_2024_clinica/paciente-list');
            } else {
                echo "Erro ao atualizar o paciente.";
            }
        }
    }

    public function deletePacienteId() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $paciente = new Paciente();
            $paciente->id = $_POST['id']; // Pega o ID do formulário
    
            if ($paciente->deleteId()) { // Chama o método deleteId para excluir
                header('Location: /projetofinal_2024_clinica/paciente-list');
                exit(); // Sempre use exit após um redirecionamento
            } else {
                echo "Erro ao excluir o paciente.";
            }
        }
    }


    
}

