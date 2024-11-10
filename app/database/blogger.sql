-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 10/11/2024 às 15:53
-- Versão do servidor: 8.0.40
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blogger`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int NOT NULL AUTO_INCREMENT,
  `autor` varchar(150) NOT NULL,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_post` datetime NOT NULL,
  `date_update` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `post`
--

INSERT INTO `post` (`id`, `autor`, `title`, `category`, `content`, `date_post`, `date_update`) VALUES
(2, 'João Silva', 'Dicas de Culinária Italiana', 'Food', 'Neste artigo, você aprenderá a fazer uma autêntica pasta italiana...', '2024-11-01 00:00:00', NULL),
(3, 'Maria Souza', 'As Principais Tendências de Tecnologia em 2024', 'Technology', 'Exploramos as tendências que estão moldando o futuro da tecnologia...', '2024-11-02 00:00:00', NULL),
(5, 'Ana Lima', 'Top 10 Álbuns de Rock dos Anos 90', 'Entertainment', 'Uma seleção dos melhores álbuns de rock da década de 90...', '2024-11-04 00:00:00', NULL),
(6, 'Pedro Rocha', 'Destinos Exóticos para Conhecer', 'Travel', 'Aqui estão alguns destinos incríveis e pouco conhecidos...', '2024-11-05 00:00:00', NULL),
(9, 'Fernanda Martins', 'Como Melhorar o Processo de Estudo em casa', 'Personal Development', 'Dicas para otimizar seu processo de aprendizado...', '2024-11-08 00:00:00', '2024-11-10 01:03:31'),
(28, 'João Silva', 'Dicas de Culinária Italiana', 'Food', 'Neste artigo, você aprenderá a fazer uma autêntica pasta italiana...', '2024-11-01 00:00:00', NULL),
(29, 'Maria Souza', 'As Principais Tendências de Tecnologia em 2024', 'Technology', 'Exploramos as tendências que estão moldando o futuro da tecnologia...', '2024-11-02 00:00:00', NULL),
(30, 'Ana Lima', 'Top 10 Álbuns de Rock dos Anos 90', 'Entertainment', 'Uma seleção dos melhores álbuns de rock da década de 90...', '2024-11-04 00:00:00', NULL),
(31, 'Pedro Rocha', 'Destinos Exóticos para Conhecer', 'Travel', 'Aqui estão alguns destinos incríveis e pouco conhecidos...', '2024-11-05 00:00:00', NULL),
(32, 'Luciana Costa', 'Livros Essenciais de Ficção Científica', 'Entertainment', 'Listamos alguns dos melhores livros de ficção científica...', '2024-11-06 00:00:00', NULL),
(33, 'Ricardo Ferreira', 'Os Filmes mais Aguardados de 2025', 'Entertainment', 'Uma lista dos filmes mais esperados para o próximo ano...', '2024-11-07 00:00:00', NULL),
(41, 'Lucas', 'Explorando a Revolução da Inteligência Artificial na Medicina', 'Technology', 'A inteligência artificial está revolucionando a medicina com avanços em diagnósticos, tratamentos personalizados e eficiência hospitalar. O uso de machine learning e redes neurais ajuda médicos a analisar rapidamente grandes quantidades de dados, facilitando diagnósticos mais precisos. Esses avanços não apenas aumentam a taxa de sucesso dos tratamentos, mas também ajudam a prever e prevenir doenças. Hospitais estão utilizando IA para otimizar recursos, desde o agendamento até o gerenciamento de estoques, tornando a medicina mais acessível e ágil.', '2024-11-10 12:50:59', NULL),
(42, 'Lucas', 'Benefícios e Sabores das Plantas Comestíveis na Dieta', 'Food', 'Incorporar plantas comestíveis na alimentação é uma prática que vem ganhando destaque, tanto pelo sabor quanto pelos benefícios nutricionais. Além das tradicionais, como espinafre e couve, novas opções, como o dente-de-leão e a taioba, estão conquistando espaço. Ricas em fibras, vitaminas e minerais, essas plantas contribuem para a saúde do intestino, aumentam a imunidade e possuem antioxidantes que combatem o envelhecimento precoce. Muitos chefs também utilizam essas plantas para trazer sabores únicos, tornando a alimentação saudável mais prazerosa e variada.', '2024-11-10 12:50:59', NULL),
(43, 'Lucas', 'A Ascensão dos Jogos Indie e seu Impacto na Indústria de Games', 'Entertainment', 'Nos últimos anos, os jogos indie conquistaram um lugar importante na indústria de games, oferecendo experiências inovadoras e criativas que desafiam as produções tradicionais. Diferente dos jogos das grandes produtoras, os jogos independentes são desenvolvidos por equipes pequenas ou até mesmo por uma única pessoa, permitindo maior liberdade criativa. Esse movimento é responsável por alguns dos títulos mais originais e impactantes da última década, como “Hades” e “Celeste”, que misturam narrativa envolvente com jogabilidade única. O sucesso desses jogos reforça a importância da diversidade e inovação na indústria.', '2024-11-10 12:50:59', NULL),
(44, 'Lucas', 'O Impacto da Internet das Coisas (IoT) nas Cidades Inteligentes', 'Technology', 'O conceito de cidades inteligentes está cada vez mais próximo da realidade, graças à Internet das Coisas (IoT). Com sensores interconectados, semáforos inteligentes, e monitoramento em tempo real, a IoT está revolucionando a forma como os serviços urbanos funcionam. Sistemas de transporte público se tornam mais eficientes, o consumo de energia é monitorado e otimizado, e até a segurança pública ganha novas ferramentas para identificar e resolver problemas rapidamente. A implementação da IoT nas cidades é um avanço rumo a uma infraestrutura urbana mais sustentável e eficaz.', '2024-11-10 12:52:07', NULL),
(45, 'Lucas', 'Culinária Sustentável: Reduzindo Desperdícios na Cozinha', 'Food', 'A busca por uma culinária mais sustentável tem levado chefs e cozinheiros a reinventarem receitas e técnicas de preparo, minimizando o desperdício de alimentos. Desde o uso completo de vegetais, incluindo cascas e talos, até a criação de receitas que aproveitam ingredientes comumente descartados, a culinária sustentável promove o respeito aos alimentos e ao meio ambiente. Essa abordagem não só reduz o desperdício, mas também valoriza cada parte dos ingredientes, oferecendo novos sabores e texturas e incentivando um consumo mais consciente.', '2024-11-10 12:52:07', NULL),
(46, 'Lucas', 'Como o Streaming Está Mudando o Mercado da Música', 'Entertainment', 'Com a popularização das plataformas de streaming, o mercado musical passou por uma transformação radical. Antes, o acesso a músicas era limitado a discos físicos, downloads digitais ou rádio. Hoje, plataformas como Spotify e Apple Music permitem que os ouvintes tenham acesso a milhões de músicas instantaneamente. Essa mudança abriu portas para novos artistas, diversificou os gêneros mais populares e deu ao público a liberdade de explorar novas culturas musicais. Contudo, também levanta questões sobre a remuneração justa dos artistas, que ainda lutam por um pagamento equitativo pelo consumo de suas músicas.', '2024-11-10 12:52:07', NULL),
(47, 'Lucas', 'Computação Quântica: O Futuro da Tecnologia e seus Desafios', 'Technology', 'A computação quântica é considerada uma das tecnologias mais promissoras para resolver problemas complexos que estão além das capacidades dos computadores clássicos. Utilizando qubits, em vez de bits, essa tecnologia permite cálculos em paralelo, o que pode revolucionar áreas como criptografia, simulação molecular e aprendizado de máquina. No entanto, a computação quântica ainda enfrenta desafios como a estabilidade dos qubits e a necessidade de ambientes especiais para operação. Embora estejamos nos primeiros estágios, os avanços recentes mostram um futuro de possibilidades revolucionárias para a tecnologia.', '2024-11-10 12:52:07', NULL),
(48, 'Lucas', 'A Arte de Fazer Pães Artesanais: Tradição e Sabor', 'Food', 'O pão artesanal é muito mais que um alimento: é o resultado de técnicas milenares e de uma conexão especial entre o padeiro e os ingredientes. Diferente do pão industrializado, o pão artesanal é feito com ingredientes simples e técnicas que permitem o crescimento natural da massa. Esse processo, além de dar um sabor único ao pão, mantém a integridade nutricional dos ingredientes. Muitos padeiros artesanais escolhem cultivar suas próprias leveduras naturais, o que adiciona complexidade ao sabor e torna cada pão uma criação única. Fazer pão artesanal é uma forma de resgatar tradições e levar mais sabor à mesa.', '2024-11-10 12:52:07', NULL),
(49, 'Lucas', 'O Poder das Histórias Interativas nos Jogos Narrativos', 'Entertainment', 'Jogos narrativos estão redefinindo o que significa contar histórias, permitindo que os jogadores influenciem diretamente o desenrolar dos eventos. Diferente de filmes ou livros, onde o enredo é fixo, os jogos narrativos oferecem múltiplas escolhas, gerando finais variados com base nas decisões do jogador. Esse formato cria uma conexão única entre jogador e personagem, tornando a história mais imersiva e pessoal. Títulos como \"The Witcher 3\" e \"Detroit: Become Human\" exemplificam como decisões complexas e enredos profundos podem transformar o jogo em uma experiência emocional intensa.', '2024-11-10 12:52:07', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date_create` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `date_create`) VALUES
(1, 'Lucas', 'admin@gmail.com', '$2y$10$LvfYL/x.EHkb8jCi8qLSYe4zmHaIAVHyzt5k.UKAx/bMi6EWjo6h.', '2024-11-08 17:24:49'),
(2, 'Pedro', 'pedro@gmail.com', '$2y$10$q9uNjAceFFysQa/fTpBb3uc4XxVvq6Wq5qAh2tZD8k04qxwNFpQwW', '2024-11-09 01:05:33'),
(3, 'Marcus', 'marcus@gmail.com', '$2y$10$1t0t720AsHlPI6VKFZYwzeDDn7BQSAIx/5ZNq5og2qCbcAKrWrBeG', '2024-11-09 12:18:17'),
(5, 'kel', 'kel@gmail.com', '$2y$10$kvN9UEYWdcQPRhYLHdwfOu5okQaUnFF49G3v9opWIMZABVHELmmOq', '2024-11-10 12:26:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
