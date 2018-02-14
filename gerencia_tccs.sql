-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14/02/2018 às 21:18
-- Versão do servidor: 10.1.31-MariaDB
-- Versão do PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gerencia_tccs`
--
CREATE DATABASE IF NOT EXISTS `gerencia_tccs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gerencia_tccs`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Fazendo dump de dados para tabela `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('samuel.neves@live.com', '$2y$10$Uk3DVT2GA4KhLai/Dlc6IeWpQuUJZVPwpXxOomiFCO0JYCHH29llC', '2018-01-27 00:37:35');

-- --------------------------------------------------------

--
-- Estrutura para tabela `propostas`
--

CREATE TABLE `propostas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomealuno` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `orientador` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `coorientador` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipotcc` int(11) NOT NULL,
  `titulo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `areapesquisa` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tema` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `objetivos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `problema` longtext,
  `referencias` longtext,
  `proposta_aprovada` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `propostas`
--

INSERT INTO `propostas` (`id`, `nomealuno`, `matricula`, `orientador`, `coorientador`, `tipotcc`, `titulo`, `areapesquisa`, `tema`, `objetivos`, `created_at`, `updated_at`, `user_id`, `problema`, `referencias`, `proposta_aprovada`) VALUES
(3, 'esadsa', 'dsadsa', 'dsadsa', 'dsadsa', 2, 'dsadsa', 'dsadas', 'dsadsa', 'dsadsa', '2018-02-07 00:21:07', '2018-02-07 21:02:06', 3, 'dsadsa', NULL, 1),
(5, 'dsadsa', 'dsadsa', 'dsadas', 'dsadsa', 2, 'dsadsa', 'dsa', 'dsadsadsa', 'dsadsadas', '2018-02-07 00:22:42', '2018-02-07 00:22:42', 3, 'dsadsa', 'dsadsadsa', 1),
(6, 'Aluno', '12321', 'João', 'Lucas', 2, 'dsadsa', 'dsadsa', 'dsadsad', 'dsadsa', '2018-02-08 14:28:09', '2018-02-14 21:12:09', 6, 'dsadsadsa', 'dsadasdasdas', 1),
(7, 'Aluno2', 'Matriicula2', 'Orientador 1', 'Coorientador AA', 2, 'Uma proposta para tcc com titulo aleatorio I', 'Otimização', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '2018-02-14 21:10:05', '2018-02-14 21:10:05', 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 0),
(8, 'Aluno3', 'matAluno3', 'ORientaodr', 'Orientador', 1, 'Lorem Ipsum', 'IA', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat', '2018-02-14 21:11:28', '2018-02-14 22:02:18', 8, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `isAdmin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'samuel', 'samuel.neves@live.com', '$2y$10$GixmrIRIQT2vgdYch2tiT.oKJ1WEQ7ETrrY60NG4lD.sAreGCyduG', 0, 'wmQCBZCPmXc9zdF7mfwKV2C7V9SGg12ITiBmwfbWv81u3R90vQImHEQtPmzF', '2018-01-24 01:14:27', '2018-01-24 01:14:27'),
(3, 'SAMUEL A NEVES', 'samuel.ant.neves@gmail.com', '$2y$10$w5Q5JBQDZbMjjP7WyU8k9urJiWlHOWW.aOo5WkoIdBC9AL4V99lre', 1, 'GZNIIIiylqwH9xDx8Aqai61qVWBl7g2nY5DPEBu24BA3IQRfXyAn0KnCnktS', '2018-01-27 00:39:27', '2018-01-27 00:39:27'),
(5, 'Admin', 'admin@admin.com.br', '$2y$10$ng2GbEgZL8bByl8VgClmQ.oFqcK2sRzBSL2lGi0w8eQynvNVeXepq', 1, 'phjgqmmVWWw7INT8kzTZ6n0sVkcJm299OrKJHZHH3m13GCr4QN2P0Pu3fBd1', '2018-02-07 23:52:58', '2018-02-07 23:52:58'),
(6, 'Aluno', 'aluno@aluno.com.br', '$2y$10$vZSnUroTg1NjXX3Y.KGkBOkvJn3dbvOOVTUtyB5MpXZfYoAxBYfBC', 0, '1hOzo4I3Rx6RVvbQDYbXnnWzIcLWS8IPH0J1bICoFw5CO3cWG0hD9nim0PEi', '2018-02-07 23:53:40', '2018-02-07 23:53:40'),
(7, 'Aluno2', 'aluno2@aluno.com.br', '$2y$10$lF7d.1XlYbrg7itdEXuqpO7p9Yo0025SBdR7l7vCi.KjGOLu.Ai52', 0, 's4YFWhGPkwjUJjAaxYQNIqjp0iMtFvz6OZzqyLm9x9Yh7hsl0sbMwPVXKk9w', '2018-02-14 21:07:36', '2018-02-14 21:07:36'),
(8, 'Aluno3', 'aluno3@aluno.com.br', '$2y$10$IvSBYi3Zdn29yvLCObVbE.V5zfFx65ZYL4ZrFeQNAbHB/kFWcqGCu', 0, 'uGC8e8GP6f3qI8SgkdyqYQeJfjpOaHFBUOjvkzdzuE389Pla02kXlWgtFMXT', '2018-02-14 21:10:42', '2018-02-14 21:10:42');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices de tabela `propostas`
--
ALTER TABLE `propostas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `propostas`
--
ALTER TABLE `propostas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `propostas`
--
ALTER TABLE `propostas`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
