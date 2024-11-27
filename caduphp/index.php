<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh+oOVwVF4tpIr+RxEQhxROYVqLTa1RIbnfCe59XIcW3gGNFMAyT5AykVcUpwM4d/381fQ4DXw" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background: linear-gradient(45deg, #b2d9d9, #e0f7fa); /* Gradiente suave entre verde claro e azul */
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
            color: #333; /* Texto escuro para contraste */
        }

        .card {
            background-color: #ffffff; /* Fundo branco para o card */
            border: 1px solid #d1e7e3; /* Borda suave verde claro */
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); /* Sombra suave */
        }

        .btn-primary {
            background-color: #00796b; /* Verde hospitalar */
            border: none;
            color: #fff;
            transition: background-color 0.3s ease, transform 0.2s, box-shadow 0.2s ease;
        }

        .btn-primary:hover {
            background-color: #004d40; /* Verde mais escuro */
            transform: scale(1.05);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .titulo-login {
            color: #00796b; /* Verde hospitalar para destaque */
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
        }

        .form-control {
            background-color: #f1f8f6; /* Fundo mais claro para os campos */
            color: #333; /* Texto escuro */
            border: 1px solid #d1e7e3;
            border-radius: 8px;
            padding: 15px;
            font-size: 1rem;
        }

        .form-control:focus {
            border-color: #00796b; /* Verde hospitalar ao focar */
            box-shadow: 0 0 5px #00796b;
        }

        .mb-3 label {
            font-weight: bold;
            color: #4caf50; /* Verde suave para os rótulos */
            font-size: 1.1rem;
        }

        .card-body {
            padding: 40px;
        }

        .text-muted {
            color: #888;
        }

        .text-muted a {
            color: #00796b;
            text-decoration: none;
        }

        .text-muted a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="titulo-login">Login</h3>
                        <p class="text-muted text-center mb-4">Acesso restrito ao painel administrativo</p>
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label for="usuario">Usuário</label>
                                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Digite seu usuário">
                            </div>
                            <div class="mb-3">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha">
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary">Entrar</button>
                            </div>
                        </form>
                        <p class="text-muted text-center mt-3">© 2024 <a href="#">Sistema Admin</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
