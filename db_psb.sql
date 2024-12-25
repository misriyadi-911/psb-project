-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2024 pada 12.42
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `foto`, `judul`, `tanggal_terbit`, `penulis`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'WhatsApp Image 2024-05-21 at 09.25.07 (1).jpeg-1734115294.jpg', 'Peringatan Maulid Nabi Muhammad SAW', '2024-12-05', 'Sauki Annaim', 'Lenteng, Sumenep – Dalam rangka memperingati Maulid Nabi Muhammad SAW, Madrasah Aliyah Al-Ghazali di Desa Rombasan, Sumenep, mengadakan berbagai acara yang penuh makna. Acara yang berlangsung pada tanggal 8 Desember 2024 ini dihadiri oleh seluruh siswa, guru, dan staf madrasah.\r\n\r\nKegiatan dimulai dengan pembacaan sholawat bersama, yang dipimpin oleh siswa-siswi Madrasah Aliyah Al-Ghazali. Setelah itu, acara dilanjutkan dengan tausiyah yang disampaikan oleh Ustadz Ahmad Farhan, yang mengingatkan seluruh peserta untuk meneladani akhlak Nabi Muhammad SAW dalam kehidupan sehari-hari.\r\n\r\n\"Melalui peringatan Maulid Nabi, kita diingatkan untuk terus meningkatkan kecintaan kepada Nabi Muhammad SAW dan menjadikan beliau sebagai teladan dalam menjalani kehidupan,\" ujar Ustadz Ahmad dalam ceramahnya.\r\n\r\nAcara diakhiri dengan doa bersama agar madrasah senantiasa diberikan keberkahan dan kemajuan dalam mendidik generasi penerus bangsa.', '2024-12-07 10:43:42', '2024-12-13 11:41:34'),
(5, 'Goats painting by Els Stegeman.jpeg-1734115417.jpg', 'Kurban Bersama, Wujud Solidaritas dan Kepedulian Umat', '2024-12-14', 'Sauki Annaim', 'Desa Rombasan, 13 Dzulhijjah 1445 H – Dalam semangat mempererat tali silaturahmi dan menumbuhkan rasa kepedulian terhadap sesama, masyarakat Desa Rombasan menggelar kegiatan Kurban Bersama yang berlangsung dengan penuh khidmat pada hari kedua Idul Adha. Acara ini melibatkan berbagai elemen masyarakat, mulai dari tokoh agama, pemuda, hingga siswa Madrasah Aliyah Al-Ghazali.\r\n\r\nKegiatan ini bertujuan untuk membangkitkan rasa solidaritas antarwarga, sekaligus menanamkan nilai-nilai keikhlasan dan kepedulian sosial. Sebanyak 7 ekor sapi dan 15 ekor kambing dikurbankan, hasil partisipasi dari warga, para dermawan, dan kelompok arisan warga setempat.\r\n\r\nProses Pemotongan dan Pembagian\r\nProsesi pemotongan hewan kurban dimulai pukul 08.00 WIB setelah shalat Idul Adha. Daging kurban kemudian dikemas dalam 500 kantong dan dibagikan kepada warga yang membutuhkan, termasuk kaum dhuafa dan yatim piatu. Pembagian ini dilakukan dengan sistem kupon untuk memastikan distribusi yang adil.\r\n\r\nMenurut Kepala Desa Rombasan, kegiatan ini bukan hanya ritual keagamaan, tetapi juga bentuk nyata dari pelaksanaan ajaran Islam yang peduli terhadap kesejahteraan umat.\r\n\r\n“Kurban mengajarkan kita tentang pentingnya berbagi dan peduli terhadap sesama. Saya berharap tradisi ini terus dipertahankan dan menjadi inspirasi untuk generasi muda,” ujar beliau.\r\n\r\nPeran Pemuda dan Pelajar\r\nPelibatan generasi muda, khususnya siswa Madrasah Aliyah Al-Ghazali, menjadi salah satu sorotan utama. Mereka membantu dalam berbagai tahapan kegiatan, mulai dari persiapan hingga distribusi daging kurban. Hal ini menjadi salah satu upaya untuk menanamkan nilai tanggung jawab dan gotong-royong sejak dini.\r\n\r\n“Kami merasa bangga bisa ikut berpartisipasi. Ini pengalaman yang sangat berharga, karena kami belajar banyak tentang arti berbagi,” ungkap Ahmad, salah satu siswa MA Al-Ghazali.\r\n\r\nHarapan ke Depan\r\nDengan suksesnya kegiatan ini, masyarakat Desa Rombasan berharap tradisi kurban bersama dapat terus menjadi agenda tahunan yang mempererat ukhuwah Islamiyah. Selain itu, kegiatan ini diharapkan mampu menginspirasi desa-desa lain untuk melakukan hal serupa demi membangun harmoni sosial yang lebih baik.\r\n\r\n“Kurban bukan hanya sekadar ritual, tetapi juga bukti cinta kepada Allah dan kasih kepada sesama manusia.”', '2024-12-13 11:43:37', '2024-12-13 11:43:37'),
(6, 'download (1).png-1734115591.png', 'Haflah Akhirus Sanah: Meriahkan Penutupan Tahun Ajaran di Madrasah Aliyah Al-Ghazali', '2024-12-14', 'Sauki Annaim', 'Desa Rombasan, 12 Juni 2024 – Madrasah Aliyah Al-Ghazali kembali menggelar acara tahunan Haflah Akhirus Sanah, sebagai penutup kegiatan belajar mengajar tahun ajaran 2023/2024. Acara yang berlangsung di halaman madrasah ini dihadiri oleh ratusan tamu, termasuk orang tua siswa, tokoh masyarakat, dan para alumni.\r\n\r\nMengusung tema “Mencetak Generasi Berprestasi Berbasis Akhlakul Karimah”, kegiatan ini menjadi ajang apresiasi atas prestasi para siswa sekaligus momentum kebersamaan antara madrasah dan masyarakat sekitar.\r\n\r\nRangkaian Acara\r\nAcara dimulai pukul 08.00 WIB dengan pembacaan ayat suci Al-Qur\'an oleh salah satu siswa berprestasi, dilanjutkan dengan penampilan grup hadrah madrasah yang memukau para tamu undangan. Dalam sambutannya, Kepala Madrasah, Bapak H. Ahmad Rofi\'i, M.Ag., menyampaikan rasa syukur atas pencapaian siswa selama setahun terakhir.\r\n\r\n\"Haflah ini bukan hanya perayaan, tetapi juga refleksi atas usaha bersama antara siswa, guru, dan orang tua dalam mencetak generasi yang unggul baik di bidang akademik maupun spiritual,” ujarnya.\r\n\r\nPenghargaan dan Pentas Seni\r\nSalah satu momen yang paling dinantikan adalah pemberian penghargaan kepada siswa berprestasi, baik di bidang akademik, non-akademik, maupun hafalan Al-Qur\'an. Juara umum tahun ini diraih oleh Siti Fatimah, siswa kelas XII, yang berhasil menorehkan prestasi gemilang di tingkat kabupaten.\r\n\r\nSelain itu, berbagai pentas seni turut memeriahkan acara, seperti drama islami, tari tradisional, dan puisi bertema keagamaan. Penampilan spesial dari grup musik islami lokal menutup acara dengan meriah.\r\n\r\nPesan dan Harapan\r\nKetua Komite Madrasah, H. Abdul Wahid, dalam sambutannya menekankan pentingnya kolaborasi antara madrasah dan masyarakat dalam mendukung pendidikan.\r\n\r\n“Kami berharap Madrasah Aliyah Al-Ghazali terus menjadi pusat pendidikan yang melahirkan generasi cerdas dan berakhlak mulia,” ungkapnya.\r\n\r\nPara orang tua yang hadir juga mengapresiasi jalannya acara. Salah satu wali siswa, Ibu Nurhayati, mengaku bangga dengan penampilan anak-anak mereka.\r\n\r\n\"Acara seperti ini membuat kami semakin yakin bahwa pendidikan di madrasah ini benar-benar berkualitas,\" tuturnya.\r\n\r\nPenutupan\r\nHaflah Akhirus Sanah tahun ini tidak hanya menjadi ajang perayaan, tetapi juga menjadi pengingat akan pentingnya pendidikan berbasis nilai-nilai islami. Dengan semangat dan kebersamaan yang terjalin, Madrasah Aliyah Al-Ghazali siap menyongsong tahun ajaran baru dengan penuh optimisme.', '2024-12-13 11:46:31', '2024-12-13 11:46:31'),
(7, 'download.png-1734206355.png', 'Peringatan Tahun Baru Islam 1446 H di Pondok Pesantren Syekh Abdurrahman Berlangsung Khidmat', '2024-12-15', 'Sauki Annaim', 'Desa Ellak Daya, Sumenep – Madrasah Aliyah Al-Ghazali menggelar peringatan Tahun Baru Islam 1446 H dengan penuh khidmat dan semarak pada Kamis, 20 Juli 2024. Acara yang berlangsung di aula madrasah ini dihadiri oleh seluruh siswa, dewan guru, serta tokoh masyarakat setempat.\r\n\r\nMengangkat tema “Hijrah Menuju Generasi Berakhlak Mulia”, kegiatan tersebut diawali dengan pembacaan ayat-ayat suci Al-Qur\'an dan dilanjutkan dengan sambutan Kepala Madrasah, Bapak Ahmad Fauzi, M.Pd.I. Dalam sambutannya, beliau menyampaikan pentingnya mengambil hikmah dari peristiwa hijrah Nabi Muhammad SAW sebagai pedoman untuk memperbaiki diri dan memperkuat iman.\r\n\r\n\"Tahun Baru Islam adalah momentum untuk kita semua, terutama generasi muda, agar selalu berupaya hijrah dari kebiasaan buruk menuju perbaikan akhlak dan prestasi,\" ujar beliau.\r\n\r\nPuncak acara diisi dengan tausiyah dari Ustadz H. Abdul Karim, seorang pendakwah kondang dari Kecamatan Pragaan. Dalam ceramahnya, Ustadz Karim mengajak para peserta untuk menjadikan Tahun Baru Islam sebagai waktu untuk introspeksi diri dan meningkatkan keimanan.\r\n\r\nAcara ini juga dimeriahkan dengan berbagai kegiatan seperti lomba membaca puisi Islami, pawai obor, dan bazar makanan khas tradisional yang melibatkan siswa dari berbagai kelas. Pawai obor yang dilakukan pada malam sebelumnya menjadi daya tarik tersendiri, di mana ratusan siswa berjalan beriringan dengan membawa obor, menciptakan suasana yang indah dan religius di Desa Rombasan.\r\n\r\nSalah satu peserta, Siti Nur Azizah, siswa kelas XI IPA, mengaku senang dapat mengikuti acara tersebut.\r\n\"Kegiatan ini sangat bermanfaat. Selain menambah wawasan tentang Islam, saya juga lebih memahami makna hijrah,\" tuturnya.\r\n\r\nPeringatan Tahun Baru Islam di Madrasah Aliyah Al-Ghazali ditutup dengan doa bersama untuk keberkahan dan kedamaian, baik untuk keluarga besar madrasah maupun masyarakat sekitar. Diharapkan, kegiatan ini mampu menumbuhkan semangat kebersamaan dan menjadikan para siswa lebih memahami nilai-nilai Islam dalam kehidupan sehari-hari.', '2024-12-14 12:59:15', '2024-12-14 12:59:15'),
(8, 'WhatsApp Image 2024-05-26 at 12.03.50_67b50c98.jpg-1734206527.jpg', 'Semarak Peringatan HUT Ke-79 Kemerdekaan RI di Pondok Pesantren Syekh Abdurrahman', '2024-12-15', 'Sauki Annaim', 'Desa Ellak Daya, Sumenep – Pondok Pesantren Syekh Abdurrahman memperingati Hari Ulang Tahun Kemerdekaan Republik Indonesia ke-79 dengan penuh semangat dan khidmat pada Sabtu, 17 Agustus 2024. Acara ini diikuti oleh seluruh santri, para pengasuh pondok pesantren, dan masyarakat sekitar.\r\n\r\nKegiatan diawali dengan upacara bendera di halaman pesantren yang dipimpin langsung oleh Pengasuh Pondok, KH. Ahmad Muzakki, Lc. Dalam amanatnya, beliau menekankan pentingnya menjaga semangat kebangsaan dan menjadikan momentum kemerdekaan sebagai motivasi untuk terus belajar dan berkontribusi bagi bangsa.\r\n\r\n\"Santri tidak hanya harus taat kepada agama, tetapi juga harus berperan aktif dalam menjaga dan membangun negara ini. Itulah makna hubbul wathan minal iman,” tegas beliau dalam pidatonya.\r\n\r\nSetelah upacara, acara dilanjutkan dengan berbagai perlombaan khas 17 Agustus, seperti lomba tarik tambang, balap karung, dan panjat pinang. Para santri turut serta dengan antusias, membuat suasana penuh gelak tawa dan kebersamaan.\r\n\r\nSalah satu perlombaan yang paling menarik perhatian adalah lomba pidato kemerdekaan. Dalam lomba ini, para santri diberikan kesempatan untuk menyampaikan pesan-pesan nasionalisme dan pentingnya perjuangan para pahlawan. Juara pertama diraih oleh Ahmad Fauzan, santri kelas XI, yang menyampaikan pidato bertema “Peran Santri dalam Mengisi Kemerdekaan”.\r\n\r\nSelain perlombaan, malam harinya digelar acara tahlil dan doa bersama untuk para pahlawan yang telah gugur dalam perjuangan kemerdekaan. Acara tersebut berlangsung khidmat di masjid pondok pesantren dan diakhiri dengan renungan malam yang dipimpin oleh KH. Ahmad Muzakki.\r\n\r\nSiti Hajar, salah satu santri, mengungkapkan rasa syukurnya dapat berpartisipasi dalam acara ini.\r\n\"Peringatan 17 Agustus di pesantren sangat berkesan. Selain bermain lomba, kami juga diingatkan untuk terus menghargai perjuangan para pahlawan,\" ujarnya.\r\n\r\nKegiatan di Pondok Pesantren Syekh Abdurrahman ini menunjukkan bahwa semangat kemerdekaan tidak hanya dirayakan dengan suka cita, tetapi juga dengan refleksi mendalam untuk meningkatkan cinta tanah air dan semangat keagamaan.\r\n\r\nDengan semangat kebangsaan yang terus berkobar, Pondok Pesantren Syekh Abdurrahman berharap santri-santrinya mampu menjadi generasi penerus yang tidak hanya cinta agama, tetapi juga cinta tanah air, sebagaimana yang diajarkan oleh para ulama dan pahlawan bangsa.', '2024-12-14 13:02:07', '2024-12-14 13:02:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto_guru` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tmt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `foto_guru`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tmt`, `created_at`, `updated_at`) VALUES
(1, 'pngegg.png-1733678798.png', 'Sauki Annaim', 'Sumenep', '2024-12-08', 'Ikhwan', 'Sumenep', '2022', '2024-12-08 08:47:42', '2024-12-08 10:26:38'),
(3, 'WhatsApp Image 2024-05-16 at 21.51.43_2e07293c.jpg-1733677249.jpg', 'Resti', 'Pamekasan', '1999-07-07', 'Akhwat', 'Pademawu, Pamekasan', '2021', '2024-12-08 09:37:38', '2024-12-08 10:00:49'),
(5, '_88a17964-8901-449c-94cc-a54737645889.jfif-1733678835.jpg', 'Fulan', 'Sumenep', '2024-12-07', 'Ikhwan', 'Sumenep', '2017', '2024-12-08 10:22:13', '2024-12-08 10:27:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tingkat` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `tingkat`, `kelas`, `created_at`, `updated_at`) VALUES
(2, '1', 'VII', '2024-12-13 08:38:01', '2024-12-13 08:38:01'),
(3, '1', 'VIII', '2024-12-13 08:42:16', '2024-12-13 08:42:16'),
(4, '1', 'IX', '2024-12-13 08:42:23', '2024-12-13 08:42:23'),
(5, '2', 'VII', '2024-12-13 08:42:31', '2024-12-13 08:42:31'),
(6, '2', 'VIII', '2024-12-13 08:42:39', '2024-12-13 08:42:39'),
(7, '2', 'IX', '2024-12-13 08:42:48', '2024-12-13 08:42:48'),
(8, '3', 'X', '2024-12-13 08:42:56', '2024-12-13 08:42:56'),
(9, '3', 'XI', '2024-12-13 08:43:03', '2024-12-13 08:43:03'),
(10, '3', 'XII', '2024-12-13 08:43:11', '2024-12-13 08:58:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_12_07_011457_create_guru_table', 2),
(5, '2024_12_07_012026_create_berita_table', 3),
(6, '2024_12_08_152136_drop_table_guru', 4),
(7, '2024_12_08_152353_drop_table_guru', 5),
(8, '2024_12_08_152506_create_guru_table', 6),
(9, '2024_12_08_154557_drop_table_guru', 7),
(10, '2024_12_08_154648_create_guru_table', 8),
(11, '2024_12_08_174349_create_siswa_table', 9),
(12, '2024_12_08_175307_create_sekolah_asal_table', 9),
(13, '2024_12_08_180311_create_orang_tua_table', 9),
(14, '2024_12_09_130514_drop_table_siswa', 10),
(15, '2024_12_09_131050_create_siswa_table', 11),
(16, '2024_12_09_131349_drop_table_siswa', 12),
(17, '2024_12_09_131421_create_siswa_table', 13),
(18, '2024_12_09_155712_create_sekolah_asal_table', 14),
(19, '2024_12_09_155723_create_orang_tua_table', 14),
(20, '2024_12_13_145051_create_kelas_table', 15),
(21, '2024_12_13_145604_drop_table_siswa', 15),
(22, '2024_12_13_145833_create_siswa_table', 16),
(23, '2024_12_13_161319_drop_table_siswa', 17),
(24, '2024_12_13_161355_create_siswa_table', 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua`
--

CREATE TABLE `orang_tua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `tempat_lahir_ayah` varchar(255) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `desa_ayah` varchar(255) NOT NULL,
  `kecamatan_ayah` varchar(255) NOT NULL,
  `kabupaten_ayah` varchar(255) NOT NULL,
  `nohp_ayah` varchar(255) NOT NULL,
  `pendidikan_ayah` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `penghasilan_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `tempat_lahir_ibu` varchar(255) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `desa_ibu` varchar(255) NOT NULL,
  `kecamatan_ibu` varchar(255) NOT NULL,
  `kabupaten_ibu` varchar(255) NOT NULL,
  `nohp_ibu` varchar(255) NOT NULL,
  `pendidikan_ibu` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `penghasilan_ibu` varchar(255) NOT NULL,
  `nama_wali` varchar(255) NOT NULL,
  `tempat_lahir_wali` varchar(255) NOT NULL,
  `tanggal_lahir_wali` date NOT NULL,
  `desa_wali` varchar(255) NOT NULL,
  `kecamatan_wali` varchar(255) NOT NULL,
  `kabupaten_wali` varchar(255) NOT NULL,
  `nohp_wali` varchar(255) NOT NULL,
  `pendidikan_wali` varchar(255) NOT NULL,
  `pekerjaan_wali` varchar(255) NOT NULL,
  `penghasilan_wali` varchar(255) NOT NULL,
  `hubungan_wali` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orang_tua`
--

INSERT INTO `orang_tua` (`id`, `id_siswa`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `desa_ayah`, `kecamatan_ayah`, `kabupaten_ayah`, `nohp_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `desa_ibu`, `kecamatan_ibu`, `kabupaten_ibu`, `nohp_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nama_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `desa_wali`, `kecamatan_wali`, `kabupaten_wali`, `nohp_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `hubungan_wali`, `created_at`, `updated_at`) VALUES
(2, '2', 'Ismail bin Mail', 'Sumenep', '2024-12-01', 'Lenteng', 'Lenteng', 'Sumenep', '089776432872', 'S1', 'PNS', '2.000.000 - 4.000.000', 'Fatimah', 'Sumenep', '2024-12-02', 'Lenteng', 'Lenteng', 'Sumenep', '0876538632873', 'S1', 'Guru', '< 1.000.000', 'Ismail bin Mail', 'Sumenep', '2024-12-01', 'Lenteng', 'Lenteng', 'Sumenep', '089776432872', 'S1', 'PNS', '2.000.000 - 4.000.000', 'orang tua', '2024-12-13 10:16:19', '2024-12-13 10:16:19'),
(3, '3', 'ABD GHANI', 'Sumenep', '2024-12-02', 'Lenteng', 'Lenteng', 'Sumenep', '089776432872', 'S1', 'PNS', '2.000.000 - 4.000.000', 'Umamiyatul Qudsi', 'Sumenep', '2024-12-01', 'Lenteng', 'Lenteng', 'Sumenep', '0876538632873', 'S1', 'Guru', '1.000.000 - 2.000.000', 'ABD GHANI', 'Sumenep', '2024-12-02', 'Lenteng', 'Lenteng', 'Sumenep', '089776432872', 'S1', 'PNS', '2.000.000 - 4.000.000', 'orang tua', '2024-12-13 10:39:00', '2024-12-13 10:39:00'),
(5, '5', 'Ali Abidin', 'Sumenep', '2024-12-01', 'Larangan', 'Larangan', 'Sumenep', '089776432872', 'S2', 'PNS', '4.000.000 - 6.000.000', 'Umamiyatul Qudsi', 'Sumenep', '2024-12-02', 'Larangan', 'Larangan', 'Sumenep', '0876538632873', 'S1', 'PNS', '2.000.000 - 4.000.000', 'Ali Abidin', 'Sumenep', '2024-12-01', 'Larangan', 'Larangan', 'Sumenep', '089776432872', 'S2', 'PNS', '4.000.000 - 6.000.000', 'orang tua', '2024-12-13 11:02:27', '2024-12-13 11:02:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah_asal`
--

CREATE TABLE `sekolah_asal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` varchar(255) NOT NULL,
  `tahun_lulus` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `telepon_sekolah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sekolah_asal`
--

INSERT INTO `sekolah_asal` (`id`, `id_siswa`, `tahun_lulus`, `nama_sekolah`, `desa`, `kecamatan`, `kabupaten`, `telepon_sekolah`, `created_at`, `updated_at`) VALUES
(2, '2', '2024', 'MTs Al-Baroya', 'Lenteng', 'Lenteng', 'Sumenep', 'Sumenep', '2024-12-13 10:16:19', '2024-12-13 10:16:19'),
(3, '3', '2024', 'MTs Al-Baroya', 'Lenteng', 'Lenteng', 'Sumenep', 'Sumenep', '2024-12-13 10:39:00', '2024-12-13 10:39:00'),
(5, '5', '2024', 'MTs Al-Baroya', 'Pakong', 'Pakong', 'Sumenep', 'Sumenep', '2024-12-13 11:02:27', '2024-12-13 11:02:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('rBOyV7qreRgz6iqVmHFHvYnW1732Dw5d6GncRNIc', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNk9vVmZwQ2FZamhTcHNYeWlXazA0ZkNNOGI2bzZSUDZGdHZoTmVUUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9iZXJpdGEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1734262792);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tingkat` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `foto_santri` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `berat_badan` varchar(255) NOT NULL,
  `tinggi_badan` varchar(255) NOT NULL,
  `anak_ke` varchar(255) NOT NULL,
  `jumlah_saudara` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `kartu_keluarga` varchar(255) NOT NULL,
  `akte_kelahiran` varchar(255) NOT NULL,
  `raport` varchar(255) NOT NULL,
  `keahlian` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `tingkat`, `kelas`, `foto_santri`, `nama`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `berat_badan`, `tinggi_badan`, `anak_ke`, `jumlah_saudara`, `desa`, `kecamatan`, `kabupaten`, `nomor_hp`, `kartu_keluarga`, `akte_kelahiran`, `raport`, `keahlian`, `created_at`, `updated_at`) VALUES
(2, '1', 'IX', 'Boboiboy Thorn.jpg-1734110350.jpg', 'Mardiyeh', '0057677205', 'Sumenep', '2024-12-14', 'Akhwat', '67', '167', '1', '3', 'Lenteng', 'Lenteng', 'Sumenep', '082334651721', '1734110179-HUT RI 79 - Template - Banner Horizontal 2x1.pdf', '1734110179-HUT RI 79 - Template - Banner Horizontal 2x1.pdf', '1734110179-HUT RI 79 - Elemen Grafis 2x1.pdf', 'Lari 5000 Meter', '2024-12-13 10:16:19', '2024-12-13 10:19:10'),
(3, '2', 'VIII', '1734111540-Yessica Tamara.jpeg', 'Sauki', '0069683437', 'Sumenep', '2024-12-14', 'Ikhwan', '70', '170', '2', '2', 'Lenteng', 'Lenteng', 'Sumenep', '082334651721', '1734111540-HUT RI 79 - Elemen Grafis 2x1.pdf', '1734111540-HUT RI 79 - Elemen Grafis 2x1.pdf', '1734111540-HUT RI 79 - Elemen Grafis 2x1.pdf', 'mengaji', '2024-12-13 10:39:00', '2024-12-13 10:46:18'),
(5, '3', 'X', '1734112947-download.jpeg', 'Boy Ernes', '0044279263', 'Sumenep', '2024-12-14', 'Ikhwan', '78', '187', '1', '2', 'Pakong', 'Pakong', 'Sumenep', '082334651721', '1734112947-HUT RI 79 - Elemen Grafis 2x1.pdf', '1734112947-HUT RI 79 - Elemen Grafis 2x1.pdf', '1734112947-HUT RI 79 - Elemen Grafis 2x1.pdf', 'Lari 5000 Meter', '2024-12-13 11:02:27', '2024-12-13 11:06:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Sauki', 'saukilenteng@gmail.com', NULL, '$2y$12$lXzwcuwQIIxMZuC/.yiqze0GPOG0QkFdvBQz0CkngL2De0BU3qREi', NULL, '2024-12-14 11:00:28', '2024-12-14 11:00:28'),
(3, 'Sauki Annaim', 'saukialvarolenteng@gmail.com', NULL, '$2y$12$3g3fr.hLWG9OtOTu2an9iuQU4wQ5plgkhWLWXZgE8CLWPhfpYfGIy', NULL, '2024-12-14 11:01:42', '2024-12-14 11:51:14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sekolah_asal`
--
ALTER TABLE `sekolah_asal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sekolah_asal`
--
ALTER TABLE `sekolah_asal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
