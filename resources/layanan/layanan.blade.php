<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Berita</title>
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
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
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
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white dark:border-white">
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
                        <a href="{{ route('berita') }}" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" class="block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Layanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="pl-36 py-20 w-full grid grid-cols-1 md:grid-cols-2 items-center gap-8">
        <div class="col-span-1 flex flex-col items-center md:items-start">
            <h1 class="text-3xl font-extrabold text-black text-center md:text-left">Hubungi kami untuk layanan terbaik dan bersama ciptakan dampak nyata bagi perubahan sosial!</h1>
            <button class="bg-secondary-400 hover:bg-secondary-500 text-white font-bold py-2 px-4 rounded mt-6">
            Hubungi Kami Sekarang!
            </button>
        </div>
        <div class="col-span-1">
            <img src="{{ asset('img/program/hubungi kami sekarang.png') }}" alt="program">
        </div>
    </div>

    <div class="px-8 bg-white">
        <!-- Section Header -->
        <div class="max-w-screen-xl mx-auto text-center p-4">
          <!-- Title Section -->
          <h2 class="text-4xl font-bold text-black relative inline-block">
              <span class="relative z-10">Layanan Yang Kami Berikan</span>
              <!-- Background Effect for Title -->
              <span class="absolute inset-x-0 bottom-0 h-2 bg-blue-300 z-0"></span>
          </h2>
          <p class="mt-4 text-lg font-normal text-gray-700">
            Temukan berbagai layanan untuk mendukung perubahan sosial yang berkelanjutan dan memberikan dampak nyata bagi masyarakat. Kami siap membantu Anda dengan solusi terbaik sesuai kebutuhan.
          </p>
        </div>
      
        <!-- Card Grid -->
        <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 max-w-7xl mx-auto">
          <!-- Card Item -->
          <div class="relative rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105" onmouseover="changeContent(this)" onmouseout="resetContent(this)">
            <img src="{{ asset('img/program/slide-program.png') }}" alt="Layanan 1" class="w-full h-56 object-cover">
            <div class="absolute inset-0 bg-black opacity-40 transition-opacity duration-300"></div>
            <div class="absolute inset-0 p-6 flex flex-col items-left justify-center text-white transition-opacity duration-300">
            <h3 class="text-2xl font-bold text-secondary-500 transition-opacity duration-300">Eliminasi TB</h3>
            <p class="mt-2 text-justify font-bold text-white-50 transition-opacity duration-300">
                Laporkan gejala TBC di Mataram dan Lombok Barat, dan bersama kita eliminasi TB untuk kesehatan yang lebih baik!
            </p>
            </div>
          </div>

          <div class="relative rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105" onmouseover="changeContent(this)" onmouseout="resetContent(this)">
            <img src="{{ asset('img/program/slide-program.png') }}" alt="Layanan 1" class="w-full h-56 object-cover">
            <div class="absolute inset-0 bg-black opacity-40 transition-opacity duration-300"></div>
            <div class="absolute inset-0 p-6 flex flex-col items-left justify-center text-white transition-opacity duration-300">
            <h3 class="text-2xl font-bold text-secondary-500 transition-opacity duration-300">Eliminasi TB</h3>
            <p class="mt-2 text-justify font-bold text-white-50 transition-opacity duration-300">
                Laporkan gejala TBC di Mataram dan Lombok Barat, dan bersama kita eliminasi TB untuk kesehatan yang lebih baik!
            </p>
            </div>
          </div>

          <div class="relative rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105" onmouseover="changeContent(this)" onmouseout="resetContent(this)">
            <img src="{{ asset('img/program/slide-program.png') }}" alt="Layanan 1" class="w-full h-56 object-cover">
            <div class="absolute inset-0 bg-black opacity-40 transition-opacity duration-300"></div>
            <div class="absolute inset-0 p-6 flex flex-col items-left justify-center text-white transition-opacity duration-300">
            <h3 class="text-2xl font-bold text-secondary-500 transition-opacity duration-300">Eliminasi TB</h3>
            <p class="mt-2 text-justify font-bold text-white-50 transition-opacity duration-300">
                Laporkan gejala TBC di Mataram dan Lombok Barat, dan bersama kita eliminasi TB untuk kesehatan yang lebih baik!
            </p>
            </div>
          </div>

          <div class="relative rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105" onmouseover="changeContent(this)" onmouseout="resetContent(this)">
            <img src="{{ asset('img/program/slide-program.png') }}" alt="Layanan 1" class="w-full h-56 object-cover">
            <div class="absolute inset-0 bg-black opacity-40 transition-opacity duration-300"></div>
            <div class="absolute inset-0 p-6 flex flex-col items-left justify-center text-white transition-opacity duration-300">
            <h3 class="text-2xl font-bold text-secondary-500 transition-opacity duration-300">Eliminasi TB</h3>
            <p class="mt-2 text-justify font-bold text-white-50 transition-opacity duration-300">
                Laporkan gejala TBC di Mataram dan Lombok Barat, dan bersama kita eliminasi TB untuk kesehatan yang lebih baik!
            </p>
            </div>
          </div>

          <div class="relative rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105" onmouseover="changeContent(this)" onmouseout="resetContent(this)">
            <img src="{{ asset('img/program/slide-program.png') }}" alt="Layanan 1" class="w-full h-56 object-cover">
            <div class="absolute inset-0 bg-black opacity-40 transition-opacity duration-300"></div>
            <div class="absolute inset-0 p-6 flex flex-col items-left justify-center text-white transition-opacity duration-300">
            <h3 class="text-2xl font-bold text-secondary-500 transition-opacity duration-300">Eliminasi TB</h3>
            <p class="mt-2 text-justify font-bold text-white-50 transition-opacity duration-300">
                Laporkan gejala TBC di Mataram dan Lombok Barat, dan bersama kita eliminasi TB untuk kesehatan yang lebih baik!
            </p>
            </div>
          </div>

          <div class="relative rounded-lg overflow-hidden shadow-lg transform transition-transform duration-300 hover:scale-105" onmouseover="changeContent(this)" onmouseout="resetContent(this)">
            <img src="{{ asset('img/program/slide-program.png') }}" alt="Layanan 1" class="w-full h-56 object-cover">
            <div class="absolute inset-0 bg-black opacity-40 transition-opacity duration-300"></div>
            <div class="absolute inset-0 p-6 flex flex-col items-left justify-center text-white transition-opacity duration-300">
            <h3 class="text-2xl font-bold text-secondary-500 transition-opacity duration-300">Eliminasi TB</h3>
            <p class="mt-2 text-justify font-bold text-white-50 transition-opacity duration-300">
                Laporkan gejala TBC di Mataram dan Lombok Barat, dan bersama kita eliminasi TB untuk kesehatan yang lebih baik!
            </p>
            </div>
          </div>
          <!-- Tambahkan kartu lainnya sesuai kebutuhan -->
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

    <script>
      function changeContent(element) {
          element.querySelector("h3").textContent = "HUBUNGI KAMI";
          element.querySelector("h3").classList.add("text-center"); // Memastikan teks berada di tengah
          element.querySelector("p").style.display = "none"; // Menyembunyikan paragraf saat di-hover
      }
      function resetContent(element) {
          element.querySelector("h3").textContent = "Eliminasi TB";
          element.querySelector("h3").classList.remove("text-center"); // Mengembalikan posisi teks asli
          element.querySelector("p").style.display = "block"; // Menampilkan kembali paragraf saat hover dilepaskan
      }
  </script>
  
  <style>
      /* Animasi zoom saat hover */
      .transform.transition-transform.duration-300:hover {
          transform: scale(1.05);
      }
  
      /* Menampilkan teks di tengah dengan posisi absolute dan flex */
      .absolute.inset-0.p-6.flex.flex-col.items-center.justify-center.text-white {
          display: flex;
          align-items: center;
          justify-content: center;
      }
  
      /* Efek transisi untuk opacity */
      .transition-opacity {
          transition: opacity 0.3s;
      }
  </style>
  
</footer>
<div  class="bg-primary-900 text-center mt-0 text-white-50 text-bold p-5">
  ©Copyright Institut Perempuan untuk Perubahan Sosial
</div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>
