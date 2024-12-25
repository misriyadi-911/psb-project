<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class PageController extends Controller
{

    // protected $priceCards = [
    //     [
    //         'title' => "BarokahNet 12 Mbps",
    //         'desc' => 'Biaya Registrasi & Instalasi Rp.165.000',
    //         'price_arr' => [
    //             'rp' => "Rp.",
    //             'price' => "165.000",
    //             'month' => "/bln"
    //         ],
    //         'features' => [
    //             'Bandwidth 12 Mbps',
    //             'Download & Upload Simetris 1:1',
    //             'Tanpa Batas Kuota (FUP)',
    //             'Dukungan Teknis 24/7',
    //             'IP Dinamis',
    //             '100% Fiber Optic',
    //             'Harga Sudah Termasuk Pajak / PPN 11%'
    //         ],
    //         'delay' => 0
    //     ],
    //     [
    //         'title' => "BarokahNet 25 Mbps",
    //         'desc' => 'Biaya Registrasi & Instalasi Rp.250.000',
    //         'price_arr' => [
    //             'rp' => "Rp.",
    //             'price' => "250.000",
    //             'month' => "/bln"
    //         ],
    //         'features' => [
    //             'Bandwidth 12 Mbps',
    //             'Download & Upload Simetris 1:1',
    //             'Tanpa Batas Kuota (FUP)',
    //             'Dukungan Teknis 24/7',
    //             'IP Dinamis',
    //             '100% Fiber Optic',
    //             'Harga Sudah Termasuk Pajak / PPN 11%'
    //         ],
    //         'delay' => 200
    //     ],
    //     [
    //         'title' => "BarokahNet 30 Mbps",
    //         'desc' => 'Biaya Registrasi & Instalasi Rp.275.000',
    //         'price_arr' => [
    //             'rp' => "Rp.",
    //             'price' => "275.000",
    //             'month' => "/bln"
    //         ],
    //         'features' => [
    //             'Bandwidth 12 Mbps',
    //             'Download & Upload Simetris 1:1',
    //             'Tanpa Batas Kuota (FUP)',
    //             'Dukungan Teknis 24/7',
    //             'IP Dinamis',
    //             '100% Fiber Optic',
    //             'Harga Sudah Termasuk Pajak / PPN 11%'
    //         ],
    //         'delay' => 400
    //     ],
    //     [
    //         'title' => "BarokahNet 50 Mbps",
    //         'desc' => 'Biaya Registrasi & Instalasi Rp.300.000',
    //         'price_arr' => [
    //             'rp' => "Rp.",
    //             'price' => "300.000",
    //             'month' => "/bln"
    //         ],
    //         'features' => [
    //             'Bandwidth 12 Mbps',
    //             'Download & Upload Simetris 1:1',
    //             'Tanpa Batas Kuota (FUP)',
    //             'Dukungan Teknis 24/7',
    //             'IP Dinamis',
    //             '100% Fiber Optic',
    //             'Harga Sudah Termasuk Pajak / PPN 11%'
    //         ],
    //         'delay' => 0
    //     ],
    //     [
    //         'title' => "BarokahNet 75 Mbps",
    //         'desc' => 'Biaya Registrasi & Instalasi Rp.375.000',
    //         'price_arr' => [
    //             'rp' => "Rp.",
    //             'price' => "375.000",
    //             'month' => "/bln"
    //         ],
    //         'features' => [
    //             'Bandwidth 12 Mbps',
    //             'Download & Upload Simetris 1:1',
    //             'Tanpa Batas Kuota (FUP)',
    //             'Dukungan Teknis 24/7',
    //             'IP Dinamis',
    //             '100% Fiber Optic',
    //             'Harga Sudah Termasuk Pajak / PPN 11%'
    //         ],
    //         'delay' => 200
    //     ],
    //     [
    //         'title' => "BarokahNet 100 Mbps",
    //         'desc' => 'Biaya Registrasi & Instalasi Rp.400.000',
    //         'price_arr' => [
    //             'rp' => "Rp.",
    //             'price' => "400.000",
    //             'month' => "/bln"
    //         ],
    //         'features' => [
    //             'Bandwidth 12 Mbps',
    //             'Download & Upload Simetris 1:1',
    //             'Tanpa Batas Kuota (FUP)',
    //             'Dukungan Teknis 24/7',
    //             'IP Dinamis',
    //             '100% Fiber Optic',
    //             'Harga Sudah Termasuk Pajak / PPN 11%'
    //         ],
    //         'delay' => 400
    //     ],
    //     [
    //         'title' => "BarokahNet CORPORATE",
    //         'desc' => 'Biaya Registrasi & Instalasi Rp. Hubungi CS / Sales & Marketing BarokahNet',
    //         'price_arr' => [
    //             'rp' => "Rp.",
    //             'price' => "Hubungi CS",
    //             'month' => ""
    //         ],
    //         'features' => [
    //             'Dedicated Bandwidth',
    //             'Download & Upload Simetris 1:1',
    //             'Tanpa Batas Kuota (FUP)',
    //             'Dukungan Teknis 24/7',
    //             'IP Dinamis',
    //             '100% Fiber Optic',
    //             'Harga Sudah Termasuk Pajak / PPN 11%'
    //         ],
    //         'delay' => 0
    //     ],
    //     [
    //         'title' => "BarokahNet HOSPITALITY MS",
    //         'desc' => 'Biaya Registrasi & Instalasi Rp. Hubungi CS / Sales & Marketing BarokahNet',
    //         'price_arr' => [
    //             'rp' => "Rp.",
    //             'price' => "Hubungi CS",
    //             'month' => ""
    //         ],
    //         'features' => [
    //             'Gratis Biaya Konsultasi',
    //             'Download & Upload Simetris 1:1',
    //             'Tanpa Batas Kuota (FUP)',
    //             'Dukungan Teknis 24/7',
    //             'IP Dinamis',
    //             '100% Fiber Optic',
    //             'Harga Sudah Termasuk Pajak / PPN 11%'
    //         ],
    //         'delay' => 200
    //     ],
    //     [
    //         'title' => "BarokahNet Metro-E & V-SAT",
    //         'desc' => 'Biaya Registrasi & Instalasi Rp. Hubungi CS / Sales & Marketing BarokahNet',
    //         'price_arr' => [
    //             'rp' => "Rp.",
    //             'price' => "Hubungi CS",
    //             'month' => ""
    //         ],
    //         'features' => [
    //             'Gratis Biaya Konsultasi',
    //             'Download & Upload Simetris 1:1',
    //             'Tanpa Batas Kuota (FUP)',
    //             'Dukungan Teknis 24/7',
    //             'IP Dinamis',
    //             '100% Fiber Optic',
    //             'Harga Sudah Termasuk Pajak / PPN 11%'
    //         ],
    //         'delay' => 400
    //     ],
    // ];

    // protected $reviewCards = [
    //     [
    //         'text' => '"Layanan  yang ada dirumah kami sungguh sangat memuaskan, akses ke berbagai macam situs baik itu sosial media, streaming video dan bermain game sangat lancar. kecepatan download dan upload sesuai paket layanan, kami sekeluarga puas menggunakan layanan DHAHAPRIMA FIBER."',
    //         'name' => 'Muhammad Pratama Aditya',
    //         'job' => "Gamer's (Pelanggan Rumahan)"
    //     ],
    //     [
    //         'text' => '"Pengalaman yang sangat berkesan ketika berkonsultasi dengan tenaga ahli dari DHAHAPRIMA untuk memberikan solusi terkait permasalahan jaringan di kantor kami, informasi terkait kendala yang di jelaskan kepada kami sangat jelas, solusi serta penanganan sangat penuh perhitungan, cepat dan efektif."',
    //         'name' => 'Sindu Aryasatya',
    //         'job' => "STAFF IT (Pelanggan IT Consult & Service)"
    //     ],
    //     [
    //         'text' => '"Sebelumnya keluhan terkait internet yang tersedia sebagai fasilitas untuk tamu hotel kami sangat tinggi karena kendala teknis, Alhamdulillah sekarang kami menggunakan Layanan DHAHAPRIMA HOSPITALITY MANAGED SERVICE keluhan pelanggan menurun drastis bahkan nyaris tanpa keluhan."',
    //         'name' => 'Indra Prayoga',
    //         'job' => "GM HOTEL (Pelanggan Hospitality)"
    //     ],
    //     [
    //         'text' => '"Perusahaan kami bergerak dalam industri retail, kami mengandalkan stabilitas dan kecepatan akses layanan internet untuk menunjang kebutuhan telekomunikasi juga kebutuhan transfer data antar cabang dan kantor pusat, sejauh ini sangat baik pelayanan DHAHAPRIMA CORPORATE."',
    //         'name' => 'Evan Setiyawan',
    //         'job' => "CEO & FOUNDER (Pelanggan Corporate)"
    //     ],
    // ];

    // protected $serviceCards_1 = [
    //     [
    //         'icon' => 'assets/images/router-yellow.svg',
    //         'title' => 'BarokahNet',
    //         'desc' => ' Dengan teknologi 100% optical network akses
    //         internet dirumah anda secepat cahaya!
    //         Layanan yang BarokahNet distribuskan
    //         kerumah anda Tanpa Batasan Kuota (FUP) anda
    //         tidak perlu khawatir kecepatan akses menurun
    //         karena Batasan Kuota yang terlampaui,
    //         kestabilan di atas rata-rata dengan dukungan
    //         jaringan fully redundant network kami yang
    //         terhubung ke p enyedia layanan terkemuka di
    //         dunia seperti Google, META, CloudFlare, AWS,
    //         ZenLayer, ByteDance dan lain sebagainya
    //         menjadikan kegiatan digital di rumah anda
    //         menjadi lebih cepat, stabil, aman dan
    //         nyaman. Streaming Video tanpa Buffering,
    //         Akses dan Scroll Sosial Media tanpa
    //         hambatan, Meeting dan Belajar Online tanpa
    //         kendala, Belanja ataupun Transaksi secara
    //         Online dengan aman, bermain GAME tanpa
    //         gangguan atau jeda, anti lag dan anti jitter
    //         dengan latensi rendah. Berkegiatan digital
    //         di rumah tanpa kekhawatiran dengan DHAHA
    //         PRIMA FIBER.'
    //     ],
    //     [
    //         'icon' => 'assets/images/bank-yellow.svg',
    //         'title' => 'BarokahNet CORPORATE',
    //         'desc' => 'Layanan akses internet berdedikasi untuk
    //         kebutuhan perkantoran dan berbagai macam
    //         industri skala menengah keatas yang
    //         membutuhkan konektivitas eksklusif, dengan
    //         dedicated bandwidth atau committed
    //         bandwidth. BarokahNet CORPORATE menyediakan
    //         bandwidth dengan sumber daya khusus CIR
    //         (Committed Information Rate) 1:1 yang
    //         dialokasikan dan diperuntukkan hanya untuk 1
    //         pelanggan dengan kecepatan transmisi data
    //         yang tinggi, stabil konsisten tanpa
    //         fluktuasi serta garansi ketersediaan
    //         jaringan dengan SLA (Service Level
    //         Agreement) 99,8%. BarokahNet CORPORATE
    //         didistribusikan melalui minimal 2 jalur
    //         eksklusif (Redundant Link) pada backbone &
    //         last mile sehingga dalam waktu yang sangat
    //         singkat bilamana terjadi gangguan pada salah
    //         satu jalur distribusi layanan, dengan cepat
    //         akan digantikan oleh distribusi dari jalur
    //         lainnya agar layanan tetap tersedia secara
    //         optimal di sisi pengguna layanan BarokahNet
    //         CORPORATE.'
    //     ],
    //     [
    //         'icon' => 'assets/images/base-station-yellow.svg',
    //         'title' => 'BarokahNet HOSPITALITY',
    //         'desc' => 'Sebagai perusahaan yang memiliki produk
    //         unggulan Managed Service Provider
    //         Hospitality / Perhotelan, BarokahNet
    //         HOSPITALITY MANAGED SERVICE memberikan
    //         optimasi layanan akses internet, penyediaan
    //         serta pengelolaan sumber daya informasi dan
    //         teknologi baik berupa perangkat lunak dan
    //         perangkat keras (software & hardware),
    //         beserta sumber daya manusia yang dibutuhkan
    //         ataupun memberikan edukasi kepada sumber
    //         daya manusia yang sudah dimiliki oleh
    //         pengguna layanan. BarokahNet HOSPITALITY
    //         MANAGED SERVICE didukung oleh tenaga ahli
    //         bersertifikasi profesional dan menggunakan
    //         perangkat keras jaringan telekomunikasi
    //         internet kelas dunia seperti JUNIPER, CISCO,
    //         ARUBA, RUIJIE, UBIQUITY dan lain sebagainya
    //         untuk menjamin layanan yang kami berikan
    //         adalah layanan terbaik untuk tamu dan
    //         customer hotel pengguna layanan BarokahNet
    //         HOSPITALITY MANAGED SERVICE.'
    //     ],
    // ];


    public function index()
    {
        $data_berita = Berita::orderByDESC('tanggal_terbit')->limit(6)->get();
        return view("index", compact('data_berita'));
    }

    public function profile()
    {
        return view("pages.profile");
    }

    public function detail_berita($id)
    {
        $data_berita = Berita::find($id);
        $data_recent = Berita::orderByDESC('tanggal_terbit')->limit(3)->get();
        return view("pages.isi_berita", compact('data_berita', 'data_recent'));
    }
}
