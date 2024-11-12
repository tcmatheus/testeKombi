<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <!-- Inclua aqui o Bootstrap e o CSS personalizado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Menu de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Minha Empresa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#servicos">Nossos Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre Nós</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Solicite um Orçamento</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carrossel de Banners -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($banners as $banner)
                <div class="carousel-item @if($loop->first) active @endif">
                    <img src="{{ asset('storage/' . $banner->imagem) }}" class="d-block w-100" alt="{{ $banner->titulo }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $banner->titulo }}</h5>
                        <p>{{ $banner->descricao }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Seção de Serviços -->
    <section id="servicos" class="py-5">
        <div class="container">
            <h2>Nossos Serviços</h2>
            <div class="row">
                <!-- Substitua este exemplo com um loop de serviços, se houver -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="path/to/image.jpg" class="card-img-top" alt="Serviço">
                        <div class="card-body">
                            <h5 class="card-title">Serviço 1</h5>
                            <p class="card-text">Descrição do serviço 1.</p>
                            <a href="#contato" class="btn btn-primary">Solicite um Orçamento</a>
                        </div>
                    </div>
                </div>
                <!-- Repita para outros serviços -->
            </div>
        </div>
    </section>

    <!-- Seção "Sobre Nós" -->
    <section id="sobre" class="py-5 bg-light">
        <div class="container">
            <h2>Sobre Nós</h2>
            <p>Texto institucional sobre a empresa, incluindo visão, missão e valores.</p>
        </div>
    </section>

    <!-- Seção de FAQs -->
    <section id="faq" class="py-5">
        <div class="container">
            <h2>Dúvidas Frequentes</h2>
            <div class="accordion" id="accordionFAQ">
                @foreach($faqs as $faq)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $faq->id }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}" aria-expanded="true" aria-controls="collapse{{ $faq->id }}">
                                {{ $faq->pergunta }}
                            </button>
                        </h2>
                        <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                {{ $faq->resposta }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Formulário de Contato -->
    <section id="contato" class="py-5 bg-light">
        <div class="container">
            <h2>Solicite um Orçamento</h2>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="celular" class="form-label">Celular</label>
                    <input type="tel" class="form-control" id="celular" name="celular" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="py-3 bg-dark text-white text-center">
        <div class="container">
            <p>&copy; {{ date('Y') }} Minha Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
