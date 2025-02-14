<?php
    $telefoneContato = "18997941144";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Sites - Sistema Rafael Harthopf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://source.unsplash.com/1600x900/?technology,website');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .animated-title {
            font-size: 3.5rem;
            font-weight: bold;
            animation: fadeInUp 2s ease-out;
        }

        .animated-subtitle {
            font-size: 1.25rem;
            font-weight: 300;
            margin-top: 20px;
            animation: fadeInUp 2.5s ease-out;
        }

        .animated-btn {
            margin-top: 30px;
            padding: 12px 30px;
            font-size: 1.1rem;
            background-color: #ff6600;
            color: white;
            border-radius: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
            animation: fadeInUp 3s ease-out;
        }

        .animated-btn:hover {
            background-color: #e65c00;
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-custom {
            background-color: #ff6600;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn-custom:hover {
            background-color: #e65c00;
        }

        .site-thumbnail {
            width: 100%;
            height: 200px;
            background-color: #ddd;
            margin-top: 10px;
            border: 1px solid #ccc;
            overflow: hidden;
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .site-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .site-thumbnail:hover img {
            transform: scale(1.1);
        }

        .lightbox-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .lightbox-overlay img {
            max-width: 90%;
            max-height: 80%;
            border: 5px solid #fff;
        }

        .lightbox-overlay.active {
            display: flex;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Sistema Rafael Harthopf</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="container text-center">
            <h1 class="display-4 animated-title">Criação de Sites Inovadores</h1>
            <p class="lead animated-subtitle">Transformamos ideias em soluções digitais de alto impacto para seu negócio.</p>
            <a href="#contato" class="btn btn-custom animated-btn">Solicitar Orçamento</a>
        </div>
    </header>

    <section id="servicos" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center">Nossos Serviços</h2>
        <div class="row text-center">
            <!-- Primeira linha de serviços -->
            <div class="col-md-6">
                <div class="service-box">
                    <h4>Websites Institucionais</h4>
                    <p>Sites elegantes e profissionais para sua empresa.</p>
                    <a href="http://barbershopmendes.netlify.app/" target="_blank">BarberShop Mendes</a>
                    
                    <div id="carouselWebsites" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/home-barbermendes.png" alt="Imagem BarberShop Mendes" class="d-block w-100 image-preview">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/barbermendes.png" alt="Imagem Barbershop Mendes" class="d-block w-100 image-preview">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselWebsites" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselWebsites" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="service-box">
                    <h4>Sistema de Agenda</h4>
                    <p>Cada usuário poderá ter acesso a sua agenda individual, sem interrupção de agendas ou eventos de outros usuários</p>
                    <a href="https://sistema-rafaelharthopf.wuaze.com/sistema-agenda" target="_blank">Agendador</a>
                    
                    <div id="carouselAgenda" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/agendador1.png" alt="Imagem Agendador" class="d-block w-100 image-preview">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/agendador2.png" alt="Imagem Agendador" class="d-block w-100 image-preview">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselAgenda" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselAgenda" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <!-- Segunda linha de serviços -->
            <div class="col-md-6">
                <div class="service-box">
                    <h4>ERPs</h4>
                    <p>Um sistema completo de gerenciamento de processos para sua empresa, que inclui uma agenda onde o cliente pode agendar o dia, horário e escolher o barbeiro para o atendimento. Na área administrativa, é possível visualizar e gerenciar todos os produtos, estoques, comissões, relatórios e muito mais.</p>
                    <a href="https://sistema-rafaelharthopf.wuaze.com/barbearia/" target="_blank">Barbearia Harthopf</a>
                    
                    <div id="carouselErps" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/barberharthopf.png" alt="Imagem Barbearia Harthopf" class="d-block w-100 image-preview">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/barberharthopf2.png" alt="Imagem Barbearia Harthopf" class="d-block w-100 image-preview">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselErps" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselErps" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="service-box">
                    <h4>Sistema de Contratação de Serviços</h4>
                    <p>Empresas podem se cadastrar para os clientes que irão buscar serviços, possam encontrar sua empresa.</p>
                    <a href="https://sistema-rafaelharthopf.wuaze.com/maridodealuguel" target="_blank">ContrataJá</a>
                    
                    <div id="carouselAgenda" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/contrataja1.png" alt="Imagem ContrataJá" class="d-block w-100 image-preview">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/contrataja.png" alt="Imagem ContrataJá" class="d-block w-100 image-preview">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselContrata" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselContrata" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .service-box {
        height: 100%;
        background-color: white;
        padding: 20px;
        border: 1px solid #ddd;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .image-preview {
        object-fit: cover;
        height: 250px; /* Limita a altura da imagem para manter o layout equilibrado */
    }
</style>




    <section id="contato" class="container py-5 text-center">
        <h2>Entre em Contato</h2>
        <p>Solicite seu orçamento e vamos criar o site ideal para você.</p>
        <a href="https://wa.me/<?php echo $telefoneContato; ?>" target="_blank" class="btn btn-custom">Fale Conosco</a>
    </section>

    <footer class="bg-dark text-center text-white py-3">
        <p>&copy; <span id="current-year"></span> Sistema Rafael Harthopf. Todos os direitos reservados.</p>
    </footer>

    <div class="lightbox-overlay" id="lightbox">
        <img src="" alt="Imagem Ampliada" id="lightbox-image">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const images = document.querySelectorAll('.image-preview');
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');

        images.forEach(image => {
            image.addEventListener('click', function() {
                lightboxImage.src = this.src;
                lightbox.classList.add('active');
            });
        });

        lightbox.addEventListener('click', function() {
            lightbox.classList.remove('active');
        });
        document.getElementById('current-year').textContent = new Date().getFullYear();
    </script>
</body>
</html>
