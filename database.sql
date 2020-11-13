--
-- Banco de dados: `crud_person`
--
CREATE DATABASE crud_person;
-- --------------------------------------------------------

--
-- Estrutura da tabela `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

--
-- Extraindo dados da tabela `person`
--

INSERT INTO `person` (`id`, `name`) VALUES
(NULL, 'Person 1'),
(NULL, 'Person 2'),
(NULL, 'Person 3');

