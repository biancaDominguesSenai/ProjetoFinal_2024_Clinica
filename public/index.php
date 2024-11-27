<?php

// Habilitar exibição de erros para debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Incluir todos os controladores necessários
require_once '../controllers/pacienteController.php';
require_once '../controllers/medicoController.php';
require_once '../controllers/admController.php';
require_once '../controllers/botoesController.php';

// Obter a URL e o método de requisição (GET ou POST)
$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

    // Roteamento para requisições GET
    switch ($request) {

        case '/projetofinal_2024_clinica/home':
            include '../views/home.php';
            break;
        case '/projetofinal_2024_clinica/login':
            include '../views/login.php';
            break;
    
        case '/projetofinal_2024_clinica/escolha':
            include '../views/escolha.php';
            break;
    
        case '/projetofinal_2024_clinica/cadastro_paciente':
            include '../views/cadastro_paciente.php';
            break;
    
        case '/projetofinal_2024_clinica/cadastro_medico':
            include '../views/cadastro_medico.php';
            break;
    
        case '/projetofinal_2024_clinica/cadastro_adm':
            include '../views/cadastro_adm.php';
            break;

        case '/projetofinal_2024_clinica/login_adm':
            include '../views/login_adm.php';
            break;

        case '/projetofinal_2024_clinica/list-paciente':
            include '../views/list_2paciente.php';
            break;
//---------------------------------------------------------------------------------------------
        // Roteamento para Paciente
        case '/projetofinal_2024_clinica/paciente':
            $controller = new PacienteController();
            $controller->showForm();
            break;

        case '/projetofinal_2024_clinica/save-paciente':
            $controller = new PacienteController();
            $controller->savePaciente();
            break;

        case '/projetofinal_2024_clinica/paciente-list':
            $controller = new PacienteController();
            $controller->listPacientes();
            break;
//---------------------------------------------------------------------------------------------
        // Roteamento para Médico
        case '/projetofinal_2024_clinica/medico':
            $controller = new MedicoController();
            $controller->showForm();
            break;

        case '/projetofinal_2024_clinica/save-medico':
            $controller = new MedicoController();
            $controller->saveMedico();
            break;

        case '/projetofinal_2024_clinica/medico-list':
            $controller = new MedicoController();
            $controller->listMedicos();
            break;
//---------------------------------------------------------------------------------------------
        // Roteamento para Administrador
        case '/projetofinal_2024_clinica/adm':
            $controller = new AdmController();
            $controller->showForm();
            break;

        case '/projetofinal_2024_clinica/save-adm':
            $controller = new AdmController();
            $controller->saveAdm();
            break;

        case '/projetofinal_2024_clinica/adm-list':
            $controller = new AdmController();
            $controller->listAdms();
            break;
//---------------------------------------------------------------------------------------------

            case '/projetofinal_2024_clinica/pacienteDelete':
                if ($method === 'POST') {
                    $controller = new PacienteController();
                    $controller->deletePacienteId();
                }
                break;

            case (preg_match('/\/projetofinal_2024_clinica\/update-paciente\/(\d+)/', $request, $matches) ? true : false):
                $id = $matches[1];
                $controller = new PacienteController();
                $controller->showUpdateForm($id);
            break;

        
            case '/projetofinal_2024_clinica/update-paciente':
                require_once '../controllers/pacienteController.php';
                $controller = new pacienteController();
                $controller->updatePaciente();
            break;
//---------------------------------------------------------------------------------------------

                case '/projetofinal_2024_clinica/medicoDelete':
                    if ($method === 'POST') {
                        $controller = new medicoController();
                        $controller->deleteMedicoId();
                    }
                    break;
    
                case (preg_match('/\/projetofinal_2024_clinica\/update-medico\/(\d+)/', $request, $matches) ? true : false):
                    $id = $matches[1];
                    $controller = new medicoController();
                    $controller->showUpdateFormMedico($id);
                    break;
            
                case '/projetofinal_2024_clinica/update-medico':
                    require_once '../controllers/medicoController.php';
                    $controller = new medicoController();
                    $controller->updateMedico();
                    break;

//---------------------------------------------------------------------------------------------

                case '/projetofinal_2024_clinica/admDelete':
                    if ($method === 'POST') {
                        $controller = new admController();
                        $controller->deleteAdmId();
                    }
                    break;
    
                case (preg_match('/\/projetofinal_2024_clinica\/update-adm\/(\d+)/', $request, $matches) ? true : false):
                    $id = $matches[1];
                    echo $id;
                    $controller = new admController();
                    $controller->showUpdateFormAdm($id);
                    break;
            
                case '/projetofinal_2024_clinica/update-adm':
                    require_once '../controllers/admController.php';
                    $controller = new admController();
                    $controller->updateAdm();
                    break;


                    
                    
        // Caso não encontre a rota, exibir erro 404
        default:
            http_response_code(404);
            echo "Página não encontrada.";
            break;
    }
