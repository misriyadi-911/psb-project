<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita | Ponpes Syekh Abdurrahman</title>
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
                        class="relative font-medium text-default-border-color after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        Beranda
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/profile"
                        class="after:transition-all relative font-medium text-default-border-color after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:duration-300 after:content-[''] hover:after:w-full">
                        Profile
                    </a>
                </li>
                <li class="menu-item active">
                    <a href="#berita"
                        class="relative font-medium text-default-border-color after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        berita
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#kontak"
                        class="relative font-medium text-default-border-color after:absolute after:bottom-[-5px] after:left-0 after:h-[2px] after:w-0 after:rounded-md after:bg-primary after:transition-all after:duration-300 after:content-[''] hover:after:w-full">
                        hubungi
                    </a>
                </li>
            </ul>
            <div class="grid w-8 h-8 ml-auto mr-5 place-items-center md:hidden" onclick="toggleNavbar(event)">
                <i class="ri-menu-line ri-xl"></i>
            </div>
        </div>
    </nav>


    <section class="relative overflow-hidden bg-semi-sky-blue" id="profile">
        <div class="container relative p-5 mx-auto md:p-10 ">

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

                <!-- <div class="max-w-[300px] w-full">
                    <p class="mt-3 ml-5 text-4xl font-semibold md:text-5xl text-primary">{{$data_berita->judul}}</p>
                    <span class="block w-full h-[14px] mt-5 bg-primary"></span>
                </div> -->

                <div class="card-aboutme ml-auto mt-[160px] md:mt-5 bg-white relative z-50 shadow-sm cursor-pointer"
                    data-aos="fade-up">
                    <div class="p-8 border-b-[1px] header border-default-border-color">
                        <div class="flex gap-5">
                            <div class="w-6 h-6 bg-red-500 rounded-full"></div>
                            <div class="w-6 h-6 bg-yellow-500 rounded-full"></div>
                            <div class="w-6 h-6 bg-green-600 rounded-full"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-0 px-8 body">
                        <div class="text-[48px] text-primary">❝</div>
                        <img src="{{ asset('img') }}/{{ $data_berita->foto }}" alt="" style="max-height: 500px; width: 100%; display: block; margin: auto;">
                        <p class="mt-3 mb-3 text-4xl font-semibold md:text-5xl" style="text-align: justify;">{{$data_berita->judul}}</p>
                        <p class="mt-3 mb-3 text-xl  md:text-xl">{{$data_berita->penulis}} | {{$data_berita->tanggal_terbit}}</p>
                        <hr>
                        <p class="mt-3 m-0 text-xs leading-6 md:leading-8 md:text-sm text-custom-text-card" style="text-align: justify;">
                            {{$data_berita->isi}}
                        </p>
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

    <section class="bg-semi-sky-blue" id="berita">
        <div class="container p-5 mx-auto pb-14 pt-[120px] lg:pt-[120px] lg:pb-20 lg:px-14">
            <div class="max-w-[640px] w-full mx-auto ">
                <p class="text-2xl font-semibold leading-9 text-start md:text-center md:text-3xl">Recently
                    <span class="font-bold text-primary">Post</span>
                </p>
                <!-- <p class="mt-5 text-sm leading-6 md:text-center text-custom-text-card"> <span class=" text-primary">Pondok Pesantren Syeikh Abdurrohman</span> -->
                </p>
            </div>

           <div class="flex flex-wrap justify-around gap-1 mt-5 gap-y-10 w-100">
                @foreach ($data_recent as $data)
                    <div class="price-card bg-white border max-w-[350px] lg:max-w-[380px] w-full min-h-[500px] p-8"
                        data-aos="fade-up" data-aos-delay="">
                        <img src="{{ asset('img') }}/{{ $data->foto }}" alt="" style="max-height: 177px; width: auto; display: block; margin: auto;">
                        <p class="mb-3 mt-3 text-lg font-semibold">{{ $data->judul }}</p>
                        <p class="text-sm mb-3">{{ $data->penulis }} | {{ $data->tanggal_terbit }}</p> 
                        <hr>
                        <p class="text mt-3"><?php echo implode (' ', array_slice(explode(' ', $data->isi), 0,25)). '...';?></p> 
                        <hr class="mt-5">
                        <a href="{{ url('/berita/detail') }}/{{ $data->id }}" target="_blank"
                            class="block w-full py-3 mt-5 tracking-wide text-center text-white rounded bg-primary">
                            Lihat Detail
                        </a>
                    </div>
                @endforeach
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
