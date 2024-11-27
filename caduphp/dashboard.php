<?php
session_start();
if (empty($_SESSION)) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Controle Clínico</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh+oOVwVF4tpIr+RxEQhxROYVqLTa1RIbnfCe59XIcW3gGNFMAyT5AykVcUpwM4d/381fQ4DXw" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-image: url('1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #000;
            min-height: 100vh;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
        }

        .navbar-brand, .nav-link {
            color: #fff !important;
        }

        .nav-link:hover {
            color: #2196F3 !important;
        }

        .dropdown-menu {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .dropdown-item {
            color: #fff !important;
        }

        .dropdown-item:hover {
            background-color: #2196F3;
            color: #000 !important;
        }

        .container {
            margin-top: 70px;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
        }

        .card-header {
            background-color: #2196F3;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php">Sistema Privado</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Médico</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-medico">Cadastrar Médico</a></li>
                            <li><a class="dropdown-item" href="?page=listar-medico">Listar Médico</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Paciente</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-paciente">Cadastrar Paciente</a></li>
                            <li><a class="dropdown-item" href="?page=listar-paciente">Listar Paciente</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Consulta</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=cadastrar-consulta">Cadastrar Consulta</a></li>
                            <li><a class="dropdown-item" href="?page=listar-consulta">Listar Consulta</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="logout.php" class="btn btn-danger">Sair</a>
            </div>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <?php
                include('config.php');
                switch (@$_REQUEST['page']) {
                    case 'cadastrar-medico':
                        include('cadastrar-medico.php');
                        break;
                    case 'editar-medico':
                        include('editar-medico.php');
                        break;
                    case 'listar-medico':
                        include('listar-medico.php');
                        break;
                    case 'salvar-medico':
                        include('salvar-medico.php');
                        break;

                    case 'cadastrar-paciente':
                        include('cadastrar-paciente.php');
                        break;
                    case 'editar-paciente':
                        include('editar-paciente.php');
                        break;
                    case 'listar-paciente':
                        include('listar-paciente.php');
                        break;
                    case 'salvar-paciente':
                        include('salvar-paciente.php');
                        break;

                    case 'cadastrar-consulta':
                        include('cadastrar-consulta.php');
                        break;
                    case 'editar-consulta':
                        include('editar-consulta.php');
                        break;
                    case 'listar-consulta':
                        include('listar-consulta.php');
                        break;
                    case 'salvar-consulta':
                        include('salvar-consulta.php');
                        break;
                    default:
                        include('home.php');
                }
                ?>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
