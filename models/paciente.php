<?php


require_once '../config/database.php';

class Paciente {
    private $conn;
    private $table_name = "pacientes";

    public $id;
    public $nome;
    public $cpf;
    public $telefone;
    public $data_nascimento;
    public $email;
    public $senha;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function save() {
        $query = "INSERT INTO " . $this->table_name . " (nome, cpf, telefone, data_nascimento, email, senha) VALUES (:nome, :cpf, :telefone, :data_nascimento, :email, :senha)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para atualizar um livro
    public function update() {
        $query = "UPDATE " . $this->table_name . " SET nome = :nome, cpf = :cpf, telefone = :telefone, data_nascimento = :data_nascimento, email = :email, senha = :senha  WHERE id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':cpf', $this->cpf);
        $stmt->bindParam(':telefone', $this->telefone);
        $stmt->bindParam(':data_nascimento', $this->data_nascimento);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);

        return $stmt->execute();
    }

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
                exit;
            } else {
                echo "Erro ao atualizar o paciente.";
            }
        }
    }
    

    public function deleteId() {
        // Conexão com o banco de dados
        $db = new PDO('mysql:host=localhost;dbname=sistema_cadastro_clinica', 'root', 'root');
        
        // SQL para deletar o paciente pelo ID
        $sql = "DELETE FROM pacientes WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);
        
        // Executa a exclusão e retorna se foi bem-sucedida
        return $stmt->execute();
    }
    
    
}