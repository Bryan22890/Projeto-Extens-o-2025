<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!--Link para utilização de ícones Font Awesome-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"/> <!--Google Material Symbols-->
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/index.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/acesibfeedback.css">
</head>
<body class="conteudo">
    <div class="banner-azul">
        <header>
            <div class="container">
                <nav>
                    <div class="logo">
                        <a href="banenr.html">infoWEB</a>
                    </div>
                    <ul class="ul">
                        <li><a href="<?= BASE_URL ?>/home">Home</a></li>
                        <li><a href="<?= BASE_URL ?>/comunicacao">Comunicação</a></li>
                        <li><a href="<?= BASE_URL ?>/sobre">Sobre nós</a></li>
                        <li><a href="<?= BASE_URL ?>/desafio">Jogos</a></li>
                    </ul>
                    <div class="menu-icon">
                        <img src="<?= BASE_URL ?>/public/imagens/home/menu.png" alt="" height="50">
                    </div>
                </nav>
            </div>
        </header>
    </div> 
    <!--Conceitos Básicos de Informática-->
    <div class="intro-container">
        <div class="glow"></div>
        <div class="intro-text">Introdução aos Conceitos Básicos de Informática</div>
    </div>
    <!--Cards-->
    <div class="container-card">
        <div class="card">
            <div class="icon">
                <img src="<?= BASE_URL ?>/public/imagens/introducao/tumb.svg" height="150">
            </div>
            <div class="content">
                <h3>Thumbnail</h3>
                <p>A thumbnail é uma imagem pequena usada para representar um conteúdo maior, como um vídeo ou uma foto. Ela serve como uma “capa” ou prévia, ajudando as pessoas a saberem do que se trata o conteúdo antes de abrir. Por exemplo, no YouTube, cada vídeo tem uma thumbnail que mostra uma imagem atrativa para chamar a atenção. Isso facilita na hora de escolher o que assistir, sem precisar abrir tudo.</p>
            </div>
            <a id="video" href="https://www.youtube.com/watch?v=gqxU0pxKnL0">Video</a>
            <button id="Mais-button">Mais</button>
        </div>
        <div class="card">
            <div class="icon">
                <img src="<?= BASE_URL ?>/public/imagens/introducao/backup.svg" height="150">
            </div>
            <div class="content">
                <h3>Backup</h3>
                <p>O backup é uma cópia de segurança dos seus arquivos, como fotos, vídeos, documentos ou programas. Ele é feito para proteger os dados caso algo dê errado, como um vírus, erro do sistema ou até uma queda de energia. Fazer backup com frequência é importante para evitar a perda de coisas importantes. Você pode fazer backup em pen drives, HDs externos, ou na nuvem (como Google Drive e OneDrive).</p>
            </div>
            <a id="video"  href="https://youtu.be/ht8IP1wq8tM?si=E5_k-KGOqCa_9nEC">Video</a>
            <button id="Mais-button">Mais</button>
        </div>
        <div class="card">
            <div class="icon">
                <img src="<?= BASE_URL ?>/public/imagens/introducao/software.svg" height="150">
            </div>
            <div class="content">
                <h3>Software</h3>
                <p>O software é a parte que não conseguimos tocar, mas que faz o aparelho funcionar. São os programas e sistemas, como o Windows, os aplicativos de celular, jogos, editores de texto, navegadores de internet e muito mais. Sem o software, o hardware não saberia o que fazer. Eles trabalham juntos: o software dá as instruções, e o hardware executa.</p>
            </div>
            <a id="video" href="https://youtu.be/jifaRjuMqyk?si=Qxe-iiy8vVpgOnAu">Video</a>
            <button id="Mais-button">Mais</button>
        </div>
        <div class="card">
            <div class="icon">
                <img src="<?= BASE_URL ?>/public/imagens/introducao/hardware.svg" height="150">
            </div>
            <div class="content">
                <h3>Hardware</h3>
                <p>O hardware é tudo aquilo que faz parte física de um computador ou aparelho eletrônico. Isso inclui coisas como o monitor, o teclado, o mouse, o processador, a memória, e até o celular. Ou seja, tudo que dá para ver e tocar. O hardware sozinho não funciona, pois precisa do software para dar comandos. Mas ele é essencial, porque é onde tudo acontece fisicamente.</p>
            </div>
            <a id="video" href="https://youtu.be/N821SCozErY?si=EDsmlBvzCDjPew4e">Video</a>
            <button id="Mais-button">Mais</button>
        </div>
        <div class="card">
            <div class="icon">
                <img src="<?= BASE_URL ?>/public/imagens/introducao/link.svg" height="150">
            </div>
            <div class="content">
                <h3>Link</h3>
                <p>Um link é como um botão ou atalho que você clica para ir a outro lugar na internet. Ele pode te levar para um site diferente, abrir uma imagem, um vídeo ou até outro documento. Os links geralmente estão em textos sublinhados ou botões, e facilitam a navegação, pois conectam várias páginas e informações. Sem os links, seria muito mais difícil acessar conteúdo online de forma rápida.</p>
            </div>
            <a id="video" href="https://www.youtube.com/watch?v=BNo7hToL8SE">Video</a>
            <button id="Mais-button">Mais</button>
        </div>
        <div class="card">
            <div class="icon">
                <img src="<?= BASE_URL ?>/public/imagens/introducao/ip.svg" height="150">
            </div>
            <div class="content">
                <h3>IP</h3>
                <p>O IP, ou “Internet Protocol”, é um número único que cada aparelho recebe ao se conectar na internet. Ele funciona como um endereço, assim como o endereço da sua casa. Com esse número, os sites e outros aparelhos sabem para onde enviar as informações que você pediu, como quando abre uma página. Existem IPs fixos e IPs que mudam, dependendo da conexão.</p>
            </div>
            <a id="video" href="https://youtu.be/QHGkBAVgPr4?si=zCW03vm-M9vAQmWP">Video</a>
            <button id="Mais-button">Mais</button>
        </div>
    </div>
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
    <script src="<?= BASE_URL ?>/public/js/card.js"></script>
</body>
</html>
