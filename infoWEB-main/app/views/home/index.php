<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!--Link para utilização de ícones Font Awesome-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"/> <!--Google Material Symbols-->
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/index.css">
</head>
<body>
    <div class="banner-azul">
        <header>
            <div class="container">
                <nav>
                    <div class="logo">
                        <a href="banenr.html">infoWEB</a>
                    </div>
                    <ul class="ul">
                        <li><a href="<?= BASE_URL ?>/home">Home</a></li>
                        <li><a href="<?= BASE_URL ?>/sobre">Sobre nós</a></li>
                        <li><a href="<?= BASE_URL ?>/desafio">Jogos</a></li>
                    </ul>
                    <div class="menu-icon">
                        <img src="<?= BASE_URL ?>/public/imagens/home/menu.png" alt="" height="50">
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="main-text">
                    <h1>Navegando e aprendendo com segurança</h1>
                    <div>
                        <img src="<?= BASE_URL ?>/public/imagens/home/verificado.png" alt="Verificado" height="50">
                    </div>
                </div>
                <div class="main-img">
                    <img src="<?= BASE_URL ?>/public/imagens/home/note.banner.webp" alt="banner-comput">
                </div>
            </div>
        </main>
    </div>
    <section id="sobre">
        <h2>O que é Navegando com Segurança?</h2>
        <p>Navegando com Segurança é um projeto educativo criado para ajudar as pessoas a se protegerem na internet. Aqui você encontrará conteúdos interativos, dicas de segurança e um quiz para testar seus conhecimentos.</p>
        <div class="beneficios">
            <a href="<?= BASE_URL ?>/dicas" class="beneficio">
                <img src="<?= BASE_URL ?>/public/imagens/home/proteja-se.png" alt="Segurança">
                <p>Aprenda a evitar golpes online</p>
            </a>
            <a href="<?= BASE_URL ?>/desafio" class="beneficio">
                <img src="<?= BASE_URL ?>/public/imagens/home/conhecimento.png" alt="Quiz">
                <p>Teste seus conhecimentos</p>
            </a>
            <a href="<?= BASE_URL ?>/introducao" class="beneficio">
                <img src="<?= BASE_URL ?>/public/imagens/home/informatica.png" alt="Aulas">
                <p>Conceitos Basicos de Informática </p>
            </a>
        </div>
    </section>
    <!--footer-->
    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <h3>Contact Us</h3>
                <p>Email:Info@exemplo.com</p>
                <p>Phone:21 96875-4878</p>
                <p>localhost/ecoPoint</p>
            </div>
            <div class="footer-content">
                <h3>Desenvolvedores</h3>
                <ul class="list">
                    <li><a href="">Alessandra Cristina da Silva Pereira</a></li>
                    <li><a href="">Bryan Caristiati Costa</a></li>
                    <li><a href="">Eric Luiz Xavier de Araujo</a></li>
                    <li><a href="">Daniel Jesus Dias Alves</a></li>
                    <li><a href="">Gabriel Araújo de Oliveira</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!--end-footer-->
    <!--Menu de Acessibilidade-->
    <div id="menu-acessibilidade" class="menu-acessibilidade">
        <div class="btnAbre" onclick="toggleAcessMenu()">
        <span class="material-symbols-outlined">accessible_forward</span>
        </div>
        <div id="painel-acessibilidade" class="painel-acessibilidade">
            <button id="increaseFont">Aumentar Fonte</button>
            <button id="decreaseFont">Diminuir Fonte</button>
            <button onclick="mudarContraste()">Alterar Contraste</button>
            <button onclick="lerConteudo()">Ler Conteúdo</button>
            <button onclick="pararLeitura()">Parar Leitura</button>
            <br>
            <label for="feedback">Feedback de acessibilidade:</label>
            <textarea id="feedback" rows="4" placeholder="Tem um problema de acessibilidade? Nós de um Feedback"></textarea>
            <button onclick="enviarFeedbackAceb()">Enviar Feedback</button>
        </div>
    </div>
    <!--Menu de Feedback-->
    <div id="menu-feedback" class="menu-feedback">
        <div class="btnFeedback" onclick="toggleFeedbackMenu()">
        <span class="material-symbols-outlined">feedback</span>
        </div>
        <div id="painel-feedback" class="painel-feedback">
            <h3>Deixe seu Feedback</h3>
            <p>Nosso site visa a mudança, nada melhor do que você nós ajudar de pertinho.
            Abaixo escreva um feedback sobre nosso site e sua experiência dentro dele.
            Não se esqueça, pode fazer isso quando e quantas vezes quiser!!</p>
            <textarea id="feedback-text" rows="5" placeholder="Digite aqui seu feedback..."></textarea>
            <button onclick="enviarFeedback()">Enviar Feedback</button>
        </div>
    </div>
    <script src="<?= BASE_URL ?>/public/js/acessibfeedback.js"></script> <!--Código JS do painel de acessibilidade e da caixa de feedback-->
    <script src="<?= BASE_URL ?>/public/js/menu-mob.js"></script>
</body>
</html>
