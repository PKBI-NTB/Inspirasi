<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        
        <!-- Tambahkan Google Fonts Poppins -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
        @vite('resources/css/app.css')
    
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
<body>
    <nav class="bg-white-50 dark:bg-white-50 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-white-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/logonav.png') }}" alt="Logo Navigation" class="h-15">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="text-black bg-secondary-400 hover:bg-secondary-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-secondary-300 dark:hover:bg-secondary-400 dark:focus:ring-blue-800">Kontak</button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white dark:border-white">
                    <li>
                        <a href="{{ route('welcome') }}" class="block py-2 px-3 text-black font-light rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('profile') }}" class="block py-2 px-3 text-black font-light rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Profil</a>
                    </li>
                    <li>
                        <a href="{{ route('program') }}" class="block py-2 px-3 text-black  font-bold bg-black-900 rounded md:bg-transparent md:text-black-900 md:p-0 md:dark:text-black-900" aria-current="page">Program</a>
                    </li>
                    <li>
                        <a href="{{ route('berita') }}" class="block py-2 px-3 text-black font-light rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" class="block py-2 px-3 text-black font-light rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Layanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

     <main>
        <!-- hero -->
        <div class="relative h-[374px]">
            <img src="{{ asset('img/program/slide-program.png') }}" alt="InSPIRASI NTB" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full flex justify-center items-center pt-16">
                <h1 class="md:text-5xl text-white-50 w-full md:w-[60%] text-center">
                    <span class="text-[34px] mb-4 block">Program InSPIRASI</span> <b class="font-extrabold text-[48px] block">ISLEI</b>
                </h1>
            </div>
        </div>

        <!-- content -->
        <div class="px-4 md:px-24 py-4 md:py-12 w-full grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-0">
            <!-- left -->
            <div class="col-span-1 md:w-fit">
                <div class="w-full h-[541px] md:w-[397px] md:h-[541px]">
                    <img src="{{ asset('img/program/Rectangle 34625691.png') }}" alt="program" class="w-full h-full object-cover">
                </div>
            </div>
            
            <!-- right -->
            <div class="col-span-1 md:w-full">
                <!-- deskripsi -->
                 <div class="mb-6">
                    <h1 class="text-2xl font-extrabold text-black">Program InSPIRASI ISLEI</h1>
                    <p class="text-black text-lg mt-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, risus in porttitor dapibus, lectus lorem efficitur eros, ac molestie nisi arcu in nunc. Sed nec vestibulum magna. Nullam blandit sem non varius viverra. Aliquam bibendum tellus sit amet quam pharetra, vel suscipit nisi vulputate. Donec malesuada eros vitae augue vehicula, non viverra eros hendrerit. Integer eu nulla vel arcu gravida scelerisque sed a odio. Morbi at posuere justo, ac sollicitudin est.
                    <br>
                    <br>
                    Vestibulum venenatis odio sed nibh ullamcorper, nec sodales elit sagittis. Aliquam accumsan lorem et lacus scelerisque, quis fringilla elit sollicitudin. Aenean rhoncus felis et ultricies pretium. Cras et tincidunt urna, a iaculis dolor. Pellentesque dignissim volutpat ex, vitae congue felis tincidunt at. Mauris accumsan lorem vel felis sollicitudin pretium. Nam scelerisque, ligula at feugiat ultricies, mauris ante consequat neque, non feugiat purus est quis erat.
                    </p>
                 </div>
                <!-- tujuan program -->
                <div class="mb-6">
                <h1 class="text-2xl font-extrabold text-black">Tujuan Program</h1>
                <p class="text-black text-lg mt-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, risus in porttitor dapibus, lectus lorem efficitur eros, ac molestie nisi arcu in nunc. Sed nec vestibulum magna.</p>
                </div>

                <!-- Lokasi Program -->
                <div class="mb-6">
                    <h1 class="text-2xl font-extrabold text-black">Lokasi Program</h1>
                    <p class="text-black text-lg mt-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, risus in porttitor dapibus, lectus lorem efficitur eros, ac molestie nisi arcu in nunc. Sed nec vestibulum magna.</p>
                </div>

                <!-- Durasi Program -->
                <div class="mb-6">
                    <h1 class="text-2xl font-extrabold text-black">Durasi Program</h1>
                    <p class="text-black text-lg mt-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, risus in porttitor dapibus, lectus lorem efficitur eros, ac molestie nisi arcu in nunc. Sed nec vestibulum magna.</p>
                </div>

                <!-- Mitra Program -->
                <div class="mb-6">
                    <h1 class="text-2xl font-extrabold text-black">Mitra Program</h1>
                    <p class="text-black text-lg mt-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, risus in porttitor dapibus, lectus lorem efficitur eros, ac molestie nisi arcu in nunc. Sed nec vestibulum magna.</p>

                    <!-- Mitra -->
                    <div class="flex items-center mt-6">
                        <img src="{{ asset('img/mitra-1.png') }}" alt="mitra">
                    </div>
                </div>
            </div>
        </div>
     </main>

<!-- Footer -->
<footer class="bg-primary-50 py-10 mt-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-start">
            
            <!-- Logo dan Deskripsi -->
            <div class="md:size-40 mb-8 md:mb-0 mr-20">
                <img src="{{ asset('img/logofoot.png') }}" alt="InSPIRASI NTB Logo" class="w-full h-auto max-w-sm">
            </div>

            <!-- Navigasi -->
            <div class="md:size-40 mb-0 md:mb-0 mr-20">
                <h3 class="text-lg font-bold mb-4">Navigasi</h3>
                <ul class="space-y-1">
                    <li><a href="{{ route('welcome') }}" class="text-gray-600 hover:text-gray-900">Beranda</a></li>
                    <li><a href="{{ route('profile') }}" class="text-gray-600 hover:text-gray-900">Profil</a></li>
                    <li><a href="{{ route('program') }}" class="text-gray-600 hover:text-gray-900">Program</a></li>
                    <li><a href="{{ route('berita') }}" class="text-gray-600 hover:text-gray-900">Berita</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-900">Layanan</a></li>
                </ul>
            </div>

             <!-- Google Maps -->
             <div class="md:size-20 mb-8 md:mb-0 mr-56">
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d444.90758671553914!2d116.11770498431231!3d-8.625185303563988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbfa376b1df23%3A0x35743244b0b28910!2sInspirasi%20Coffee%20%26%20Culture%20movement!5e1!3m2!1sid!2sid!4v1728542733878!5m2!1sid!2sid"
                width="450" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <!-- Kontak Kami -->
            <div class="md:w-1/3 mb-8 md:mb-0 ml-56">
                <h3 class="text-lg font-bold mb-4">Kontak Kami</h3>
                <ul class="space-y-2">
                    <li><a href="tel:+62890123412349875" class="text-gray-600 hover:text-gray-900">+62 890-1234-1234-9875</a></li>
                    <li><a href="https://goo.gl/maps/abc123" target="_blank" class="text-gray-600 hover:text-gray-900">
                        Perumahan Lantana Garden, Jl. Darul Hikmah No.79 Blok D5, Telaga Waru, Kec. Labuapi
                    </a></li>
                    <li><a href="mailto:inspirasi@gmail.com" class="text-gray-600 hover:text-gray-900">inspirasi@gmail.com</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>
<div  class="bg-primary-900 text-center mt-0 text-white-50 text-bold py-2">
    ©Copyright Institut Perempuan untuk Perubahan Sosial
</div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>
