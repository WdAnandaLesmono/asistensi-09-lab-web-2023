-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 07:08 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `course_id` char(36) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `name`, `description`, `filename`, `course_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
('9aca0eb4-617a-4640-9cfa-885ad708a488', 'suhu dan kalor', 'suhu adalah suau nilai yang dapat di ukur dengan termometer.', '1701926207_Tugas Keacil Simbad A_H071221028_Nadjwa Amalia.pdf', '9aca0e68-5da9-498e-b5b6-0b0ddba2b378', NULL, '2023-12-06 21:16:47', '2023-12-06 21:16:47'),
('9aca0f18-9738-4482-b7c0-d5beaf7f615f', 'suhu', 'suhu  adalah nilai yang dapat di ukur dengan termometer', '1701926273_Diagram Kelompok 8.pdf', '9aca0e68-5da9-498e-b5b6-0b0ddba2b378', NULL, '2023-12-06 21:17:53', '2023-12-06 21:17:53'),
('9acb6696-9e60-4f05-adc0-1e2120b18048', 'TRANSFORMASI LINEAR', '..', '1701983901_cover s.d bab III.pdf', '9acb662e-4b07-4cdd-811b-52f363d67ab6', NULL, '2023-12-07 13:18:21', '2023-12-07 13:18:21'),
('9acb7586-8d7c-4b88-b181-37d754e6b8df', 'Limit Fungsi Trigonometri', 'Limit fungsi trigonometri adalah nilai yang dicapai oleh suatu fungsi trigonometri ketika variabelnya mendekati suatu nilai tertentu.', '1701986407_Limit Fungsi.pdf', '9acb7533-3c65-41ec-9f54-d17598448468', NULL, '2023-12-07 14:00:07', '2023-12-07 14:00:07'),
('9acb75ec-e50e-421f-8d5e-6de7cde73771', 'Fungsi Real Lanjutan', 'Fungsi bernilai real adalah fungsi yang domain dan rangenya adalah himpunan bagian dari real.', '1701986474_Pertemuan-5-Limit-Fungsi-Lanjutan-dan-Kekontinuan.pdf', '9acb7533-3c65-41ec-9f54-d17598448468', NULL, '2023-12-07 14:01:14', '2023-12-07 14:01:14'),
('9acb7683-446c-4b3f-b764-81e78f4c9d17', 'Pert. 1 Sistem Bilangan Real', 'Sistem Bilangan Real adalah himpunan bilangan real yang disertai dengan operasi penjumlahan dan perkalian sehingga memenuhi aksioma tertentu', '1701986573_Pertemuan-1-Sistem-BIlangan-Real matdas 1 (1).pdf', '9acb7533-3c65-41ec-9f54-d17598448468', NULL, '2023-12-07 14:02:53', '2023-12-07 14:02:53'),
('9acb76e6-a674-4366-9eb8-c703dbccdead', 'Pert 2. Fungsi Real', 'Fungsi bernilai real adalah fungsi yang domain dan rangenya adalah himpunan bagian dari real.', '1701986638_Pertemuan-2.-Fungsi-Real.pdf', '9acb7533-3c65-41ec-9f54-d17598448468', NULL, '2023-12-07 14:03:58', '2023-12-07 14:03:58'),
('9acb7746-089a-48cd-8d9a-27f1bceaafbc', 'Pert 3. Limit Fungsi', 'Limit suatu fungsi merupakan salah satu konsep mendasar dalam kalkulus dan analisis, tentang kelakuan suatu fungsi mendekati titik masukan tertentu.', '1701986701_Pertemuan-4-Limit-Fungsi.pdf', '9acb7533-3c65-41ec-9f54-d17598448468', NULL, '2023-12-07 14:05:01', '2023-12-07 14:05:01'),
('9acb7986-7d4d-4ff1-a78c-5c12c7aef6a1', 'Sistem Periodik Unsur', 'cabang ilmu pengetahuan yang mempelajari sifat, struktur, komposisi, perubahan, dan reaksi zat-zat kimia.', '1701987078_sistem+periodik+unsur.pdf', '9acb7875-931b-4c43-9daf-4bd051ccbfec', NULL, '2023-12-07 14:11:18', '2023-12-07 14:11:18'),
('9acb7a1f-8920-4fb0-bed5-e7e84b82fd98', 'elektrolisis', 'proses kimia yang menggunakan arus listrik untuk menyebabkan reaksi redoks (reduksi-oksidasi) non-spontan dalam larutan elektrolit atau cairan ionik.', '1701987179_Mid Tes Kimia Dasar SisFor A.pdf', '9acb7875-931b-4c43-9daf-4bd051ccbfec', NULL, '2023-12-07 14:12:59', '2023-12-07 14:12:59'),
('9acc1d9e-e87d-4420-9f80-f0c98c5427fb', 'mean', 'rata', '1702014609_Mid Tes Kimia Dasar SisFor A.pdf', '9acc1d69-8acb-4f5a-bfd6-6c002e5a8841', NULL, '2023-12-07 21:50:09', '2023-12-07 21:50:21');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `mode` varchar(255) NOT NULL DEFAULT 'edit',
  `lecturer_id` char(36) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `start_date`, `end_date`, `mode`, `lecturer_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
('9aca0e68-5da9-498e-b5b6-0b0ddba2b378', 'Fisika', 'pelajaran suhu dan kalor', '2023-12-06 16:00:00', '2023-12-21 16:00:00', 'edit', '9aca0ddf-dc9d-4b8e-809b-a1bec9bf24e8', NULL, '2023-12-06 21:15:57', '2023-12-07 14:01:46'),
('9acb662e-4b07-4cdd-811b-52f363d67ab6', 'matematika', 'matematika ilmu yang menyenangkan', '2023-12-06 16:00:00', '2023-12-22 16:00:00', 'edit', '9aca0ddf-dc9d-4b8e-809b-a1bec9bf24e8', NULL, '2023-12-07 13:17:13', '2023-12-07 14:01:41'),
('9acb7533-3c65-41ec-9f54-d17598448468', 'MATEMATIKA', 'Matematika, adalah bidang ilmu, yang mencakup studi tentang topik-topik seperti bilangan, rumus dan struktur terkait, bangun dan ruang tempat mereka berada, dan besaran serta perubahannya.', '2023-12-06 16:00:00', '2023-12-22 16:00:00', 'published', '9aca0ddf-dc9d-4b8e-809b-a1bec9bf24e8', NULL, '2023-12-07 13:59:13', '2023-12-07 14:05:15'),
('9acb7875-931b-4c43-9daf-4bd051ccbfec', 'KIMIA', 'Limit suatu fungsi merupakan salah satu konsep mendasar dalam kalkulus dan analisis, tentang kelakuan suatu fungsi mendekati titik masukan tertentu.', '2023-12-06 16:00:00', '2023-12-11 16:00:00', 'published', '9aca0ddf-dc9d-4b8e-809b-a1bec9bf24e8', NULL, '2023-12-07 14:08:20', '2023-12-07 21:44:53'),
('9acc1257-d3c6-4543-bfd6-324f504d8f82', 'Bahasa Indonesia', 'bahasa persatuan indonesia', '2023-12-07 16:00:00', '2023-12-21 16:00:00', 'published', '9acb78e0-5fb0-41e3-a0c7-0a656d031369', NULL, '2023-12-07 21:18:37', '2023-12-07 21:44:56'),
('9acc1d69-8acb-4f5a-bfd6-6c002e5a8841', 'statistika', 'statistikkaa', '2023-12-07 16:00:00', '2023-12-20 16:00:00', 'published', '9acc1d27-b70d-4501-9ebb-dbd07ad4c8a8', NULL, '2023-12-07 21:49:34', '2023-12-07 21:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_21_074128_create_courses_table', 1),
(6, '2023_11_21_075210_create_contents_table', 1),
(7, '2023_11_24_193934_create_user_course_table', 1),
(8, '2023_11_24_194629_create_user_content_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
('9aca0ddf-dc9d-4b8e-809b-a1bec9bf24e8', 'Amalia awa', 'amalia123', 'amalia@gmail.com', NULL, '$2y$12$/YBk.9f.0d8oavVHF3DGK.SMh844n6YGqkelYRoGSBZW9KQ83ycWK', 'teacher', NULL, NULL, '2023-12-06 21:14:28', '2023-12-06 21:14:28'),
('9aca0e15-a969-40f9-b89d-e3e550ebe3d1', 'seril nanda', 'seriladmin', 'seril@gmail.com', NULL, '$2y$12$S2mOREBTYXChdqnYcr/pwO/I3ljxStVmQfO6IdUkYXSTok0yBwrvK', 'admin', NULL, NULL, '2023-12-06 21:15:03', '2023-12-06 21:15:03'),
('9aca0f83-d446-447c-9a59-4d4983c27d7e', 'Nakita Munsi', 'nakitamunsi', 'nakita@gmail.com', NULL, '$2y$12$V/5UX3Kxluq4heM/YIwKHeiPfCGGf3YmZbuJeuPv3SQqQQbdvjVla', 'student', NULL, NULL, '2023-12-06 21:19:03', '2023-12-06 21:19:03'),
('9acb78e0-5fb0-41e3-a0c7-0a656d031369', 'salsabila', 'Salsabilalala', 'salsabila@gmail.com', NULL, '$2y$12$qQ.5vknsUOsnZgTBxYscxeNx.MUubTabyPD9ae2PyXQ8U2S9.VXUG', 'teacher', NULL, NULL, '2023-12-07 14:09:30', '2023-12-07 14:09:30'),
('9acb7927-6e3e-46e0-9201-d63dd7d8dc22', 'shakira annasya', 'shakira', 'shakira@gmail.com', NULL, '$2y$12$KHFBLkAfy7flVKWEboiHmOgYE.tEmfh3mIgKs82P/JVM081aBoO6S', 'teacher', NULL, '2023-12-07 21:47:14', '2023-12-07 14:10:16', '2023-12-07 21:47:14'),
('9acc1363-3575-4f30-9261-1fb91a617b21', 'ayu widianti', 'ayuwidianti', 'ayuwidianti@gmail.com', NULL, '$2y$12$veuK6nTRiasBG49.94TKT.RQRK64IUz0JGfMAlJbZxWmZTapZ4UKW', 'student', NULL, NULL, '2023-12-07 21:21:32', '2023-12-07 21:21:32'),
('9acc1b6f-efcf-4ca0-991e-6eb85c54fbc6', 'fathan putra', 'fathanputra', 'fathan@gmail.com', NULL, '$2y$12$A9GB7b1F3HD5YyX3MJKz3.b4ug3m40dbpSechXLePtTd0LMtMckRi', 'student', NULL, NULL, '2023-12-07 21:44:03', '2023-12-07 21:44:03'),
('9acc1d27-b70d-4501-9ebb-dbd07ad4c8a8', 'kak nanda', 'nandaaa', 'nanda@gmail.com', NULL, '$2y$12$bjZLQDE9F7HGfilLMYVXyefkrWOzWtlqso2ktBktE3FVeOpuTbTIq', 'teacher', NULL, NULL, '2023-12-07 21:48:51', '2023-12-07 21:48:51'),
('nadjwaamalia', 'Nadjwa Amalia', 'nadjwaamalia', 'nadjwajufri03@gmail.com', NULL, '$2y$12$0uosmDZZ07V.DEuAqMszq.sOssDw4RN3TadZbKlMVspFpgrH7z52K', 'superadmin', NULL, NULL, '2023-12-06 21:13:30', '2023-12-06 21:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_content`
--

CREATE TABLE `user_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` char(36) NOT NULL,
  `content_id` char(36) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `start_at` datetime NOT NULL DEFAULT current_timestamp(),
  `end_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_content`
--

INSERT INTO `user_content` (`id`, `user_id`, `content_id`, `status`, `start_at`, `end_at`, `created_at`, `updated_at`) VALUES
(1, '9aca0f83-d446-447c-9a59-4d4983c27d7e', '9aca0eb4-617a-4640-9cfa-885ad708a488', 1, '2023-12-07 05:19:27', '2023-12-07 05:19:43', '2023-12-06 21:19:27', '2023-12-06 21:19:27'),
(2, '9aca0f83-d446-447c-9a59-4d4983c27d7e', '9aca0f18-9738-4482-b7c0-d5beaf7f615f', 1, '2023-12-07 05:19:27', '2023-12-07 05:20:00', '2023-12-06 21:19:27', '2023-12-06 21:19:27'),
(3, '9aca0f83-d446-447c-9a59-4d4983c27d7e', '9acb6696-9e60-4f05-adc0-1e2120b18048', 1, '2023-12-07 21:19:24', '2023-12-07 21:19:35', '2023-12-07 13:19:24', '2023-12-07 13:19:24'),
(4, '9aca0f83-d446-447c-9a59-4d4983c27d7e', '9acb7586-8d7c-4b88-b181-37d754e6b8df', 0, '2023-12-07 22:05:35', NULL, '2023-12-07 14:05:35', '2023-12-07 14:05:35'),
(5, '9aca0f83-d446-447c-9a59-4d4983c27d7e', '9acb75ec-e50e-421f-8d5e-6de7cde73771', 0, '2023-12-07 22:05:35', NULL, '2023-12-07 14:05:35', '2023-12-07 14:05:35'),
(6, '9aca0f83-d446-447c-9a59-4d4983c27d7e', '9acb7683-446c-4b3f-b764-81e78f4c9d17', 0, '2023-12-07 22:05:35', NULL, '2023-12-07 14:05:35', '2023-12-07 14:05:35'),
(7, '9aca0f83-d446-447c-9a59-4d4983c27d7e', '9acb76e6-a674-4366-9eb8-c703dbccdead', 0, '2023-12-07 22:05:35', NULL, '2023-12-07 14:05:35', '2023-12-07 14:05:35'),
(8, '9aca0f83-d446-447c-9a59-4d4983c27d7e', '9acb7746-089a-48cd-8d9a-27f1bceaafbc', 0, '2023-12-07 22:05:35', NULL, '2023-12-07 14:05:35', '2023-12-07 14:05:35'),
(9, '9acc1b6f-efcf-4ca0-991e-6eb85c54fbc6', '9acb7586-8d7c-4b88-b181-37d754e6b8df', 1, '2023-12-08 05:45:13', '2023-12-08 05:45:27', '2023-12-07 21:45:13', '2023-12-07 21:45:13'),
(10, '9acc1b6f-efcf-4ca0-991e-6eb85c54fbc6', '9acb75ec-e50e-421f-8d5e-6de7cde73771', 0, '2023-12-08 05:45:13', NULL, '2023-12-07 21:45:13', '2023-12-07 21:45:13'),
(11, '9acc1b6f-efcf-4ca0-991e-6eb85c54fbc6', '9acb7683-446c-4b3f-b764-81e78f4c9d17', 0, '2023-12-08 05:45:13', NULL, '2023-12-07 21:45:13', '2023-12-07 21:45:13'),
(12, '9acc1b6f-efcf-4ca0-991e-6eb85c54fbc6', '9acb76e6-a674-4366-9eb8-c703dbccdead', 0, '2023-12-08 05:45:13', NULL, '2023-12-07 21:45:13', '2023-12-07 21:45:13'),
(13, '9acc1b6f-efcf-4ca0-991e-6eb85c54fbc6', '9acb7746-089a-48cd-8d9a-27f1bceaafbc', 0, '2023-12-08 05:45:13', NULL, '2023-12-07 21:45:13', '2023-12-07 21:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_course`
--

CREATE TABLE `user_course` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` char(36) NOT NULL,
  `course_id` char(36) NOT NULL,
  `progress` double(5,2) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_course`
--

INSERT INTO `user_course` (`id`, `user_id`, `course_id`, `progress`, `created_at`, `updated_at`) VALUES
(1, '9aca0f83-d446-447c-9a59-4d4983c27d7e', '9aca0e68-5da9-498e-b5b6-0b0ddba2b378', 2.00, '2023-12-06 21:19:27', '2023-12-06 21:19:27'),
(2, '9aca0f83-d446-447c-9a59-4d4983c27d7e', '9acb662e-4b07-4cdd-811b-52f363d67ab6', 1.00, '2023-12-07 13:19:24', '2023-12-07 13:19:24'),
(3, '9aca0f83-d446-447c-9a59-4d4983c27d7e', '9acb7533-3c65-41ec-9f54-d17598448468', 0.00, '2023-12-07 14:05:35', '2023-12-07 14:05:35'),
(4, '9acc1b6f-efcf-4ca0-991e-6eb85c54fbc6', '9acb7533-3c65-41ec-9f54-d17598448468', 1.00, '2023-12-07 21:45:13', '2023-12-07 21:45:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contents_course_id_foreign` (`course_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_lecturer_id_foreign` (`lecturer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_content`
--
ALTER TABLE `user_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_content_user_id_foreign` (`user_id`),
  ADD KEY `user_content_content_id_foreign` (`content_id`);

--
-- Indexes for table `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_course_user_id_foreign` (`user_id`),
  ADD KEY `user_course_course_id_foreign` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_content`
--
ALTER TABLE `user_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_course`
--
ALTER TABLE `user_course`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_lecturer_id_foreign` FOREIGN KEY (`lecturer_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_content`
--
ALTER TABLE `user_content`
  ADD CONSTRAINT `user_content_content_id_foreign` FOREIGN KEY (`content_id`) REFERENCES `contents` (`id`),
  ADD CONSTRAINT `user_content_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `user_course_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `user_course_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
