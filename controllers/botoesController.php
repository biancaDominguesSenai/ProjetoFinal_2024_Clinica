<?php
// Controller/botoesController.php

class BotoesController {

    public function redirecionar() {
        // Verifica qual botão foi clicado com base em um parâmetro enviado via POST
        if (isset($_POST['action'])) {
            $action = $_POST['action'];

            // Redireciona para a página apropriada com base na ação
            switch ($action) {
                case 'home':
                    header("Location: /projetofinal_2024_clinica/home");
                    break;

                case 'login':
                    header(header: "Location: /projetofinal_2024_clinica/login");
                    break;

                case 'cadastro':
                    header("Location: /projetofinal_2024_clinica/esolha");
                    break;

                case 'cadastro_paciente':
                    header("Location: /projetofinal_2024_clinica/cadastro_paciente");
                    break;

                case 'cadastro_medico':
                    header("Location: /projetofinal_2024_clinica/public/cadastro_medico");
                    break;

                case 'cadastro_adm':
                    header("Location: /projetofinal_2024_clinica/public/cadastro_adm");
                    break;

                case 'login_home':
                    header("Location: /projetofinal_2024_clinica/home");
                    break;

                case 'login_adm':
                    header("Location: /projetofinal_2024_clinica/login_adm");
                    break;
                
                    case 'list-paciente':
                        header("Location: /projetofinal_2024_clinica/list-paciente");
                        break;

                default:
                    // Página não encontrada
                    http_response_code(404);
                    echo "Página não encontrada.";
                    break;
            }
            exit();
        } else {
            // Se 'action' não estiver definido, exibe erro
            http_response_code(400);
            echo "Ação inválida.";
        }
    }
}
