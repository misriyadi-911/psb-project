<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Profil | Ponpes Syekh Abdurrohman</title>

    <title>Profile</title>

    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo_bulat.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    {{-- Loader --}}
    <div id="loader-wrapper"
        class="fixed z-[200] flex items-center justify-center w-screen h-screen  bg-white transition-all ease-in-out duration-500">
        <div class="loading-wave">
            <div class="loading-bar"></div>
            <div class="loading-bar"></div>
            <div class="loading-bar"></div>
            <div class="loading-bar"></div>
        </div>
    </div>

    <nav class="z-[100] h-[100px] w-full bg-green-700 transition-all duration-500 ">
        <div class="container relative flex flex-wrap items-center h-full mx-auto md:px-16">
            <div class="static h-full px-5">
                <img src="{{ asset('img/logo_landscape.png') }}" alt="logo"
                    class="object-contain w-32 h-full md:w-52" />
            </div>
            <ul
                class="absolute gap-y-7 px-5 flex flex-col flex-wrap py-6 bg-green-700 w-full md:ml-auto md:w-[60%] md:static md:flex-row md:items-center md:justify-end md:gap-7 md:flex menu z-[-1] md:z-10">
                <li class="menu-item">
                    <a href="/#beranda"
                        class="relative font-medium text-default-border-color after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full text-color:white">
                        Beranda
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#profile"
                        class="after:transition-all relative font-medium text-default-border-color after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-full after:rounded-md after:bg-primary after:duration-300 after:content-[''] hover:after:w-full">
                        Profile
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/#berita"
                        class="relative font-medium text-default-border-color after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        Berita
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/#kontak"
                        class="relative font-medium text-default-border-color after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        Kontak
                    </a>
                </li>
            </ul>
            <div class="grid w-8 h-8 ml-auto mr-5 place-items-center md:hidden" onclick="toggleNavbar(event)">
                <i class="ri-menu-line ri-xl"></i>
            </div>
        </div>
    </nav>
<div class="relative">
    <div class="bg-white p-2 rounded-xl shadow-lg">
        <img src="{{ asset('assets/images/gunung.jpg') }}"
             alt="Pesantren Background"
             class="w-full h-[600px] object-cover rounded-lg">
        <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center">
            <p class="text-5xl font-bold text-white">Pondok Pesantren Rabah</p>
        </div>
</div>


            <div class="relative z-10 pb-20 pt-28">

                <div class="absolute bottom-[-150px] left-[-150px] ">
                    <div class="rounded-full w-[300px] h-[300px] bg-primary-300  grid place-items-center ">
                        <div class="rounded-full w-[200px] h-[200px] bg-primary-500 grid place-items-center z-10">
                            <div class="rounded-full w-[100px] h-[100px] bg-primary"></div>
                        </div>
                    </div>
                </div>

                <div
                    class="absolute right-[-50px] md:right-[-150px] top-[130px] md:top-[-50px] lg:right-0 lg:top-[-80px]">
                    <img src="{{ asset('assets/images/papper-plane.svg') }}" alt="image"
                        class="w-[300px] h-[300px] md:w-[400px] md:h-[400px] lg:w-[500px] lg:h-[450px]">
                </div>

                <div class="card-aboutme md:w-[90%] ml-auto mt-[160px] md:mt-16 bg-white relative z-50 shadow-sm cursor-pointer"
                data-aos="fade-up">
                <div class="max-w-[300px] w-full">
                    <p class="mt-3 ml-5 text-4xl font-semibold md:text-5xl text-primary">Profile </p>
                    <span class="block w-full h-[14px] mt-5 bg-primary"></span>
                </div>
                <div class="p-8 border-b-[1px] header border-default-border-color">
                    <div class="flex gap-5">
                        <div class="w-6 h-6 bg-red-500 rounded-full"></div>
                        <div class="w-6 h-6 bg-yellow-500 rounded-full"></div>
                        <div class="w-6 h-6 bg-green-600 rounded-full"></div>
                    </div>
                </div>
                <div class="flex flex-col gap-0 px-8 body">
                    <div class="text-[48px] text-primary"></div>
                    <p class="m-0 text-xs leading-6 md:leading-8 md:text-sm text-custom-text-card">isi</p>
                    <div class="flex items-center justify-end my-2 ">
                        {{-- <a href="{{ url('about') }}"
                            class="m-0 text-base font-medium text-primary hover:opacity-80 h-max">Read More <i
                                class="text-base ri-arrow-right-line"></i> </a> --}}
                        <p class="text-[48px] text-primary h-max">❞</p>
                    </div>
                </div>
            </div>


                <div class="card-aboutme md:w-[90%] ml-auto mt-[160px] md:mt-16 bg-white relative z-50 shadow-sm cursor-pointer"
                    data-aos="fade-up">
                    <div class="max-w-[300px] w-full">
                        <p class="mt-3 ml-5 text-4xl font-semibold md:text-5xl text-primary">Visi Misi</p>
                        <span class="block w-full h-[14px] mt-5 bg-primary"></span>
                    </div>
                    <div class="p-8 border-b-[1px] header border-default-border-color">
                        <div class="flex gap-5">
                            <div class="w-6 h-6 bg-red-500 rounded-full"></div>
                            <div class="w-6 h-6 bg-yellow-500 rounded-full"></div>
                            <div class="w-6 h-6 bg-green-600 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-0 px-8 body">
                        <div class="text-[48px] text-primary"></div>
                        <p class="m-0 text-xs leading-6 md:leading-8 md:text-sm text-custom-text-card">“ <br><b>Visi</b><br>Terbentuknya Insan yang beriman dan bertaqwa Kepada Allah, Memiliki Akhlaqul Karimah , berwawasan Keilmuan yang luas, profesional, berintegritas, Visioner serta berguna bagi agama, masyarakat, bangsa dan negara. <br><b>Misi</b><br>-Penanaman Aqidah yang benar <br>- Penanaman dan pembinaan Akhlaqul karimah <br>- Pendidikan Keilmuan dan keorganisasian <br>- Pembinaan dan pengembangan minat dan bakat <br></p>
                        <div class="flex items-center justify-end my-2 ">
                            {{-- <a href="{{ url('about') }}"
                                class="m-0 text-base font-medium text-primary hover:opacity-80 h-max">Read More <i
                                    class="text-base ri-arrow-right-line"></i> </a> --}}
                            <p class="text-[48px] text-primary h-max">
                        </div>
                    </div>
                </div>



                <div class="card-aboutme md:w-[90%] ml-auto mt-[160px] md:mt-16 bg-white relative z-50 shadow-sm cursor-pointer"
                    data-aos="fade-up">
                    <div class="max-w-[300px] w-full">
                        <p class="mt-3 ml-5 text-4xl font-semibold md:text-5xl text-primary">Sejarah</p>
                        <span class="block w-full h-[14px] mt-5 bg-primary"></span>
                    </div>
                    <div class="p-8 border-b-[1px] header border-default-border-color">
                        <div class="flex gap-5">
                            <div class="w-6 h-6 bg-red-500 rounded-full"></div>
                            <div class="w-6 h-6 bg-yellow-500 rounded-full"></div>
                            <div class="w-6 h-6 bg-green-600 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-0 px-8 body">
                        <div class="text-[48px] text-primary">❝</div>
                        <p class="m-0 text-xs leading-6 md:leading-8 md:text-sm text-custom-text-card">“Pondok Pesantren Rabah berdiri sekitar tahun 1500 Masehi atau sekitar abad ke 15. Masa ini berdasarkan pada peristiwa besar di Kerajaan Pamelingan yang diperintah oleh Rato Ronggosukowati. Dimasa ini menjadi tonggak komunikasi Kiai Abdurrahman dengan Rato Ronggosukowati terkait dengan kondisi alam kemarau panjang Kerajaan Pamelingan.
                            <br> Keberadaan Kiai Abdurrahman atau Kiai Agung Rabah di alas atau hutan Rabah menjadi cikal bakal berdirinya Pondok Pesantren di Rabah. Kemasyhuran akan kewalian dan kealiman beliau menjadi magnet bagi orang-orang di zamannya untuk belajar dan nyantri pada beliau.
                            <br> Kiai Abdurrahman yang kemudian dikenal sebagai Kiai Agung Rabah berasal dari wilayah Timur Pulau Madura. Tepatnya dari daerah Sindir Lenteng Kabupaten Sumenep. Beliau keturunan ulama besar sekaligus bangsawan Sumenep yaitu Kiai Agung Rahwan.
                            <br> Kiai Abdurrahman berguru kepada Kiai Imam Pandian Sumenep, Kiai Khotib Sendang Sumenep dan Terakhir kepada Kiai Qabul yang dikenal dengan nama  Kiai Aji Gunung Sampang.  Atas perintah Kiai Aji Gunung, Kiai Abdurrahman Kemudian Bertapa di Alas atau Hutan didaerah tenggara atau Timur Laut wilayah Negeri Pamelingan yang saat ini dikenal dengan nama Rabah.
                            <br> Pondok Pesantren Rabah berkembang pesat dizamannya, terbukti banyak santri yang mondok di pesantren Rabah, dan alumninya menjadi orang-orang besar di zamannya. Sebutlah Kiai Abdul Qidam Arsojih Larangan,
                            Kiai Adil,  Kiai Abdullah atau Bindara Bungsoh Batu Ampar Timur Sumenep, Kiai Agung Bersila Tampojung Waru, Kiai Faqih Lembung Sumenep.
                            <br> Setelah Syekh Abdurrahman atau Kiai Agung Rabah Wafat, beliau di semayamkan dimaqbarah utama Rabah bersama istri beliau yaitu Kanjeng Nyai Agung Rabah atau Dewi Kebhun putri dari Kiai Modin Teja Pamekasan. Karena tidak memiliki keturunan, maka Penerus pengganti beliau di berikan kepada anak angkat, yang sekaligus keponakan beliau yaitu Kiai Adil.
                            <br> Kiai Adil dan Kiai Abdullah adalah putra dari Kiai Abdul Qidam Arsojih Larangan dari perkawinannya dengan Dewi Asri, Adik Kandung Kiai Agung Rabah. Kiai Adil sebagai Kiai Rabah, meneruskan, mengasuh dan membina para santri di Pondok Pesantren Rabah.  Sedang Kiai Abdullah, oleh Kiai Agung Rabah disuruh menempati wilayah  Batu Ampar Timur Sumenep. Yang putranya yaitu Bindara Saot menjadi Raja kerajaan  Sumenep 7 turun berturut-turut atas ijazah dari Kiai Agung Rabah.
                            <br> Kiai Adil yang juga disebut Kiai Rabah 2, turun temurun hingga saat ini meneruskan membina dan mengasuh Pondok Pesantren Rabah. Maqbarah utara Rabah menjadi tempat bersemayam terakhir beliau bersama Kiai Rabah lainnya, yaitu Kiai Arham Kiai Rabah ke 3, Kiai Isnad Kiai Rabah ke 4, Kiai Hosen Kiai Rabah ke 5, Kiai Sama’un Kiai Rabah ke 6. Sedangkan Kiai Abdul Wahhab Kiai Rabah ke 7 dan Kiai Ahmad Madani Kiai Rabah ke 8, maqbarahnya berada di komplek maqbarah utama berdekatan dengan Kiai Agung Rabah.
                            <br> Pada Tahun 1956, dimasa Kiai Abdul Wahhab Kiai Rabah ke 7, Pondok Pesantren Rabah berubah nama menjadi Pondok Pesantren Darun Na’im dan merintis lembaga pendidikan setingkat diniyah yaitu Madrasah Diniyah Barrul Ulum. Hal ini berlangsung hingga  diganti putra beliau sebagai Kiai Rabah ke 8 yaitu Kiai Ahmad Madani.
                            <br> Setelah  Kiai Ahmad Madani Wafat pada tahun 2014, ke 3 Putra beliau yaitu Bindara Fathorrahman, Bindara Abdul Hamid, dan Bindara  Imam Raziqi Madani bersama sama meneruskan dan membina Pondok Pesantren Darun Na’im.
                            <br> Hingga pada tanggal 11 Agustus 2015 atau tanggal 25 Syawal 1436 Hijriyah, berdasarkan rapat keluarga diputuskan mengganti nama Pondok Pesantren Syekh Abdurrahman Rabah. “</p>
                        <div class="flex items-center justify-end my-2 ">
                            {{-- <a href="{{ url('about') }}"
                                class="m-0 text-base font-medium text-primary hover:opacity-80 h-max">Read More <i
                                    class="text-base ri-arrow-right-line"></i> </a> --}}
                            <p class="text-[48px] text-primary h-max">❞</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.footer')

    <div class="fixed z-50 flex flex-col chatwa-container bottom-3 right-3">
        <div
            class="shadow chatwa-wrapper transition-all duration-500 max-w-[350px] bg-white p-5 rounded flex-col gap-y-4">
            <div class="mb-2 text-xs chat-header">
                <p>Silahkan klik nomer kami di bawah untuk memulai percakapan di <span class="font-bold">Whatsapp</span>
                </p>
            </div>
            <div class="flex flex-col chat-body gap-y-3">
                <a href="https://wa.me/+62817770044" target="_blank"
                    class="flex items-center gap-5 p-3 bg-semi-sky-blue">
                    <img src="{{ asset('assets/images/fav-icon.png') }}" alt="icon" class="w-8 h-8">
                    <p class="text-sm">+62 817-770-044</p>
                </a>
            </div>
        </div>
        <div class="flex items-center justify-end gap-3 p-2 contact-wa-btn">
            <div class="flex items-center h-8 px-3 bg-white rounded shadow info-chat">
                <p class="text-xs">Butuh bantuan? <span class="font-semibold">Hubungi kami</span></p>
            </div>
            <button type="button" onclick="toggleContactWA(event)"
                class="flex items-center justify-center rounded-full cursor-pointer bg-primary w-14 h-14">
                <i class="text-2xl text-white ri-whatsapp-line"></i>
            </button>
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        AOS.init();

        document.addEventListener("DOMContentLoaded", function() {
            const loader = document.querySelector("#loader-wrapper")
            setTimeout(() => {
                loader.classList.add("remove-loader")
                setTimeout(() => {
                    loader.remove()
                }, 5200);
            }, 800);
        })

        window.onscroll = function() {
            let nav = document.querySelector("nav")
            let top = window.pageYOffset;
            if (top > 100) {
                nav.classList.add("scrolled")
            } else {
                nav.classList.remove("scrolled")
            }
        };

        function toggleNavbar(e) {
            let menu = document.querySelector(".menu")
            let active = document.querySelector(".menu.active")
            if (active) {
                active.classList.remove("active")
            } else {
                menu.classList.add("active")
            }
        }

        const menuItem = document.querySelectorAll(".menu-item")
        menuItem.forEach((v, i) => {
            v.addEventListener("click", function() {
                let menu = document.querySelector(".menu")
                let active = document.querySelector(".menu.active")
                if (active) {
                    active.classList.remove("active")
                } else {
                    menu.classList.add("active")
                }
            })
        })

        function toggleContactWA(e) {
            let chatwaContainer = document.querySelector(".chatwa-container")
            let active = document.querySelector(".chatwa-container.active")
            if (active) {
                active.classList.remove("active")
            } else {
                chatwaContainer.classList.add("active")
            }
        }
    </script>
</body>

</html>
