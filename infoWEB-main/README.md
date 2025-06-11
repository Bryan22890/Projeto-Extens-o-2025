-NOME DO BANCO DE DADOS É ----> infoweb <---- QUANDO CRIAR


README.md

                                Explicação do .htaccess


Options -Indexes: Impede que os diretórios do seu site (como app/controllers ou app/models) sejam listados no navegador se alguém tentar acessá-los diretamente.

RewriteEngine On: Ativa o módulo de reescrita de URLs do Apache.

RewriteBase /infoWEB/: Extremamente importante para o seu caso! Isso define a base a partir da qual as URLs serão reescritas. Como seu projeto está em http://localhost/infoWEB/, esta é a base correta. Se você estivesse acessando diretamente http://localhost/ e o projeto estivesse na raiz do htdocs, seria RewriteBase /.

RewriteCond %{REQUEST_FILENAME} !-d: Esta linha e a próxima são "condições". Elas dizem: "Se a requisição NÃO for para um diretório real existente..."

RewriteCond %{REQUEST_FILENAME} !-f: "...E se a requisição NÃO for para um arquivo real existente..."

RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]: "...Então, reescreva qualquer coisa (^(.+)$) que vem depois da RewriteBase (ex: comunicacao/index) e mande para index.php?url= e adicione o que foi capturado ($1)."

QSA: (Query String Append) Anexa quaisquer outros parâmetros da URL original (se houver) à nova URL.

L: (Last Rule) Indica que esta é a última regra a ser processada.




                    Mudanças na chamada de imagens e de estilização css

De: href="../public/css/comunicacao.css"
Para: href="<?= BASE_URL ?>/public/css/comunicacao.css"

De: src="../public/imagens/comunicacao/imagem 1.png"
Para: src="<?= BASE_URL ?>/public/imagens/comunicacao/imagem 1.png"

Isso garante que, não importa onde o usuário esteja na navegação do seu site, o caminho para seus arquivos estáticos será sempre um caminho absoluto e funcionará corretamente.
