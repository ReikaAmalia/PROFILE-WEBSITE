-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Jul 2026 pada 02.42
-- Versi server: 8.0.30
-- Versi PHP: 8.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website-profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:2;', 1783065733),
('laravel-cache-da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1783065733;', 1783065733),
('laravel-cache-livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6', 'i:1;', 1783063181),
('laravel-cache-livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6:timer', 'i:1783063181;', 1783063181);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `image`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'kategori-komputer.jpg', 'Komputer / Laptop', 'komputer', '2026-06-30 22:16:10', '2026-06-30 22:16:10'),
(2, 'kategori-storage.jpg', 'Harddisk / Storage', 'storage', '2026-06-30 22:16:10', '2026-06-30 22:16:10'),
(3, 'kategori-software.jpg', 'Software / Lisensi', 'software', '2026-06-30 22:16:10', '2026-06-30 22:16:10'),
(4, 'kategori-aksesoris.jpg', 'Aksesoris', 'aksesoris', '2026-06-30 22:16:10', '2026-06-30 22:16:10'),
(5, 'categories/01KWGT5DYY90TRFHE879K9RS9G.tiff', 'Baju', 'Baju-Remaja', '2026-07-02 00:02:19', '2026-07-02 00:02:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_06_26_042920_create_categories_table', 1),
(5, '2026_06_26_072837_create_products_table', 1),
(6, '2026_07_02_000001_add_role_to_users_table', 2),
(7, '2026_07_02_000002_change_products_status_to_string', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `stock` int NOT NULL DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'baru',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `brand`, `price`, `stock`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Laptop Lenovo ThinkPad T14 Gen 3', 'laptop-lenovo-thinkpad-t14-gen-3', 'Lenovo', 9800000.00, 1, 'Laptop bisnis tangguh dengan build quality militer-grade, cocok untuk kerja kantoran maupun development ringan. Kondisi mulus, baterai masih sehat.\r\n\r\nCPU: Intel Core i5-1240P\r\nRAM: 16GB DDR4\r\nStorage: 512GB NVMe SSD\r\nDisplay: 14\" FHD IPS', 'products/b89cb6fb-d1f0-40ae-b9fb-2dd5214c4d2f.jpg', 'digital', '2026-06-30 22:16:10', '2026-07-03 00:53:43'),
(2, 1, 'PC Rakitan Ryzen 5 5600 + RTX 3060', 'pc-rakitan-ryzen-5-5600-rtx-3060', 'Custom', 12500000.00, 10, 'PC rakitan gaming/editing dengan performa tinggi, garansi toko 1 tahun, sudah termasuk Windows 11 original.\r\n\r\nCPU: AMD Ryzen 5 5600\r\nRAM: 16GB DDR4 3200MHz\r\nStorage: 1TB NVMe SSD\r\nGPU: RTX 3060 12GB', 'products/3c3a50c9-74be-4aaf-9c1b-66718520c8e3.jpg', 'baru', '2026-06-30 22:16:10', '2026-07-03 00:54:02'),
(3, 1, 'MacBook Air M1 2020 8/256GB', 'macbook-air-m1-2020-8256gb', 'Apple', 10900000.00, 1, 'MacBook Air M1 mulus, battery cycle rendah, cocok untuk desain dan produktivitas harian dengan efisiensi daya luar biasa.\r\n\r\nCPU: Apple M1\r\nRAM: 8GB Unified\r\nStorage: 256GB SSD\r\nDisplay: 13.3\" Retina', 'products/100da982-dcf4-4689-99fe-984305bff72d.jpg', 'bekas', '2026-06-30 22:16:10', '2026-07-03 00:54:28'),
(4, 2, 'SSD Samsung 970 EVO Plus 1TB NVMe', 'ssd-samsung-970-evo-plus-1tb-nvme', 'Samsung', 1350000.00, 10, 'SSD NVMe kecepatan tinggi untuk upgrade performa sistem secara signifikan, garansi resmi distributor 5 tahun.\r\n\r\nInterface: PCIe Gen3 NVMe\r\nCapacity: 1TB\r\nRead Speed: 3500 MB/s\r\nWrite Speed: 3300 MB/s', 'products/19b48966-15b3-47b3-bd35-950065a2749d.jpg', 'baru', '2026-06-30 22:16:10', '2026-07-03 00:54:58'),
(5, 2, 'Harddisk Seagate Barracuda 2TB', 'harddisk-seagate-barracuda-2tb', 'Seagate', 780000.00, 10, 'HDD internal 3.5\" untuk kebutuhan penyimpanan data besar, cocok untuk backup, NAS, maupun PC harian.\r\n\r\nInterface: SATA III\r\nCapacity: 2TB\r\nRPM: 7200 RPM\r\nCache: 256MB', 'products/d8f4e4c8-fed6-4508-ac76-fac27fb6da91.jpg', 'baru', '2026-06-30 22:16:10', '2026-07-03 00:55:17'),
(6, 2, 'SSD External WD My Passport 1TB', 'ssd-external-wd-my-passport-1tb', 'Western Digital', 990000.00, 10, 'Penyimpanan eksternal portable dengan desain ringkas, ideal untuk mobilitas tinggi dan backup data penting.\r\n\r\nInterface: USB 3.2 Type-C\r\nCapacity: 1TB\r\nWeight: 58 gram\r\nWarranty: 3 Tahun', 'products/0bc1d62a-a3bd-4f04-a425-181128abd09b.jpg', 'baru', '2026-06-30 22:16:10', '2026-07-03 00:58:54'),
(7, 3, 'Lisensi Windows 11 Pro Original', 'lisensi-windows-11-pro-original', 'Microsoft', 450000.00, 99, 'Lisensi digital resmi Windows 11 Pro, aktivasi otomatis dan permanen, dikirim langsung via email setelah pembayaran.\r\n\r\nType: Digital License\r\nActivation: Online/Otomatis\r\nValidity: Permanen\r\nSupport: Lifetime Update', 'products/de788655-11bc-42d1-97c8-d6d083e58531.jpg', 'digital', '2026-06-30 22:16:10', '2026-07-03 00:59:22'),
(8, 3, 'Microsoft Office 2021 Pro Plus', 'microsoft-office-2021-pro-plus', 'Microsoft', 380000.00, 99, 'Paket lengkap Word, Excel, PowerPoint, Outlook untuk 1 PC, lisensi digital resmi dan dapat diaktivasi langsung.\r\n\r\nType: Digital License\r\nApps: Word, Excel, PPT, Outlook\r\nDevices: 1 PC\r\nValidity: Lifetime', 'products/57aa67e0-000e-4847-b3d3-d439fff4d24a.jpg', 'digital', '2026-06-30 22:16:10', '2026-07-03 00:59:48'),
(9, 3, 'Antivirus Kaspersky Total Security', 'antivirus-kaspersky-total-security', 'Kaspersky', 265000.00, 99, 'Perlindungan menyeluruh dari malware, ransomware, dan ancaman online lainnya untuk 3 perangkat selama 1 tahun.\r\n\r\nType: Digital License\r\nDevices: 3 Perangkat\r\nDuration: 1 Tahun\r\nPlatform: Windows/Mac/Android', 'products/e961039c-75f6-465c-bfec-baf04b4d8946.jpg', 'digital', '2026-06-30 22:16:10', '2026-07-03 01:00:26'),
(10, 4, 'Keyboard Mechanical Logitech G413', 'keyboard-mechanical-logitech-g413', 'Logitech', 1150000.00, 10, 'Keyboard mekanikal dengan switch tactile yang responsif, build aluminium kokoh untuk gaming maupun produktivitas.\r\n\r\nSwitch: Romer-G Tactile\r\nConnection: USB Wired\r\nBacklight: White LED\r\nLayout: Full-size', 'products/333158ec-d3d3-4fb0-8f45-0dd89b75cdc9.jpg', 'baru', '2026-06-30 22:16:10', '2026-07-03 01:00:09'),
(11, 4, 'Mouse Wireless Logitech MX Master 3S', 'mouse-wireless-logitech-mx-master-3s', 'Logitech', 1450000.00, 10, 'Mouse premium dengan sensor presisi tinggi dan ergonomi terbaik di kelasnya, cocok untuk produktivitas profesional.\r\n\r\nSensor: 8000 DPI\r\nConnection: Bluetooth/USB\r\nBattery: 70 hari\r\nCompatibility: Windows/Mac', 'products/09c28b75-7d6c-442b-8b30-bf30c3b61812.jpg', 'baru', '2026-06-30 22:16:10', '2026-07-03 01:02:12'),
(12, 4, 'Headset Gaming HyperX Cloud II', 'headset-gaming-hyperx-cloud-ii', 'HyperX', 980000.00, 1, 'Headset gaming dengan suara surround 7.1 jernih, busa memory foam empuk untuk pemakaian jangka panjang.\r\n\r\nAudio: 7.1 Virtual Surround\r\nDriver: 53mm\r\nConnection: USB/3.5mm\r\nWeight: 320 gram', 'products/6a3a472a-edd8-42b3-90b9-365e977c18c4.jpg', 'bekas', '2026-06-30 22:16:10', '2026-07-03 01:01:15'),
(13, 4, 'Webcam Logitech C920 HD Pro', 'webcam-logitech-c920-hd-pro', 'Logitech', 850000.00, 10, 'Webcam Full HD 1080p dengan autofocus dan dual stereo mic, ideal untuk video conference dan streaming.\r\n\r\nResolution: 1080p Full HD\r\nFrame Rate: 30fps\r\nConnection: USB 2.0\r\nField of View: 78°', 'products/d380bc12-61b7-48bf-a141-8b991d28873a.jpg', 'baru', '2026-07-01 02:04:33', '2026-07-03 01:00:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('SQAvVOMRTvVFF6d67vGrjDj82W4GnzyecPV18ogm', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJBTlVyM1J5Qm5IcGN6UFduTTFEZnpGOHFIZ2ZpdVBaSmh1RklrRG1XIiwidXJsIjpbXSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL21hcmtldHBsYWNlIiwicm91dGUiOiJtYXJrZXRwbGFjZSJ9LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MiwicGFzc3dvcmRfaGFzaF93ZWIiOiJiZGVjNTY4MWFkYzU2MGNkODhmZTgwZjExYWY5ZjgzMDdmZWEzYzMyMDA1YTU2ZjM1Y2I3Mjk1Yzk0YTQxZmQ5IiwiZmlsYW1lbnQiOltdLCJ0YWJsZXMiOnsiOGZhYzZlYjFjZWMyNjgwM2IzZjdmYjQ0MGEyNzExMWJfY29sdW1ucyI6W3sidHlwZSI6ImNvbHVtbiIsIm5hbWUiOiJjYXRlZ29yeV9pZCIsImxhYmVsIjoiQ2F0ZWdvcnkgaWQiLCJpc0hpZGRlbiI6ZmFsc2UsImlzVG9nZ2xlZCI6dHJ1ZSwiaXNUb2dnbGVhYmxlIjpmYWxzZSwiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjpudWxsfSx7InR5cGUiOiJjb2x1bW4iLCJuYW1lIjoibmFtZSIsImxhYmVsIjoiTmFtZSIsImlzSGlkZGVuIjpmYWxzZSwiaXNUb2dnbGVkIjp0cnVlLCJpc1RvZ2dsZWFibGUiOmZhbHNlLCJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiOm51bGx9LHsidHlwZSI6ImNvbHVtbiIsIm5hbWUiOiJzbHVnIiwibGFiZWwiOiJTbHVnIiwiaXNIaWRkZW4iOmZhbHNlLCJpc1RvZ2dsZWQiOnRydWUsImlzVG9nZ2xlYWJsZSI6ZmFsc2UsImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI6bnVsbH0seyJ0eXBlIjoiY29sdW1uIiwibmFtZSI6ImJyYW5kIiwibGFiZWwiOiJCcmFuZCIsImlzSGlkZGVuIjpmYWxzZSwiaXNUb2dnbGVkIjp0cnVlLCJpc1RvZ2dsZWFibGUiOmZhbHNlLCJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiOm51bGx9LHsidHlwZSI6ImNvbHVtbiIsIm5hbWUiOiJwcmljZSIsImxhYmVsIjoiUHJpY2UiLCJpc0hpZGRlbiI6ZmFsc2UsImlzVG9nZ2xlZCI6dHJ1ZSwiaXNUb2dnbGVhYmxlIjpmYWxzZSwiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjpudWxsfSx7InR5cGUiOiJjb2x1bW4iLCJuYW1lIjoic3RvY2siLCJsYWJlbCI6IlN0b2NrIiwiaXNIaWRkZW4iOmZhbHNlLCJpc1RvZ2dsZWQiOnRydWUsImlzVG9nZ2xlYWJsZSI6ZmFsc2UsImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI6bnVsbH0seyJ0eXBlIjoiY29sdW1uIiwibmFtZSI6ImltYWdlIiwibGFiZWwiOiJJbWFnZSIsImlzSGlkZGVuIjpmYWxzZSwiaXNUb2dnbGVkIjp0cnVlLCJpc1RvZ2dsZWFibGUiOmZhbHNlLCJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiOm51bGx9LHsidHlwZSI6ImNvbHVtbiIsIm5hbWUiOiJzdGF0dXMiLCJsYWJlbCI6IlN0YXR1cyIsImlzSGlkZGVuIjpmYWxzZSwiaXNUb2dnbGVkIjp0cnVlLCJpc1RvZ2dsZWFibGUiOmZhbHNlLCJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiOm51bGx9LHsidHlwZSI6ImNvbHVtbiIsIm5hbWUiOiJjcmVhdGVkX2F0IiwibGFiZWwiOiJDcmVhdGVkIGF0IiwiaXNIaWRkZW4iOmZhbHNlLCJpc1RvZ2dsZWQiOmZhbHNlLCJpc1RvZ2dsZWFibGUiOnRydWUsImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI6dHJ1ZX0seyJ0eXBlIjoiY29sdW1uIiwibmFtZSI6InVwZGF0ZWRfYXQiLCJsYWJlbCI6IlVwZGF0ZWQgYXQiLCJpc0hpZGRlbiI6ZmFsc2UsImlzVG9nZ2xlZCI6ZmFsc2UsImlzVG9nZ2xlYWJsZSI6dHJ1ZSwiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0Ijp0cnVlfV0sIjhmYWM2ZWIxY2VjMjY4MDNiM2Y3ZmI0NDBhMjcxMTFiX3Blcl9wYWdlIjoiMjUifX0=', 1783065884);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', NULL, '$2y$12$xfeuBUlob.tRISMnbNR/0eMXkxaOlTC4cjFhysOhoOEayLBPg1nQG', 'user', NULL, '2026-06-30 22:16:10', '2026-07-02 01:10:22'),
(2, 'Admin User', 'admin@example.com', NULL, '$2y$12$co/0.S25e61gS2LvpBDX2OI.4NsOW7UExpyfsbiVo6ZIWg6lAyrZe', 'admin', NULL, '2026-07-01 21:39:42', '2026-07-02 01:10:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
