-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2024 at 11:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_module_20_finalproject_jobpulse`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_pages`
--

CREATE TABLE `about_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_title` varchar(255) DEFAULT NULL,
  `company_history` text DEFAULT NULL,
  `company_vision` text DEFAULT NULL,
  `company_about_banner_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_pages`
--

INSERT INTO `about_pages` (`id`, `company_title`, `company_history`, `company_vision`, `company_about_banner_image`, `created_at`, `updated_at`) VALUES
(1, 'About Page', 'We Started this company  very recent. Our final year project is this. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit molestiae corporis exercitationem animi eaque maxime quidem nobis consequuntur labore laboriosam, dolorem porro perferendis provident fugit ipsum magnam cupiditate impedit neque. Sunt perspiciatis modi consequatur officiis delectus, odit accusamus expedita, provident placeat dolor, natus quis dicta ratione pariatur sed rerum est magni eligendi! Quae quam, neque laudantium minima repellat veniam voluptatem nesciunt a delectus itaque vitae reprehenderit tenetur iure ex labore molestiae quod ut minus? Nihil adipisci sint at, in laboriosam rerum laborum saepe fugit quia, harum ducimus, voluptatibus molestias non assumenda? Dolorem doloremque saepe labore laudantium non facere, ducimus eligendi expedita odio eius odit atque officiis? Ratione, odit eveniet, nam ab debitis cupiditate enim molestiae aspernatur voluptate molestias aut.  Nam nulla delectus sint, minima dolorum deserunt mollitia repellat atque quo quae distinctio culpa aliquid eum architecto est corrupti fuga animi modi iure sed optio eligendi! Adipisci impedit hic blanditiis dolorum suscipit similique ullam ducimus, soluta saepe quis ex cumque doloremque tempore veniam vel officia quo, officiis quasi sequi velit id eum necessitatibus nemo architecto! Amet deleniti vitae magni ex facilis quas, sapiente laborum. Velit explicabo vero voluptatibus vel nemo porro vitae quisquam suscipit amet sapiente sequi ipsam nobis eos, cumque rem! Vero enim dolore dolor, quasi totam animi delectus aperiam a natus accusamus, exercitationem eum, facere officia fuga soluta veritatis neque! Provident quae eveniet quaerat minus, expedita porro delectus laborum libero voluptatibus enim fugiat accusamus quibusdam explicabo harum id quas necessitatibus nam praesentium.', 'Provide job for who need. But also we focus freshers job. It is very hard for a fresher to find a job. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit molestiae corporis exercitationem animi eaque maxime quidem nobis consequuntur labore laboriosam, dolorem porro perferendis provident fugit ipsum magnam cupiditate impedit neque. Sunt perspiciatis modi consequatur officiis delectus, odit accusamus expedita, provident placeat dolor, natus quis dicta ratione pariatur sed rerum est magni eligendi! Quae quam, neque laudantium minima repellat veniam voluptatem nesciunt a delectus itaque vitae reprehenderit tenetur iure ex labore molestiae quod ut minus? Nihil adipisci sint at, in laboriosam rerum laborum saepe fugit quia, harum ducimus, voluptatibus molestias non assumenda? Dolorem doloremque saepe labore laudantium non facere, ducimus eligendi expedita odio eius odit atque officiis? Ratione, odit eveniet, nam ab debitis cupiditate enim molestiae aspernatur voluptate molestias aut.  Nam nulla delectus sint, minima dolorum deserunt mollitia repellat atque quo quae distinctio culpa aliquid eum architecto est corrupti fuga animi modi iure sed optio eligendi! Adipisci impedit hic blanditiis dolorum suscipit similique ullam ducimus, soluta saepe quis ex cumque doloremque tempore veniam vel officia quo, officiis quasi sequi velit id eum necessitatibus nemo architecto! Amet deleniti vitae magni ex facilis quas, sapiente laborum. Velit explicabo vero voluptatibus vel nemo porro vitae quisquam suscipit amet sapiente sequi ipsam nobis eos, cumque rem! Vero enim dolore dolor, quasi totam animi delectus aperiam a natus accusamus, exercitationem eum, facere officia fuga soluta veritatis neque! Provident quae eveniet quaerat minus, expedita porro delectus laborum libero voluptatibus enim fugiat accusamus quibusdam explicabo harum id quas necessitatibus nam praesentium.', '202402161252ewall_1.jpg', '2024-02-14 03:40:34', '2024-02-16 07:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `apply_jobs`
--

CREATE TABLE `apply_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_jobs`
--

INSERT INTO `apply_jobs` (`id`, `job_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2024-02-12 18:18:52', '2024-02-12 18:18:58'),
(2, 3, 1, '2024-02-12 12:18:28', '2024-02-12 12:18:28'),
(3, 2, 9, '2024-02-14 00:26:52', '2024-02-14 00:26:52'),
(4, 10, 10, '2024-02-17 03:42:45', '2024-02-17 03:42:45'),
(5, 9, 10, '2024-02-17 03:43:00', '2024-02-17 03:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_pages`
--

CREATE TABLE `blog_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `bg_img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_pages`
--

INSERT INTO `blog_pages` (`id`, `title`, `sub_title`, `bg_img`, `created_at`, `updated_at`) VALUES
(1, 'Blog Page', 'We are team of talented people to make your dream job find easy', '202402161807ewall_1.jpg', '2024-02-16 12:03:36', '2024-02-16 12:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 14, 'Company 8', '202402161203company8.png', '2024-02-15 03:39:33', '2024-02-16 06:03:05'),
(2, 5, 'Company 1', '202402161153company1.svg', '2024-02-15 09:40:32', '2024-02-16 05:53:05'),
(3, 3, 'Company 2', '202402161221company2.png', '2024-02-15 09:40:32', '2024-02-16 06:21:00'),
(4, 6, 'Company 3', '202402161208company3.png', '2024-02-15 09:41:40', '2024-02-16 06:08:27'),
(5, 7, 'Company 4', '202402161224company4.png', '2024-02-15 09:41:40', '2024-02-16 06:24:23'),
(6, 11, 'Company 5', NULL, '2024-02-15 09:43:36', '2024-02-15 04:09:30'),
(7, 12, 'Company 6', '202402170817profile.png', '2024-02-15 09:43:36', '2024-02-17 02:17:38'),
(8, 13, 'Company 7', NULL, '2024-02-15 09:44:46', '2024-02-15 04:10:48'),
(9, 15, 'Company 9', '202402170926course-details-tab-2.png', '2024-02-17 03:23:33', '2024-02-17 03:26:51'),
(10, 16, NULL, NULL, '2024-02-17 03:33:52', '2024-02-17 03:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `contact_pages`
--

CREATE TABLE `contact_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_pages`
--

INSERT INTO `contact_pages` (`id`, `title`, `address`, `phone`, `email`, `background_image`, `created_at`, `updated_at`) VALUES
(1, 'Contact Page', 'Manikgonj, Dhaka', '01302917207', 'admin@gmail.com', '202402161254ewall_1.jpg', '2024-02-15 07:15:22', '2024-02-16 06:54:28');

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
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `bg_img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `title`, `sub_title`, `bg_img`, `created_at`, `updated_at`) VALUES
(1, 'Job Pulse', 'We are team of talented people to make your dream job find easy', '202402161638ewall_1.jpg', '2024-02-16 10:38:19', '2024-02-16 10:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `description` varchar(255) NOT NULL,
  `benefits` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `deadline` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_id`, `category`, `title`, `status`, `description`, `benefits`, `location`, `deadline`, `created_at`, `updated_at`) VALUES
(1, 5, 'Software Engineer', 'Meta', 'Active', 'Our company is loking for passionate programmer. Instereted can apply.', 'Handsome Salary for Trainning Period and after join that will increase based on knowledge.', 'Manikgonj, Dhaka, Bangladesh', '2024-02-15 17:12:06', '2024-02-12 04:12:28', '2024-02-15 11:12:06'),
(2, 5, 'Developers', 'Laravel Developer', 'Active', 'a', 'a', 'a', '2024-02-15 17:12:58', '2024-02-12 04:14:58', '2024-02-15 11:12:58'),
(3, 5, 'Developers', 'Flutter', 'Active', 'We need a Junior Flutter Developer for our company.', 'Handsome Salary', 'Manikgonj, Bangladesh', '2024-02-15 17:13:37', '2024-02-12 04:43:03', '2024-02-15 11:13:37'),
(4, 12, 'Designers', 'Graphics Designer', 'Active', 'We need a Graphics Designer for our company.', 'Handsome Salary', 'Manikgonj, Bangladesh', '2024-02-15 17:18:04', '2024-02-15 03:19:59', '2024-02-15 11:18:04'),
(5, 3, 'Software Engineer', 'Software Engineer (Intern)', 'Active', 'We need a Intern software Engineer for our company.', 'Handsome Salary', 'Manikgonj, Bangladesh', '2024-02-15 17:14:16', '2024-02-15 03:23:30', '2024-02-15 11:14:16'),
(6, 6, 'UI/UX', 'Ui/Ux Designer', 'Active', 'We need a passioned Ui/Ux designer. Interested can Apply.', 'Handsome Salary', 'Manikgonj, Dhaka', '2024-02-15 17:16:15', '2024-02-15 07:52:59', '2024-02-15 11:16:15'),
(7, 12, 'Web Development', 'Mern Stack Developer', 'Active', 'aaa', 'aaa', 'aaa', '2024-02-17 08:25:10', '2024-02-17 02:21:44', '2024-02-17 02:25:10'),
(8, 12, 'Marketers', 'Marketing Job', 'Active', 'aaa', 'aaa', 'Manikgonj, Dhaka, Bangladesh', '2024-02-17 08:29:30', '2024-02-17 02:28:41', '2024-02-17 02:29:30'),
(9, 3, 'Software Engineer', 'SoftWare Engineer', 'Active', 'aaa', 'aaa', 'Manikgonj, Dhaka, Bangladesh', '2024-02-17 08:32:59', '2024-02-17 02:32:42', '2024-02-17 02:32:59'),
(10, 15, 'Designers', 'React Developer', 'Active', 'We need a React Developer for our company.', 'Handsome Salary', 'Manikgonj, Bangladesh', '2024-02-17 10:01:54', '2024-02-17 03:28:40', '2024-02-17 04:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `jobs_pages`
--

CREATE TABLE `jobs_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `bg_img` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs_pages`
--

INSERT INTO `jobs_pages` (`id`, `title`, `sub_title`, `bg_img`, `created_at`, `updated_at`) VALUES
(1, 'Jobs Page', 'We are team of talented people to make your dream job find easy', '202402161705ewall_1.jpg', '2024-02-16 11:05:51', '2024-02-16 11:05:51');

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
(5, '2024_02_12_030431_add_roll_to_users_table', 2),
(6, '2024_02_12_065055_add_status_to_users_table', 3),
(7, '2024_02_12_093124_create_jobs_table', 4),
(8, '2024_02_12_101744_add_column_to_jobs_table', 5),
(9, '2024_02_12_121252_add_column_to_jobs_table', 6),
(10, '2024_02_12_173928_create_apply_jobs_table', 7),
(11, '2024_02_13_041717_create_profiles_table', 8),
(13, '2024_02_13_125933_create_profile_education_table', 9),
(14, '2024_02_13_154217_create_profile_trainings_table', 10),
(16, '2024_02_13_160720_create_profile_experiences_table', 11),
(17, '2024_02_14_084744_create_about_pages_table', 12),
(18, '2024_02_14_143901_add_column_to_users_table', 13),
(19, '2024_02_14_160620_add_column_to_users_table', 14),
(20, '2024_02_15_093053_create_companies_table', 15),
(23, '2024_02_15_101323_add_column_to_companies_table', 16),
(24, '2024_02_15_125951_create_contact_pages_table', 17),
(25, '2024_02_15_134150_add_category_column_to_jobs_table', 18),
(26, '2024_02_16_161302_create_home_pages_table', 19),
(27, '2024_02_16_161340_create_jobs_pages_table', 19),
(28, '2024_02_16_161354_create_blog_pages_table', 19);

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `dribble` varchar(255) DEFAULT NULL,
  `portfolio` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `current_salary` varchar(255) DEFAULT NULL,
  `expected_salary` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `full_name`, `father_name`, `mother_name`, `date_of_birth`, `blood_group`, `nid`, `passport`, `phone`, `phone2`, `email`, `whatsapp`, `facebook`, `linkedin`, `github`, `dribble`, `portfolio`, `skills`, `current_salary`, `expected_salary`, `created_at`, `updated_at`) VALUES
(1, 1, 'RIFAT JAHAN ZIM 1', 'Mosharof Hossain', 'Monoara Akther', '1998-01-01', 'A+', '09877654345678', '0987654567887654', '01302917207', '01893883484', 'zim1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-13 01:19:19', '2024-02-15 21:00:34'),
(2, 9, 'RIFAT JAHAN ZIM 2', 'Mosharof Hossain 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'zim2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-13 01:57:28', '2024-02-13 11:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `profile_education`
--

CREATE TABLE `profile_education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `versityDegree` varchar(255) DEFAULT NULL,
  `versityInstitute` varchar(255) DEFAULT NULL,
  `versityDepartment` varchar(255) DEFAULT NULL,
  `versityYear` varchar(255) DEFAULT NULL,
  `versityResult` varchar(255) DEFAULT NULL,
  `hscDegree` varchar(255) DEFAULT NULL,
  `hscInstitute` varchar(255) DEFAULT NULL,
  `hscDepartment` varchar(255) DEFAULT NULL,
  `hscYear` varchar(255) DEFAULT NULL,
  `hscResult` varchar(255) DEFAULT NULL,
  `sscDegree` varchar(255) DEFAULT NULL,
  `sscInstitute` varchar(255) DEFAULT NULL,
  `sscDepartment` varchar(255) DEFAULT NULL,
  `sscYear` varchar(255) DEFAULT NULL,
  `sscResult` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_education`
--

INSERT INTO `profile_education` (`id`, `user_id`, `versityDegree`, `versityInstitute`, `versityDepartment`, `versityYear`, `versityResult`, `hscDegree`, `hscInstitute`, `hscDepartment`, `hscYear`, `hscResult`, `sscDegree`, `sscInstitute`, `sscDepartment`, `sscYear`, `sscResult`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bsc', 'Daffodil', 'CSE', '2024', '3.33', 'Hsc', 'Milestone', NULL, NULL, NULL, 'Ssc', 'Manikgonj', NULL, NULL, NULL, '2024-02-13 08:49:30', '2024-02-15 21:01:09'),
(2, 9, 'BA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-13 08:56:34', '2024-02-13 08:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `profile_experiences`
--

CREATE TABLE `profile_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `designation1` varchar(255) DEFAULT NULL,
  `companyName1` varchar(255) DEFAULT NULL,
  `joiningDate1` varchar(255) DEFAULT NULL,
  `leftDate1` varchar(255) DEFAULT NULL,
  `designation2` varchar(255) DEFAULT NULL,
  `companyName2` varchar(255) DEFAULT NULL,
  `joiningDate2` varchar(255) DEFAULT NULL,
  `leftDate2` varchar(255) DEFAULT NULL,
  `designation3` varchar(255) DEFAULT NULL,
  `companyName3` varchar(255) DEFAULT NULL,
  `joiningDate3` varchar(255) DEFAULT NULL,
  `leftDate3` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `currentSalary` varchar(255) DEFAULT NULL,
  `expectedSalary` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_experiences`
--

INSERT INTO `profile_experiences` (`id`, `user_id`, `designation1`, `companyName1`, `joiningDate1`, `leftDate1`, `designation2`, `companyName2`, `joiningDate2`, `leftDate2`, `designation3`, `companyName3`, `joiningDate3`, `leftDate3`, `skills`, `currentSalary`, `expectedSalary`, `created_at`, `updated_at`) VALUES
(1, 9, 'Junior Software Engineer (Frontend)', 'Abc Solutions', 'March, 2023', 'Current', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Php, Laravel, Javascript, React', '0', NULL, '2024-02-13 10:39:37', '2024-02-13 10:52:53'),
(2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '25000', '2024-02-13 21:08:57', '2024-02-13 21:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `profile_trainings`
--

CREATE TABLE `profile_trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `traningTitle1` varchar(255) DEFAULT NULL,
  `instituteName1` varchar(255) DEFAULT NULL,
  `year1` varchar(255) DEFAULT NULL,
  `traningTitle2` varchar(255) DEFAULT NULL,
  `instituteName2` varchar(255) DEFAULT NULL,
  `year2` varchar(255) DEFAULT NULL,
  `traningTitle3` varchar(255) DEFAULT NULL,
  `instituteName3` varchar(255) DEFAULT NULL,
  `year3` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_trainings`
--

INSERT INTO `profile_trainings` (`id`, `user_id`, `traningTitle1`, `instituteName1`, `year1`, `traningTitle2`, `instituteName2`, `year2`, `traningTitle3`, `instituteName3`, `year3`, `created_at`, `updated_at`) VALUES
(1, 9, 'Web Design (Basic...)', 'Inistitute 1', '2022', 'Web Design (React)', 'Inistitute 2', '2023', 'Web Development (Laravel)', 'Inistitute 3', '2024', '2024-02-13 10:02:33', '2024-02-13 10:04:47'),
(2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-13 21:08:56', '2024-02-13 21:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL DEFAULT 'Candidate',
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `photo` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `roll`, `status`, `photo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ZIM', 'zim 1', NULL, 'zim1@gmail.com', 'Candidate', 'Pending', '202402150636zim_4_12_june_2022.jpg', NULL, '$2y$12$Sr6K4.NZ6DBfFXfKifhBpOgFjViOyv0WbwxHb5xHlNyBIqSDH86zO', 'n5cZrUc8S6ksRlTBJ8qMOGRyQUz4XVv6VGUOyWpSE5nxmgzw4IiKYZzPYR6v', '2024-02-11 11:29:00', '2024-02-15 03:25:53'),
(2, 'Admin', NULL, NULL, 'admin1@gmail.com', 'Admin', 'Pending', NULL, NULL, '$2y$12$9K/IMdnmuwwqkJHfaIb/jejDSzZuYdcGU.qIY039ehbn1VU2cuJTe', 'fuSnNTTEIgbhIvj9AGsTkQZYaB7pdrKEPp4xUcTp9I2bHx6pCkxUENBqiIJ1', '2024-02-12 04:05:26', '2024-02-14 21:53:29'),
(3, 'Company 2', NULL, NULL, 'company2@gmail.com', 'Company', 'Active', NULL, NULL, '$2y$12$nD/tM72LkcFQPcMQXuzZr.CYvpv3MKkprQhRiIB3hrw6kzNUy1cF6', 'qdgeZm6UIB0Mg637GeLgbcyNREdILfj9YsysHdF5PkmZOciw7moxohCPmgQz', '2024-02-12 04:05:26', '2024-02-14 21:55:12'),
(4, 'Admin', 'Admin', '1', 'admin@gmail.com', 'Admin', 'Pending', '20240215033611.jpeg', NULL, '$2y$12$Ez3DTJW2EYVPZm0PnUOOoeNEoAFQm4FxRoRbCvUADhO/L6jjXdpvu', NULL, '2024-02-11 22:10:19', '2024-02-15 13:12:36'),
(5, 'Company 1', 'Company', '1', 'company1@gmail.com', 'Company', 'Active', '202402150331202307101815Screenshot (156).png', NULL, '$2y$12$dUD9nXwdIpotQ9fHEadJjeRLY6kfo7t//4yA8L/tZbUvl/Bkh9PQS', NULL, '2024-02-11 22:11:00', '2024-02-15 13:13:06'),
(6, 'Company 3', NULL, NULL, 'company3@gmail.com', 'Company', 'Active', NULL, NULL, '$2y$12$V0sT8ic11OOulo1NzXKV8ONUy5O3kKpjmv05bK2oAUei7rLoeiNN2', NULL, '2024-02-11 23:21:51', '2024-02-12 02:56:21'),
(7, 'Company 4', NULL, NULL, 'company4@gmail.com', 'Company', 'Active', NULL, NULL, '$2y$12$QnIJKEUmSc.kuUDdxQ7S8OTb6eosc3sGMSwyy/7hDtj9vQtfDnsg.', NULL, '2024-02-11 23:26:10', '2024-02-12 02:56:50'),
(9, 'ZIM 2', NULL, NULL, 'zim2@gmail.com', 'Candidate', 'Pending', NULL, NULL, '$2y$12$sGSFTP9zlFHHpgtSCxnl0O2xL8QhYTKIvOV8Rm5Fr6MZmKI5/foxS', NULL, '2024-02-13 01:51:35', '2024-02-13 01:51:35'),
(10, 'ZIM 3', NULL, NULL, 'zim3@gmail.com', 'Candidate', 'Pending', NULL, NULL, '$2y$12$udeEMIuU5ceEIOHWz5yixuedLVgQ/QZ9CPVH6q4faqY5eQshF.CJO', NULL, '2024-02-15 03:07:48', '2024-02-15 03:07:48'),
(11, 'Company 5', NULL, NULL, 'company5@gmail.com', 'Company', 'Pending', NULL, NULL, '$2y$12$jh/xxG9oTSt8/15YEO8ANuompiisqEH4tRYtZv9yHgvfZJdE3BDcy', NULL, '2024-02-15 03:10:13', '2024-02-15 03:10:13'),
(12, 'Company 6', NULL, NULL, 'company6@gmail.com', 'Company', 'Active', NULL, NULL, '$2y$12$Z0eQGUG7iEWriNYeTf/0TeiQ2MJPeWY1caj4EOBxBCsC8rgtrsG3W', NULL, '2024-02-15 03:13:58', '2024-02-17 02:25:31'),
(13, 'Company 7', NULL, NULL, 'company7@gmail.com', 'Company', 'Pending', NULL, NULL, '$2y$12$badOZ9af/TnRWP35qizaJ.Pzze5xlz8cvlPQLmAV0p6a7qUCzzvxy', NULL, '2024-02-15 03:38:18', '2024-02-15 03:38:18'),
(14, 'Company 8', NULL, NULL, 'company8@gmail.com', 'Company', 'Pending', NULL, NULL, '$2y$12$apsap0xj55l09oLTKIxCXeQiDl0y4ATXcMu8tSndf1bgH4io7blUW', NULL, '2024-02-15 03:39:33', '2024-02-15 03:39:33'),
(15, 'Company 9', NULL, NULL, 'company9@gmail.com', 'Company', 'Active', NULL, NULL, '$2y$12$pq8uEf7tv63nKl84CiFrVO07/JlpG2ue4KOfI0/LR1I7pPwwo6/IO', NULL, '2024-02-17 03:23:33', '2024-02-17 03:25:46'),
(16, 'Company 10', NULL, NULL, 'company10@gmail.com', 'Company', 'Pending', NULL, NULL, '$2y$12$BUAjywfPuz07B2V.Mh7XbuXzob519aKWFvAfjlEd0B93d0n0jTrMq', NULL, '2024-02-17 03:33:52', '2024-02-17 03:33:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_pages`
--
ALTER TABLE `about_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_pages`
--
ALTER TABLE `blog_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_user_id_foreign` (`user_id`);

--
-- Indexes for table `contact_pages`
--
ALTER TABLE `contact_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_company_id_foreign` (`company_id`);

--
-- Indexes for table `jobs_pages`
--
ALTER TABLE `jobs_pages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `profile_education`
--
ALTER TABLE `profile_education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_education_user_id_foreign` (`user_id`);

--
-- Indexes for table `profile_experiences`
--
ALTER TABLE `profile_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_experiences_user_id_foreign` (`user_id`);

--
-- Indexes for table `profile_trainings`
--
ALTER TABLE `profile_trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_trainings_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_pages`
--
ALTER TABLE `about_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_pages`
--
ALTER TABLE `blog_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_pages`
--
ALTER TABLE `contact_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs_pages`
--
ALTER TABLE `jobs_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile_education`
--
ALTER TABLE `profile_education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile_experiences`
--
ALTER TABLE `profile_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile_trainings`
--
ALTER TABLE `profile_trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profile_education`
--
ALTER TABLE `profile_education`
  ADD CONSTRAINT `profile_education_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profile_experiences`
--
ALTER TABLE `profile_experiences`
  ADD CONSTRAINT `profile_experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profile_trainings`
--
ALTER TABLE `profile_trainings`
  ADD CONSTRAINT `profile_trainings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
