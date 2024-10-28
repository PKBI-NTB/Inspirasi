<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Berita</title>
        <link rel="icon" href="img/logofoot.png" type="image/png">

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
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white-50"></span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="text-black bg-secondary-400 hover:bg-secondary-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-yellow-300 dark:hover:bg-yellow-400 dark:focus:ring-blue-800">Kontak</button>
                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white-50 dark:bg-white-50 md:dark:bg-white-50 dark:border-white-50">
                    <li>
                        <a href="{{ route('welcome') }}" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('profile') }}" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Profil</a>
                    </li>
                    <li>
                        <a href="{{ route('program') }}" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Program</a>
                    </li>
                    <li>
                        <a href="{{ route('berita') }}" class="block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Layanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="px-28 pt-28">
        <div class="mb-6">
          <h1 class="text-6xl font-bold text-black-950 mb-4 px-28">Komitmen Bersama InSPIRASI dan Kader TB dalam Upaya Eliminasi TB untuk Indonesia Sehat</h1>
          <p class="text-gray-600 mb-2 pl-28">Oleh InSPIRASI Group</p>
          <p class="text-gray-600 pl-28">Jum'at, 20 September 2024</p>
        </div>
        <div class="relative mb-6">
            <img src="{{ asset('img/berita1.png') }}" alt="Komitmen Bersama InSPIRASI dan Kader TB" class="w-full h-1/5 object-cover rounded-lg shadow-lg">
        </div>
        <hr>
        <div>
            <p class="pt-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos alias repellat hic laboriosam, similique tenetur? Repudiandae necessitatibus possimus hic sunt vel! Sapiente natus rerum harum dolor architecto modi, cupiditate amet repellat delectus quod, reiciendis odit impedit itaque, praesentium sequi? Deserunt illum at praesentium atque ullam perspiciatis, tenetur ea fuga optio minus fugit perferendis vero tempore vitae odit rem voluptatibus, dolore iure alias non esse veritatis repellendus eligendi. Minus, modi accusantium numquam commodi placeat odio! Ut error inventore adipisci enim! Iure libero velit ea! Facilis, quidem nisi iusto quia excepturi magnam. Quidem, laboriosam soluta, sunt numquam mollitia libero dolorum quia vitae commodi assumenda tenetur ullam ex voluptas nulla tempora sapiente, doloremque maxime maiores laudantium! Unde enim dolorem inventore nesciunt doloribus placeat voluptatibus deleniti mollitia harum praesentium, eius laborum repudiandae alias vitae in eum perferendis vero corrupti sapiente voluptatum eaque accusantium architecto dolore magnam! Laudantium asperiores harum veritatis possimus architecto voluptatem ipsum, amet similique rem quae sapiente facilis est reiciendis maiores cum sint qui id eaque ea. Corporis veniam accusamus delectus deserunt aliquam ad animi sint officia minima nisi, laborum repellendus eaque temporibus explicabo consequatur possimus? Maiores facilis odit minima labore molestias iste nostrum sed expedita adipisci aliquam! Consequuntur eius dignissimos deleniti sed ea adipisci corrupti, in necessitatibus vel. Non hic natus ut nostrum totam vel, nam iure ipsum in provident qui voluptatibus commodi rerum cumque repellat alias deserunt, repudiandae, aliquid voluptas harum sit? Dolorem a officiis non rerum velit nam aspernatur impedit sit perspiciatis quae saepe quis praesentium sapiente, id quia nesciunt delectus iusto, necessitatibus ab sunt consequuntur qui doloremque placeat! Dolores ex quisquam iusto est non ipsum unde tempora at, voluptas quo! Quas quisquam quae pariatur aliquid labore ut, numquam laboriosam perferendis natus id nesciunt error provident iste fugit enim sunt omnis corrupti deleniti vitae laudantium in distinctio quod aspernatur facere. Perferendis, architecto. Aspernatur inventore sequi, porro beatae placeat reiciendis. Doloribus illum vel assumenda et exercitationem molestias sequi. Nemo modi recusandae ab corrupti earum voluptatem distinctio voluptatibus natus deleniti unde dolore facere hic obcaecati eos adipisci porro laudantium vero totam repellat illum, vitae inventore labore?
            </p>
        </div>
    </div>
    
    <!-- Bagian Kartu Berita di bawah -->
<div class="mt-12 p-28 pt-0 pb-0">
    <h2 class="text-2xl font-bold mb-4">Berita Terkait</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Kartu Berita 1 -->
        <div class="border rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('img/berita1.png') }}" alt="Berita Image" class="w-full h-auto">
            <div class="p-4">
                <p class="text-primary-800 font-semibold">InSPIRASI Group • 20 September 2024</p>
                <h3 class="text-lg font-bold leading-tight text-gray-900 dark:text-white-50">
                    Komitmen Bersama InSPIRASI dan Kader TB dalam Upaya Eliminasi TB untuk Indonesia Sehat
                </h3>
                <p class="text-gray-500 dark:text-gray-400 mt-2">
                    Angka kematian yang disebabkan oleh TB merupakan salah satu yang tertinggi di Dunia. TB adalah suatu penyakit bakteri menular...
                </p>

                <!-- Tag Buttons -->
                <div class="mt-4 space-x-2">
                    <a href="#" class="bg-primary-100 text-primary-800 px-3 py-1 rounded-lg text-sm font-medium">Eliminasi TB</a>
                <a href="#" class="bg-primary-100 text-primary-800 px-3 py-1 rounded-lg text-sm font-medium">Kegiatan InSPIRASI</a>
                </div>
            </div>
        </div>

        <!-- Kartu Berita 2 (duplikat) -->
        <div class="border rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('img/berita1.png') }}" alt="Berita Image" class="w-full h-auto">
            <div class="p-4">
                <p class="text-primary-800 font-semibold">InSPIRASI Group • 20 September 2024</p>
                <h3 class="text-lg font-bold leading-tight text-gray-900 dark:text-white-50">
                    Komitmen Bersama InSPIRASI dan Kader TB dalam Upaya Eliminasi TB untuk Indonesia Sehat
                </h3>
                <p class="text-gray-500 dark:text-gray-400 mt-2">
                    Angka kematian yang disebabkan oleh TB merupakan salah satu yang tertinggi di Dunia. TB adalah suatu penyakit bakteri menular...
                </p>

                <!-- Tag Buttons -->
                <div class="mt-4 space-x-2">
                    <a href="#" class="bg-primary-100 text-primary-800 px-3 py-1 rounded-lg text-sm font-medium">Eliminasi TB</a>
                <a href="#" class="bg-primary-100 text-primary-800 px-3 py-1 rounded-lg text-sm font-medium">Kegiatan InSPIRASI</a>
                </div>
            </div>
        </div>

        <!-- Kartu Berita 3 (duplikat) -->
        <div class="border rounded-lg shadow-lg overflow-hidden">
            <img src="{{ asset('img/berita1.png') }}" alt="Berita Image" class="w-full h-auto">
            <div class="p-4">
                <p class="text-primary-800 font-semibold">InSPIRASI Group • 20 September 2024</p>
                <h3 class="text-lg font-bold leading-tight text-gray-900 dark:text-white-50">
                    Komitmen Bersama InSPIRASI dan Kader TB dalam Upaya Eliminasi TB untuk Indonesia Sehat
                </h3>
                <p class="text-gray-500 dark:text-gray-400 mt-2">
                    Angka kematian yang disebabkan oleh TB merupakan salah satu yang tertinggi di Dunia. TB adalah suatu penyakit bakteri menular...
                </p>

                <!-- Tag Buttons -->
                <div class="mt-4 space-x-2">
                    <a href="#" class="bg-primary-100 text-primary-800 px-3 py-1 rounded-lg text-sm font-medium">Eliminasi TB</a>
                <a href="#" class="bg-primary-100 text-primary-800 px-3 py-1 rounded-lg text-sm font-medium">Kegiatan InSPIRASI</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-primary-50 py-10 mt-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-start">
            
            <!-- Logo dan Deskripsi -->
            <div class="md:w-1/2 mb-8 md:mb-0">
                <img src="{{ asset('img/logofoot.png') }}" alt="InSPIRASI NTB Logo" class="w-full h-auto max-w-sm">
            </div>

            <!-- Navigasi -->
            <div class="md:w-1/6 mb-0 md:mb-0">
                <h3 class="text-lg font-bold mb-4">Navigasi</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('welcome') }}" class="text-gray-600 hover:text-gray-900">Beranda</a></li>
                    <li><a href="{{ route('profile') }}" class="text-gray-600 hover:text-gray-900">Profil</a></li>
                    <li><a href="{{ route('program') }}" class="text-gray-600 hover:text-gray-900">Program</a></li>
                    <li><a href="{{ route('berita') }}" class="text-gray-600 hover:text-gray-900">Berita</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-gray-900">Layanan</a></li>
                </ul>
            </div>

             <!-- Google Maps -->
             <div class="md:w-1/3 mb-8 md:mb-0">
            <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d444.90758671553914!2d116.11770498431231!3d-8.625185303563988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbfa376b1df23%3A0x35743244b0b28910!2sInspirasi%20Coffee%20%26%20Culture%20movement!5e1!3m2!1sid!2sid!4v1728542733878!5m2!1sid!2sid"
            width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

            <!-- Kontak Kami -->
            <div class="md:w-1/3 mb-8 md:mb-0">
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
<div  class="bg-primary-900 text-center mt-0 text-white-50 text-bold p-5">
    ©Copyright Institut Perempuan untuk Perubahan Sosial
</div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>
