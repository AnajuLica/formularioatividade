<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ETEC Zona Leste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link {
            transition: color 0.3s ease-in-out, transform 0.2s ease-in-out;
        }
        .nav-link:hover {
            color: #Ff0000;
            transform: scale(1.1);
        }
        .btn-danger-custom {
            background-color: #dc3545; /* Cor do botão btn-danger */
            color: white;
            border: none;
        }
        .btn-danger-custom:hover {
            background-color: #c82333; /* Cor de hover do btn-danger */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route ('home') }}">
                <img src="{{ asset('imagens/etec.png') }}" alt="Logo ETEC" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('home') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('cursos') }}">CURSOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('departamentos') }}">DEPARTAMENTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route ('contato') }}">CONTATO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Secretaria Acadêmica</h5>
                        <p class="card-text">Responsável pela gestão administrativa dos alunos, incluindo matrículas, emissão de documentos e controle de frequências.</p>
                        <a href="#" class="btn btn-danger">Visitar</a> <!-- btn-danger para igualar aos outros botões -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Coordenação de Cursos</h5>
                        <p class="card-text">As Coordenações de Curso são responsáveis pelo conjunto de ações destinadas ao planejamento do ensino, à supervisão de sua execução, ao controle das atividades docentes em relação às diretrizes didáticas pedagógicas e administrativas.</p>
                        <a href="#" class="btn btn-danger">Visitar</a> <!-- btn-danger para igualar aos outros botões -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Direção</h5>
                        <p class="card-text">A Direção Escolar é o departamento executivo encarregado da organizar as atividades administrativas e pedagógicas da Etec.</p>
                        <a href="#" class="btn btn-danger">Visitar</a> <!-- btn-danger para igualar aos outros botões -->
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Coordenação Pedagogica</h5>
                        <p class="card-text">Apoia os professores, orienta as práticas pedagógicas e garante que as metodologias atendam às diretrizes educacionais.</p>
                        <a href="#" class="btn btn-danger">Visitar</a> <!-- btn-danger para igualar aos outros botões -->
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center mt-3">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">APM</h5>
                            <p class="card-text">A instituição auxiliar da escola, que tem por finalidade colaborar no cumprimento do progresso educacional, na assistência escolar e na integração família-escola-comunidade. Não tem finalidade lucrativa.</p>
                            <a href="#" class="btn btn-danger">Visitar</a> <!-- btn-danger para igualar aos outros botões -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
