<?php
// /app/models/Paciente.php

class Paciente {
    private $conn;
    private $table_name = "pacientes";

    public $nome;
    public $cpf;
    public $telefone;
    public $sexo;
    public $data_nascimento;
    public $email;
    public $senha;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        try {
            $query = "INSERT INTO " . $this->table_name . " (nome, cpf, telefone, sexo, data_nascimento, email, senha) 
                      VALUES (:nome, :cpf, :telefone, :sexo, :data_nascimento, :email, :senha)";
    
            $stmt = $this->conn->prepare($query);
    
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':cpf', $this->cpf);
            $stmt->bindParam(':telefone', $this->telefone);
            $stmt->bindParam(':sexo', $this->sexo);
            $stmt->bindParam(':data_nascimento', $this->data_nascimento);
            $stmt->bindParam(':email', $this->email);
    
            $hashed_password = password_hash($this->senha, PASSWORD_BCRYPT);
            $stmt->bindParam(':senha', $hashed_password);
    
            // Tenta executar a query
            if ($stmt->execute()) {
                return true;
            }
        } catch (PDOException $e) {
            echo "Erro ao cadastrar paciente: " . $e->getMessage();
        }
    
        return false;
    }
    
}
