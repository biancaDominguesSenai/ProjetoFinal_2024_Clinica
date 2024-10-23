<?php
// /controllers/pacienteController.php

require_once '../models/paciente.php';
require_once '../config/database.php'; // Certifique-se de que este arquivo existe

class PacienteController {
    private $db;
    private $pacientes;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->pacientes = new Paciente($this->db);
    }

    public function cadastrarPaciente($data) {
        $this->pacientes->nome = $data['nome'];
        $this->pacientes->cpf = $data['cpf'];
        $this->pacientes->telefone = $data['telefone'];
        $this->pacientes->sexo = $data['sexo'];
        $this->pacientes->data_nascimento = $data['data_nascimento'];
        $this->pacientes->email = $data['email'];
        $this->pacientes->senha = $data['senha'];

        
        if ($this->pacientes->create()) {
            echo "Paciente cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar o paciente.";
        }
    }
}