<?php

require_once '../models/clinica_paciente.php';

class ClinicaPacienteController {

    public function showFormPaciente() {
        // Exibe o formulário de cadastro de livros
        require_once '../views/cadastro_paciente.html';
    }

    public function savePaciente() {
        // Recebe dados do formulário
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $data_nascimento = $_POST['data_nascimento'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Cria um novo livro
        $paciente = new Clinica_paciente();
        $paciente->nome = $nome;
        $paciente->cpf = $cpf;
        $paciente->data_nascimento = $data_nascimento;
        $paciente->telefone = $telefone;
        $paciente->email = $email;
        $paciente->senha = $senha;

        // Salva no banco de dados
        if ($paciente->save()) {
            // Redireciona para a página de listagem
            header('Location: /projetofinal_2024_clinica/list-paciente/');
        } else {
            echo "Erro ao salvar o livro!";
        }
    }

    public function listPaciente() {
        // Pega todos os livros do banco de dados
        $paciente = new Clinica_paciente();
        $paciente = $paciente->getAll();

        // Exibe a lista de livros
        require_once '../views/paciente_list.php';
    }
}