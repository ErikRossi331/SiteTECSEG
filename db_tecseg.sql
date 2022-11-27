-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 30-Maio-2022 às 02:22
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_tecseg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sobnome` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `compra`
--

INSERT INTO `compra` (`id`, `nome`, `sobnome`, `cpf`, `tel`, `email`) VALUES
(21, 's', 's', 's', 's', ''),
(22, 'a2', 'a2', 'a2', 'a2', 'a3@sa'),
(23, 'Carlos', 'Silva', '389.134.592-05', '(18) 99112-3456', 'carlos@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

DROP TABLE IF EXISTS `mensagem`;
CREATE TABLE IF NOT EXISTS `mensagem` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `mensagem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeus` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailus` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`codigo`, `mensagem`, `nomeus`, `emailus`) VALUES
(14, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'user3', 'user@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precocusto` double DEFAULT NULL,
  `precodesc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precovenda` double DEFAULT NULL,
  `qtd` int(11) DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci,
  `imagem` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgprincipal` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgpqn1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgpqn2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgpqn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `nometec` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigo`, `nome`, `precocusto`, `precodesc`, `precovenda`, `qtd`, `info`, `imagem`, `imgprincipal`, `imgpqn1`, `imgpqn2`, `imgpqn`, `descricao`, `nometec`) VALUES
(1, 'SISTEMA DE DETECÇÃO DE INTRUSÃO', 1150.9, '1689.99', 1252.13, 18, 'Sistema que monitora uma rede em busca de eventos que possam violar as regras de seguranÃ§a dessa rede.', 'deteccao.jpg', 'sistema.jpg', 'sistema2.jpg', 'sistema3.jpg', 'sistema 4.jpg', 'Ideal para sua casa, comÃ©rcio ou empresa esse Kit pode ser instalado em qualquer ambiente protegendo portas e/ou janelas alÃ©m de ambientes \r\nde maior risco oferecendo máxima proteção para o que importa para você. Você usa seu Smartphone para, ativar/desativar e receber notificações de status em tempo real.', 'INTELBRAS AMT 2018 - SISTEMA DE\r\nDETECÇÃO DE INTRUSÃO POR\r\nAPLICATIVO VIA INTERNET SEM FIO'),
(2, 'ROTEADOR MIKROTIK hEX RB750GR3', 190.9, '574.9', 287.45, 44, 'Roteador Ethernet de cinco portas gigabit excelente para o gerenciamento de redes locais. Muito eficiente para uso residencial ou empresarial.', 'mikrotik.png', 'sistema1.jpg', 'sistema2.jpg', 'sistema3.jpg', 'sistema4.jpg', 'O hEX Ã© um roteador Gigabit Ethernet de cinco portas para locais onde a conectividade sem fio não é necessária. O dispositivo possui uma porta USB em tamanho normal. Esta nova revisÃ£o atualizada do hEX traz várias melhorias no desempenho. é acessível, pequeno e fácil de usar, mas ao mesmo tempo vem com uma CPU dual core de 880 MHz muito poderosa e 256 MB de RAM, capaz de todas as configurações avançadas que o RouterOS suporta. A criptografia de hardware IPsec (~ 470 Mbps) e o pacote do servidor Dude são suportados, o slot microSD fornece velocidade r / w aprimorada para armazenamento de arquivos e Dude', 'ROTEADOR MIKROTIK HEX - POE -\r\n5 PORTAS GIGABIT -\r\n1 PORTA USB - RB750GR3'),
(3, 'KIT 8 CÂMERAS DE SEGURANÇA FULL HD', 1658.13, '-', 1733.31, 12, 'Esse Kit é recomendado para sua residência, comércio ou indústria. são ideais para instalação externa ou interna, feita com material de alta qualidade.', 'kitcamera.jpg', 'sistema1.jpg', 'sistema2.jpg', 'sistema3.jpg', 'sistema4.jpg', 'Essa nova linha da marca líder em CFTV traz alta resolução em HD com melhor custo-benefício. A tecnologia HDCVI permite ainda configurar recursos pelo Menu OSD. A câmera possui resolução HD 720p, que proporciona imagens mais nítidas graças à tecnologia HDCVI. O menu OSD permite a configuração e os ajustes finos das imagens na tela em qualquer cenário de instalação. A sua grande sensibilidade possibilita exibir as cores por mais tempo e ajustar o modo de luz de fundo. + Com a nova linha de gravadores Intelbras Multi HD, o seu projeto ganha multi-possibilidades. Além da tecnologia Intelbras HDCVI, já consagrada no mercado brasileiro, agora é possível utilizar as demais tecnologias disponíveis no mercado: AHD, HDTVI, analógica e IP. O novo codec de vídeo H.265 (também chamado de HEVC codificação de vídeo de alta eficiência, na sigla em inglês), é mais eficiente que o seu antecessor H.264. Essa função traz mais economia no armazenamento no disco rígido e na transmissão de informações via internet, pois os dados são compactados com uma taxa de eficiência até 70% superior que sua versão anterior. A alta taxa de compactação não prejudica a qualidade das imagens, garantindo a segurança e a confiabilidade do seu sistema de CFTV Intelbras.+ Este cabo e ideal para CFTV, com sua dupla blindagem e o melhor cabo para seu projeto, sendo fabricado em fio de cobre nu flexivel que garante uma melhor qualidade de sinal.', 'KIT 8 CÂMERAS DE SEGURANÇA FULL HD\r\n1080p LITE 20 METROS INFRAVERMELHO\r\n+ DVR INTELBRAS + CABOS E ACESSÓRIOS'),
(4, 'CABO COAXIAL BIPOLAR BLINDADO INTELBRAS FC67CBR', 113.98, '-', 140.51, 63, 'Capa de isolação externa em PVC 70 °C que garante maior proteção e segurança, garante integridade da transmissão de imagem das câmeras para os gravadores de vídeo.', 'cabo.jpg', 'sistema1.jpg', 'sistema2.jpg', 'sistema3.jpg', 'sistema4.jpg', 'Condutor central e pares de alimentação 100% cobre. O condutor interno em fios de cobre garante a integridade do sinal na transmissão de imagem das câmeras para os gravadores de vídeo. Sistema mais seguro e confiável Possui capa de isolação externa em PVC 70 °C que garante maior proteção e segurança. Custo-benefício Produtos desenvolvidos para projetos de baixa e alta complexidade, atendendo desde residências, até grandes empreendimentos.', 'CABO CFTV INTELBRAS 4mm +\r\n2px26 AWG 67%MALHA 100MTS\r\nFAST CAM FC67CBR'),
(21, 'ROTEADOR CORPORATIVO TECSEG', 1250.99, '-', 1799.81, 6, 'Componentes valioso para valorizar a infraestrutura de tecnologia do seu negócio. Sendo responsável pela transmissão otimizada do sinal de internet, com um bom alcance para todas as pessoas da organização\r\n\r\n', 'roteador1.jpg', 'sistema1.jpg', 'sistema2.jpg', 'sistema3.jpg', 'sistema4.jpg', 'O BSPRO 1350 é um produto da família BusinessFi, ideal para aplicações em pequenos e médios negócios. Com suporte de até 350 usuários simultâneos, possui um alto desempenho e alcance de sinal, com uma velocidade de transmissão de até 1350 Mbps. O produto possui ainda a mais nova função de acesso via Instagram, que permite o acesso à internet pela rede sem fio mediante o follow do usuário na página do negócio. Obtenha mais visibilidade com o Instagram Gere engajamento e ganhe seguidores com a função que libera o acesso à rede através de follow na página do negócio no Instagram. Maior capacidade e cobertura de usuários Suporta até 350 usuários conectados com estabilidade, segurança e um Wi-Fi de longo alcance, além de uma cobertura de até 350 m². Conheça seu cliente e impulsione seu negócio Novas funções Facebook Wi-Fi, proporcionando um melhor conhecimento do cliente conectado e uma maior visibilidade pelo check-in no seu estabelecimento. Wi-Fi profissional como ferramenta de marketing Função Wi-Fi Marketing que possibilita a criação e exibição de anúncios na tela do cliente gerando um melhor engajamento do negócio.', 'ROTEADOR/ACCESS POINT CORPORATIVO\r\nTECSEG BSPRO 1350, 4751182.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

DROP TABLE IF EXISTS `servico`;
CREATE TABLE IF NOT EXISTS `servico` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precodesc` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precovenda` double DEFAULT NULL,
  `info` text COLLATE utf8mb4_unicode_ci,
  `imagem` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgprincipal` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgpqn1` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgpqn2` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgpqn` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8mb4_unicode_ci,
  `nometec` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`codigo`, `nome`, `precodesc`, `precovenda`, `info`, `imagem`, `imgprincipal`, `imgpqn1`, `imgpqn2`, `imgpqn`, `descricao`, `nometec`) VALUES
(6, 'FORMATAÇÃO DE COMPUTADORES', '120', 78, 'Aqui a formatação é real, drivers sempre atualizados, apenas com os softwares necessários, sem inutilidades que deixam seu computador lento.', 'manutencao.jpg', 'sistema1.jpg', 'sistema2.jpg', NULL, NULL, 'Além da formatação também está incluso o backup de todos os arquivos, limpeza interna (caso seja necessário), instalação de todos os drivers necessários para o funcionamento correto do computador e vários programas como Microsoft Office, Google Chrome, Antivirus, entre outros. O cliente também tem a opção de escolher entre os sistemas operacionais Windows ou Linux sem nenhum custo adicional.', 'SERVIÇO - FORMATAÇÃO/REINSTALAÇÃO DE WINDOWS/LINUX PARA COMPUTADORES OU NOTEBOOKS'),
(7, 'INFRAESTRUTURA EM REDES DE COMPUTADORES', '-', 850, 'Instalações e adequações de redes seguindo as normas ABNT NBR 14565 para uma infraestrutura funcional e de qualidade.', 'rede.jpg', 'sistema1.jpeg', 'sistema2.jpg', NULL, NULL, 'Qualidade na integração dos serviços de voz, tráfego de dados, imagem, vídeo, controle e sinalização são esenciais para qualquer negócio. A TecSeg está pronta para implementar esses recursos garantindo a melhor performance dos equipamentos e tecnologias envolvidas, sempre seguindo as normas de segurança ANSI e a EIA/TIA e as normas ABNT e NBR 14565.', 'SERVIÇO - INFRAESTRUTURA DE REDES DE COMPUTADORES ABNT NBR 14565'),
(8, 'ALARME SELF MONITOR', '-', 1998.99, 'Sistema de alarme com monitoramento em seu celular, instalação pensando na proteção de seu patrimônio.', 'alarme.jpg', 'sistema1.jpg', 'sistema2.jpg', NULL, NULL, 'Apresentamos o KIT de alarme JFL com central de alarme Brisa Cell 804 de até 08 Zonas, sensor de abertura SHC-Fit para portas e janelas e sensor de presença IDX 1001. Também estão inclusos nesse KIT a bateria para Centrais de Alarme, Sirene, Controle TX-4R 4.0. Esse KIT é ideal para quem busca um monitoramento eficaz de alta qualidade, e pode ser instalado em residências e empresas.', 'SERVIÇO - ALARME RESIDENCIAL COM MONITORAMENTO EM DISPOSITIVO MÓVEL');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
