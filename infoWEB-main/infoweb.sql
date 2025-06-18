-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/06/2025 às 00:39
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `infoweb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alternativas`
--

CREATE TABLE `alternativas` (
  `id` int(11) NOT NULL,
  `pergunta_id` int(11) DEFAULT NULL,
  `texto` varchar(255) NOT NULL,
  `correta` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alternativas`
--

INSERT INTO `alternativas` (`id`, `pergunta_id`, `texto`, `correta`) VALUES
(1, 1, 'Uma imagem grande usada como capa de um livro', 0),
(2, 1, 'Uma miniatura de uma imagem ou vídeo que serve como uma prévia', 1),
(3, 1, 'Um tipo de arquivo de áudio', 0),
(4, 1, 'Uma ferramenta de edição de textos', 0),
(5, 2, 'Uma cópia de segurança dos seus dados, feita para protegê-los em caso de perda ou danos', 1),
(6, 2, 'Um programa que melhora a velocidade do seu computador', 0),
(7, 2, 'Uma forma de excluir arquivos desnecessários do seu dispositivo', 0),
(8, 2, 'Um tipo de vírus que infecta seus arquivos', 0),
(9, 3, 'Uma imagem que você pode clicar para ver uma foto', 0),
(10, 3, 'Um texto ou imagem que, ao clicar, leva você à outra página ou conteúdo na web', 1),
(11, 3, 'Um programa que você baixa para jogar jogos online', 0),
(12, 3, 'Uma senha que protege seu e-mail', 0),
(13, 4, 'Um hardware que armazena informações', 0),
(14, 4, 'Um conjunto de instruções que fazem um computador funcionar', 1),
(15, 4, 'Uma peça física que conecta ao computador à internet', 0),
(16, 4, 'Um tipo de vírus que infecta computadores', 0),
(17, 5, 'É o conjunto de programas e aplicativos que você usa no computador', 0),
(18, 5, 'São os componentes físicos do computador, como a placa-mãe, o processador e o disco rígido', 1),
(19, 5, 'É uma conexão de internet de alta velocidade', 0),
(20, 5, 'São os arquivos salvos no seu computador', 0),
(21, 6, 'Um código que identifica um computador na internet ou rede local', 1),
(22, 6, 'Uma senha de acesso ao seu roteador', 0),
(23, 6, 'Um tipo de vírus que infecta computadores', 0),
(24, 6, 'Um programa que melhora a velocidade da internet', 0),
(25, 7, 'Um programa que ajuda a proteger o seu computador contra vírus e ameaças', 1),
(26, 7, 'Um jogo que você pode jogar no computador', 0),
(27, 7, 'Um tipo de hardware que melhora a velocidade do computador', 0),
(28, 7, 'Um arquivo que você baixa para assistir vídeos online', 0),
(29, 8, 'Sim, porque ambos são seguros', 0),
(30, 8, 'Não, o \"https\" indica que a conexão é segura', 1),
(31, 8, 'Sim, o \"http\" é mais confiável', 0),
(32, 8, 'Não, o URL não importa para segurança', 0),
(33, 9, 'Sim, sites falsos muitas vezes têm erros de português e design ruim', 1),
(34, 9, 'Não, isso não tem relação com a autenticidade do site', 0),
(35, 9, 'Sim, porque sites verdadeiros sempre têm erros', 0),
(36, 9, 'Não, erros de ortografia são normais em todos os sites', 0),
(37, 10, 'Clicar no link para ver onde leva', 0),
(38, 10, 'Passar o mouse sobre o link para ver o endereço real antes de clicar', 1),
(39, 10, 'Ignorar o e-mail completamente', 0),
(40, 10, 'Copiar o link e colar em um editor de texto', 0),
(41, 11, 'Usar senhas fracas para facilitar o login', 0),
(42, 11, 'Manter seu navegador atualizado e usar antivírus confiável', 1),
(43, 11, 'Compartilhar suas senhas com amigos para segurança', 0),
(44, 11, 'Desativar o firewall do computador', 0),
(45, 12, 'Uma lei que regula o uso de redes sociais no Brasil', 0),
(46, 12, 'Uma lei que protege os dados pessoais das pessoas, garantindo privacidade e segurança', 1),
(47, 12, 'Uma norma que define regras para o comércio exterior brasileiro', 0),
(48, 12, 'Uma lei que regula o trânsito nas cidades brasileiras', 0),
(49, 13, 'Uma rede de computadores que conecta diferentes dispositivos na mesma casa', 0),
(50, 13, 'Um serviço que permite criar uma conexão segura e privada na internet, escondendo seu endereço IP e protegendo seus dados', 1),
(51, 13, 'Um programa que melhora a velocidade da sua conexão de internet', 0),
(52, 13, 'Um tipo de vírus que infecta computadores e rouba informações', 0),
(53, 14, 'Clicar imediatamente para ver o que é', 0),
(54, 14, 'Ignorar o link e deletar a mensagem', 0),
(55, 14, 'Compartilhar o link com amigos para pedir opinião', 0),
(56, 14, 'Verificar a origem do link e a autenticidade da mensagem', 1),
(57, 15, 'Clicar nele para verificar o que é', 0),
(58, 15, 'Responder à mensagem pedindo mais informações', 0),
(59, 15, 'Pesquisar o site ou remetente antes de clicar', 1),
(60, 15, 'Salvar o link para usar depois', 0),
(61, 16, 'Ele tem um endereço estranho ou diferente do site oficial', 1),
(62, 16, 'Ele vem de um amigo conhecido', 0),
(63, 16, 'Ele aparece em uma mensagem de um banco confiável', 0),
(64, 16, 'Ele é curto e fácil de lembrar', 0),
(65, 17, 'Compartilhar a experiência com amigos', 1),
(66, 17, 'Alterar suas senhas e verificar suas contas por segurança', 0),
(67, 17, 'Desconectar seu dispositivo da internet imediatamente', 0),
(68, 17, 'Ignorar e fechar a página', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `texto`) VALUES
(1, 'O que é uma thumbnail?'),
(2, 'O que é um backup?'),
(3, 'O que é um link na internet?'),
(4, 'O que é um software?'),
(5, 'O que é hardware?'),
(6, 'O que é um Endereço IP?'),
(7, 'O que é um antivírus?'),
(8, 'O site possui um URL que começa com \"http\" ao invés de \"https\". Isso é um sinal de que o site é seguro?'),
(9, 'Ao acessar um site, você percebe que ele tem erros de ortografia e layout malfeito. Isso pode indicar que o site é falso?'),
(10, 'Você recebeu um link suspeito por e-mail e quer verificar se é seguro antes de clicar. Qual é a melhor prática?'),
(11, 'Qual dessas ações ajuda a proteger seus dados ao navegar na internet?'),
(12, 'O que é a LGPD e para que ela serve?'),
(13, 'O que é uma VPN?'),
(14, 'O que você deve fazer antes de clicar em um link recebido por mensagem ou e-mail?'),
(15, 'Qual dessas ações é mais segura ao receber um link suspeito?'),
(16, 'Como você pode identificar um link suspeito?'),
(17, 'O que fazer se você clicar em um link suspeito por engano?');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alternativas`
--
ALTER TABLE `alternativas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_perguntas_id` (`pergunta_id`);

--
-- Índices de tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `alternativas`
--
ALTER TABLE `alternativas`
  ADD CONSTRAINT `fk_pergunta_id` FOREIGN KEY (`pergunta_id`) REFERENCES `perguntas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_perguntas_id` FOREIGN KEY (`pergunta_id`) REFERENCES `perguntas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
