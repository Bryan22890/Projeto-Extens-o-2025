<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 id="text">Internet sem Medo: Conscientização sobre Segurança para Todos</h2>

                <p id="text">A crescente digitalização da sociedade trouxe inúmeros benefícios, mas também expôs uma 
                parcela da população a riscos cibernéticos, especialmente aqueles que não tiveram 
                oportunidades de acompanhar a evolução tecnológica. 
                Dentro desse contexto, destaca-se o grupo dos Usuários de Alto Risco Digital, que inclui 
                idosos, pessoas com baixa escolaridade, novatos na internet, indivíduos que evitam ou 
                têm pouca paciência para tecnologia, além daqueles que compartilham informações 
                excessivamente ou clicam impulsivamente em links suspeitos. Esses perfis apresentam maior 
                vulnerabilidade a golpes, ataques e violações de dados, o que exige uma conscientização e 
                medidas de proteção específicas. Pensando nisso, o projeto visa desenvolver um site educativo
                sobre segurança na internet, direcionado a esse público. O objetivo é fornecer informações
                acessíveis e interativas sobre os principais perigos online, como golpes, fraudes e 
                vazamento de dados, além de ensinar boas práticas para navegação segura. Dessa maneira, 
                foi criado o site educativo InfoWEB que visa a segurança na internet para aqueles que 
                desejam aprender mais sobre o ambiente digital, ajudando a prevenir fraudes e aumentar a 
                conscientização sobre o tema. O projeto "Navegando com Segurança - Educação Digital para 
                Todos" busca unir educação e tecnologia para atender uma necessidade crescente na sociedade. 
                Com a participação ativa dos alunos do curso de Análise e Desenvolvimento de Sistemas, a 
                iniciativa contribuirá tanto para o aprendizado acadêmico quanto para o impacto social, 
                ajudando a tornar a internet um ambiente mais seguro para todos.</p>
            </div>
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
</body>
</html>