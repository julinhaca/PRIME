<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRIM3</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS para ícones -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Estilo personalizado -->
    <style>
        .navbar-custom {
            background-color: transparent;
            transition: background-color 0.3s, padding 0.3s;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-custom.scrolled {
            background-color: #f8f9fa;
            padding: 10px 0;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #3f0647 !important;
            font-size: 15px;
            padding: 8px 15px;
            margin: 0 6px;
        }

        .navbar-custom .nav-link:hover {
            color: #6c3082 !important;
        }

        .dropdown-menu {
            background-color: #ffffff;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item {
            color: #3f0647;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #6c3082;
        }

        .content-section {
            text-align: center;
            padding: 20px;
            color: #3f0647;
            background-color: #f8f9fa;
            margin-bottom: 20px;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 0;
        }

        .content-section:hover {
            background-color: #ffffff;
            color: #6c3082;
        }

        .content-section i {
            font-size: 3em;
            margin-bottom: 10px;
            color: #3f0647;
        }

        body {
            background-color: #ffffff;
            color: #3f0647;
        }

        .footer {
            position: relative;
            background: url('paisagem.jpeg') no-repeat center center;
            background-size: cover;
            color: #6c3082;
            padding: 20px 0;
            border-top: 1px solid #dee2e6;
        }

        .footer-content {
            position: relative;
            z-index: 2;
            color: #6c3082;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
        }

        .footer-logo img {
            height: 80px;
            border: none; /* Remove a borda */
            box-shadow: none; /* Remove a sombra */
        }

        .footer .contact-info {
            display: flex;
            flex-direction: column;
        }

        .footer .contact-info p {
            margin: 0;
        }

        .footer .contact-info i {
            margin-right: 5px;
        }

        main {
            padding-top: 80px;
        }

        .info-section {
            padding: 50px 0 100px;
            background-color: #f8f9fa;
        }

        .info-section .info-left,
        .info-section .info-right {
            padding: 20px;
        }

        .info-section .info-left {
            border-right: 1px solid #dee2e6;
        }

        .info-section h2 {
            color: #6c3082;
        }

        .header-image {
            width: 100%;
            height: 300px;
            background: url('paisagem.jpeg') no-repeat center center;
            background-size: cover;
            transition: opacity 0.5s ease;
        }

        .header-image.hidden {
            opacity: 0;
        }

        .footer .social-media {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footer .social-media a {
            color: #6c3082;
            font-size: 1em;
            margin: 0 15px;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .footer .social-media a:hover {
            color: #3f0647;
        }

        .footer .social-media span {
            margin-left: 5px;
            font-size: 1.0em;
        }

        .footer-image {
            width: 100%;
            height: 300px;
            background: url('paisagem.jpeg') no-repeat center center;
            background-size: cover;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .whatsapp-float:hover {
            background-color: #1ebd5a;
        }

        .whatsapp-float i {
            font-size: 30px;
        }

        .form-section {
            text-align: center;
            padding: 20px;
            color: #3f0647;
            background-color: #f8f9fa;
            margin-bottom: 20px;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-section h2 {
            color: #6c3082;
            margin-bottom: 20px;
        }

        .form-section .form-control {
            border-color: #ced4da;
            margin-bottom: 15px;
            border-radius: 10px;
            padding: 12px;
            font-size: 20px;
        }

        .form-section .btn-primary {
            background-color: #6c3082;
            border-color: #6c3082;
            border-radius: 10px;
            padding: 10px 30px;
            font-size: 20px;
        }

        .history-section {
            padding: 60px 0;
            background-color: #ffffff;
        }

        .history-section .history-content {
            text-align: left;
            padding: 20px;
        }

        .history-section h2 {
            color: #3f0647;
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        .history-section p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .history-section .highlight {
            color: #6c3082;
            font-weight: bold;
        }

        .history-section .icon {
            font-size: 2.5em;
            color: #6c3082;
            margin-bottom: 20px;
        }

        .history-section .image-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .history-section .image-container img {
            max-width: 100%;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .history-section .card {
            border: none;
            margin-bottom: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .history-section .card:hover {
            transform: translateY(-10px);
        }
        /* Mostrar o ícone de mais opções em dispositivos móveis */
        @media (max-width: 768px) {
            .more-options-icon {
                display: inline-block; /* Exibe o ícone apenas em dispositivos móveis */
            }
        }

        /* Estilos para o botão do menu e outros */
        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%2831, 45, 61, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
    </style>
</head>

<body>

    <!-- Imagem do cabeçalho -->
    <div class="header-image"></div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <a class="navbar-brand" href="#home">
            <img src="LOGO.png" alt="Logo" style="height: 80px; border: none; box-shadow: none;"> P R I M 3
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <span><b>HOME</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="proposta.php">
                        <span><b>PROPOSTA</b></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobrenois.php">
                        <span><b>QUEM SOMOS</b></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container mt-4">
        <!-- Seção de História -->
        <div class="history-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 history-content">
                        <h2>CONHEÇA A PRIM3 GESTÃO DE CONDOMÍNIOS</h2>
                        <p>Desde <span class="highlight">Junho de 2023</span>, Cascavel e região contam com a excelência dos serviços da Prim3 Gestão de Condomínios, uma empresa sólida e conceituada em sua área de atuação.</p>
                        <p>Seus sócios proprietários possuem experiência na área condominial há mais de 20 anos. Na PRIM3 CONDOMINIOS, nós não trabalhamos unicamente com a gestão de imóveis, mas com pessoas, seus sonhos, particularidades e principalmente suas diferentes necessidades na condução de seu patrimônio.</p>
                        <p>É justamente por isso que nosso modelo de atuação é baseado na mudança, na inovação e na capacidade de se adaptar à realidade de cada condomínio como um todo. <span class="highlight">Buscamos sempre ser diferentes</span>. Queremos fazer primeiro. Gostamos de fazer mais. Renovamos nosso fôlego a cada cliente conquistado, a cada conflito solucionado.</p>
                        <p>Para nós da Prim3 Gestão de Condomínios, a conquista se dá a cada sorriso de um cliente satisfeito, a cada nova amizade construída e a cada atuação capaz de mudar a vida das pessoas na vida em condomínio.</p>
                        <p><span class="highlight">Ser diferente é ser inquieto</span>. É não se contentar com o meio termo. Mais do que buscar, é preciso perseguir a qualidade. Esse é o melhor compromisso que podemos assumir com nossos clientes condôminos e com nossa equipe.</p>
                    </div>
                    <div class="col-md-6 image-container">
                        <img src="LOGO.png" alt="Imagem da Empresa" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="footer text-center text-md-left">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="col-md-4 footer-logo">
                    <img src="LOGO.png" alt="Logo">
                </div>

                <!-- Informações de contato -->
                <div class="col-md-4 contact-info">
                    <p><i class="fas fa-map-marker-alt"></i> 
                       <a href="https://www.google.com/maps?q=Rua+Francisco+Beltrão,+1433,+Cascavel-PR" target="_blank" style="color: #6c3082;">Rua Francisco Beltrão, 1433 - Cascavel, PR</a>
                    </p>
                    <div class="social-media">
                        <a href="https://www.instagram.com/prim3_condominios" target="_blank">
                            <i class="fab fa-instagram"></i>
                            <span>Instagram</span>
                        </a>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="col-md-4 text-md-right">
                    <p>&copy; 2023 PRIM3. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Ícone flutuante do WhatsApp -->
    <a href="https://wa.me/45998131460" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- jQuery Mask Plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('.navbar-custom').addClass('scrolled');
                    $('.header-image').addClass('hidden');
                } else {
                    $('.navbar-custom').removeClass('scrolled');
                    $('.header-image').removeClass('hidden');
                }
            });
        });
    </script>
</body>

</html>

