<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cursos - ETEC Zona Leste</title>
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
            color: #Ff0000;
            transform: scale(1.1);
        }
        h2 {
            font-weight: normal; /* Remove o negrito */
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

    <!-- Seção de Cursos -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">CONHEÇA NOSSAS MODALIDADES!</h2>

        <!-- Grupo de Cards -->
        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="{{ asset('imagens/mtec.jpg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Cursos Técnicos - Modalidade Presencial</h5>
                    <p class="card-text">O curso técnico presencial é voltado para quem deseja desenvolver habilidades práticas em diversas áreas. Com aulas presenciais, o aluno tem a oportunidade de aprender diretamente com os professores e colegas, em um ambiente de aprendizado dinâmico e colaborativo.</p>
                    <a href="#" class="btn btn-danger">Saiba Mais</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('imagens/tecnico.jpg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Ensino Médio Integrado ao Médio (M-Tec)</h5>
                    <p class="card-text">A modalidade M-Tec oferece uma excelente formação para alunos que buscam conciliar o ensino médio com a qualificação técnica. Ao longo do curso, os estudantes têm a oportunidade de aprender uma profissão enquanto concluem seus estudos no ensino médio, preparando-os para o mercado de trabalho ou para a continuidade de sua formação em nível superior.</p>
                    <a href="#" class="btn btn-danger">Saiba Mais</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('imagens/ams.jpg') }}" alt="Imagem de capa do card">
                <div class="card-body">
                    <h5 class="card-title">Articulação dos Ensinos Médio - Técnico e Superior (AMS)</h5>
                    <p class="card-text">A Articulação dos Ensinos Médio, Técnico e Superior (AMS) é um programa inovador que permite ao aluno desenvolver competências para atuar tanto no mercado de trabalho quanto no âmbito acadêmico. O aluno tem acesso simultâneo ao ensino médio e à formação técnica, com a possibilidade de ingresso direto no ensino superior.</p>
                    <a href="#" class="btn btn-danger">Saiba Mais</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
