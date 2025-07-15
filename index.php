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
    <!-- Animate.css para animações -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
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

        .footer .footer-logo img {
            height: 80px;
            transition: transform 0.2s;
        }

        .footer .footer-logo img:hover {
            transform: scale(1.1);
        }

        .footer .contact-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .footer .contact-info p {
            margin: 0;
            text-align: center;
        }

        .footer .contact-info i {
            margin-right: 5px;
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

        main {
            padding-top: 80px;
        }

        .info-section {
            padding: 50px 0;
            background-color: #f8f9fa;
        }

        .info-section .info-left,
        .info-section .info-right {
            padding: 20px;
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .info-section .info-right {
            transform: translateX(50px);
        }

        .info-section h2 {
            color: #6c3082;
        }

        .header-image {
            width: 100%;
            height: 500px;
            background: url('paisagem.jpeg') no-repeat center center;
            background-size: cover;
            transition: opacity 0.5s ease;
            position: relative;
        }

        .header-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: space-between;
            width: 100%;
            padding: 0 40px;
            box-sizing: border-box;
            text-align: center;
            color: #fff;
            z-index: 2;
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
        }

        .header-content.inactive {
            opacity: 0;
        }

        .header-content .text {
            flex: 1;
            text-align: left;
            margin-right: 20px;
            animation: slideInLeft 1s forwards;
            margin-top: 140px;
        }

        .header-content .logo {
            flex: 0;
            text-align: right;
            animation: slideInRight 1s forwards;
            margin-right: 160px;
        }

        .header-content .logo img {
            height: 300px;
            margin-top: 50px;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(100px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
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
            background-color: #25D366;
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

        .highlighted-text {
            font-size: 1.5em;
            color: #ffffff;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                text-align: center;
                padding: 0 20px;
            }

            .header-content .text {
                margin: 0;
                margin-top: 20px;
                text-align: center;
                font-size: 1.2em;
            }

            .header-content .logo {
                display: none; /* Esconde a logo no celular */
            }

            .navbar-custom {
                padding: 10px 15px;
            }

            .navbar-toggler {
                border: none;
            }

            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%2831, 45, 61, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            }
        }

    </style>
</head>
<body>

<!-- Imagem do cabeçalho -->
<div class="header-image">
    <div class="header-content">
        <div class="text">
            <h1>Bem-vindo à PRIM3</h1>
            <p class="highlighted-text">Excelência e compromisso no cuidado do seu Condomínio.</p>
        </div>
        <div class="logo">
            <img src="Logochaves.png" alt="Logo da empresa">
        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <a class="navbar-brand" href="#home">
        <img src="LOGO.png" alt="Logo" style="height: 80px;"> P R I M 3
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

<!-- Informações adicionais -->
<main class="container mt-4">
    <div class="info-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 info-left">
                    <h2 class="animate__animated animate__fadeInLeft">Solicite seu orçamento sem compromisso</h2>
                </div>
                <div class="col-md-6 info-right">
                    <p class="animate__animated animate__fadeInRight">Contar com um profissionais especializados é uma decisão sábia e estratégica para síndicos, conselhos, condôminos e administradoras. Utilizando nosso conhecimento e experiência, prevenimos conflitos, solucionamos impasses e garantimos as melhores práticas de maneira rápida e eficiente.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-md-4">
        <section id="funcionario" class="content-section">
            <i class="fas fa-users"></i>
            <h2>Assessoria e Administração</h2>
            <p>Atuando em toda a extensão da Gestão Condominial, oferecemos soluções como:</p>
            <ul style="text-align: left;">
                <li>Gestão de Contratos</li>
                <li>Cobranças</li>
                <li>Representação em Assembleias</li>
                <li>Elaboração de Estatutos e Convenções</li>
                <li>Administração e Assessoria</li>
                <li>Síndico Profissional</li>
            </ul>
        </section>
    </div>
    <div class="col-md-4">
        <section id="sinuca" class="content-section">
            <i class="fas fa-balance-scale"></i>
            <h2>Departamento Jurídico</h2>
            <p>Em nossa atuação, temos nos dedicado a compreender as necessidades e preocupações dos condomínios, síndicos, conselhos e condôminos, além de toda a dinâmica que envolve administradoras, construtoras, incorporadoras e prestadores de serviço.</p>
            <p>Com grande competência e sempre em conformidade com a legislação pertinente, a Convenção Condominial e as Atas de Assembleias, oferecemos e implementamos soluções práticas para atingir os objetivos de nossos clientes.</p>
        </section>
    </div>
    <div class="col-md-4">
        <section id="atendimento" class="content-section">
            <i class="fas fa-user-check"></i>
            <h2>Atendimento Personalizado</h2>
            <p>Nosso foco é encontrar a solução mais adequada e eficiente para cada Condomínio. Com um atendimento personalizado, estamos preparados para identificar a melhor abordagem para cada situação.</p>
            <p>Seja mediando conflitos, prestando contas ou trazendo informação atualizada, nosso atendimento é prático e inteligente.</p>
        </section>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) { /* Distância em pixels para adicionar a classe */
                $('.navbar-custom').addClass('scrolled');
                $('.header-content').addClass('inactive'); /* Alterado para 'inactive' para esconder */
            } else {
                $('.navbar-custom').removeClass('scrolled');
                $('.header-content').removeClass('inactive');
            }
        });

        // Efeito de animação para info-section
        $('.info-left').css('opacity', 1).css('transform', 'translateX(0)');
        $('.info-right').css('opacity', 1).css('transform', 'translateX(0)');
    });
</script>
</body>
</html>