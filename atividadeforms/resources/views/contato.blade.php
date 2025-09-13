<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato - ETEC Zona Leste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .nav-link {
            transition: color 0.3s ease-in-out, transform 0.2s ease-in-out;
        }
        .nav-link:hover {
            color: #ff0000;
            transform: scale(1.1);
        }
        .contact-container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            margin: auto;
            border: 2px solid #ddd;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #000000;
        }
        .btn-danger {
            border-radius: 8px;
            padding: 10px 20px;
        }
        .contact-title {
            text-align: center;
            font-weight: normal;
            margin-bottom: 20px;
        }
        h2 {
            font-weight: normal; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('imagens/etec.png') }}" alt="Logo ETEC" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cursos') }}">CURSOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('departamentos') }}">DEPARTAMENTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('contato') }}">CONTATO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-5 text-center">
        <h2 class="contact-title">ENTRE EM CONTATO CONOSCO!</h2>
    </div>
    
    <div class="container mt-3">
        <div class="contact-container">
            <form action="{{ route('contato') }}" method="get">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
                </div>
                <div class="mb-3">
                    <label for="assunto" class="form-label">Assunto</label>
                    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Digite o assunto">
                </div>
                <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Escreva sua mensagem"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-danger">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
