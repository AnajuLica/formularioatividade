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
        .carousel-inner img {
            max-height: 450px;
            object-fit: cover; 
        }
        .carousel-container {
            max-width: 1000px;
            margin: 80px auto 0 auto;
        }
        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.6); /* Fundo mais translúcido para melhor legibilidade */
            color: white;
            padding: 20px;
            border-radius: 8px;
            width: 80%; /* Melhor ajuste para centralizar o conteúdo */
            text-align: center;
        }
        .carousel-caption h2 {
            font-size: 28px;
            font-weight: bold;
        }
        .carousel-caption p {
            font-size: 18px;
        }
        /* Estilo para o título do carrossel sem negrito */
        h1 {
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
                    <li class="nav-item"><a class="nav-link" href="{{ route ('home') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route ('cursos') }}">CURSOS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route ('departamentos') }}">DEPARTAMENTOS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route ('contato') }}">CONTATO</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Título acima do carrossel -->
    <div class="text-center my-5">
        <h1>CONHEÇA A ETEC DA ZONA LESTE!</h1>
    </div>

    <div class="carousel-container">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active position-relative">
                    <img src="{{ asset('imagens/imagem1.png') }}" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption d-md-block">
                        <h2>Conheça a nossa infraestrutura</h2>
                        <p>Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes.</p>
                    </div>
                </div>
                <div class="carousel-item position-relative">
                    <img src="{{ asset('imagens/imagem2.jpg') }}" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption d-md-block">
                        <h2>Nossos cursos</h2>
                        <p>Oferecemos cursos técnicos e profissionalizantes de alta qualidade em diversas áreas do conhecimento, capacitando nossos alunos para o mercado de trabalho. Nosso corpo docente é altamente qualificado, e os cursos são atualizados conforme as demandas do setor.</p>
                    </div>
                </div>
                <div class="carousel-item position-relative">
                    <img src="{{ asset('imagens/imagem3.jpg') }}" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption d-md-block">
                        <h2>Feiras e Eventos</h2>
                        <p>Promovemos feiras, palestras e eventos ao longo do ano para que nossos alunos possam expor seus projetos, interagir com especialistas e ampliar suas oportunidades acadêmicas e profissionais. Participe e faça parte da nossa comunidade!</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
