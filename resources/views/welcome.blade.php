<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda</title>
  <link rel="icon" href="img/logofoot.png" type="image/png">
  
  <!-- Tambahkan Google Fonts Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
  @vite('resources/css/app.css')

  <style>
      body {
          font-family: 'Poppins', sans-serif;
      }
  </style>
  @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body>
  <!-- Navbar -->
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
                    <a href="{{ route('welcome') }}" class="block py-2 px-3 text-black bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Beranda</a>
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
                    <a href="{{ route('layanan') }}" class="block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Layanan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="p-6 mt-16">
    <div class="max-w-screen-xl mx-auto">

        <!-- Carousel Section -->
        <div id="indicators-carousel" class="relative w-full mt-6" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-96 overflow-hidden rounded-lg md:h-[500px] lg:h-[600px]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="img/crowsel.png" class="absolute block w-full h-full object-cover top-0 left-0" alt="Slide 1">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="img/crowsel.png" class="absolute block w-full h-full object-cover top-0 left-0" alt="Slide 2">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 space-x-3 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-[#06537499] hover:border-2 hover:border-yellow-400" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-[#06537499] hover:border-2 hover:border-yellow-400" aria-current="true" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white-50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white-50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        
 <!-- Text Section -->
 <div class="grid grid-cols-2 gap-4 mt-8">
    <!-- Left Text -->
    <div class="text-left">
        <h2 class="text-5xl font-bold text-black">Silaturahmi Rannya Agustyra Kristiono ke InSPIRASI NTB</h2>
    </div>
    <!-- Right Text -->
    <div class="text-justify">
        <p class="text-lg font-normal text-gray-700">Pada tanggal 16 Oktober 2023, Rannya Agustyra Kristiono, seorang tokoh inspiratif yang dikenal dengan kiprahnya di bidang pemberdayaan masyarakat dan inovasi, men....</p>
        <div class="flex justify-end mt-4">
            <button class="px-6 py-3 text-lg font-bold text-black bg-[#feed00] hover:bg-yellow-500 rounded-lg">
                Baca Selengkapnya
            </button>
        </div>
    </div>
</div>
    </div>
</div>
<section class="bg-[#f8fcd7] py-10 px-6">
    <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-6">
        <!-- Text Section -->
        <div class="w-full md:w-1/2">
            <h2 class="text-4xl font-bold text-[#073366] relative inline-block">
                <span class="relative z-10">Tentang InSPIRASI</span>
                <!-- Background Effect for Title -->
                <span class="absolute inset-x-0 bottom-0 h-2 bg-blue-300 z-0"></span>
            </h2>
            
            
            <p class="mt-4 text-lg font-normal text-gray-700">
                <strong>Institut Perempuan untuk Perubahan Sosial</strong> (InSPIRASI NTB), sebuah lembaga yang didirikan pada 7 Mei 2009 dan disahkan secara legal pada 28 Desember 2017. Bertujuan <strong>membangun gerakan perempuan untuk mencapai keadilan sosial, kesetaraan gender, kesadaran ekologis, pluralisme, transparansi, dan anti kekerasan</strong> dengan berfokus pada memperkuat gerakan perempuan melalui pendidikan kritis, advokasi berbasis bukti, penelitian, kerja sama multi-pihak, dan pemberdayaan kelompok marginal.
            </p>
            <a href="#" class="inline-block mt-6 bg-[#feed00] text-black font-bold py-2 px-4 rounded-lg hover:bg-yellow-400">
                Lihat Selengkapnya
            </a>
        </div>
        
        <!-- Image Section -->
        <div class="w-full md:w-1/2 grid grid-cols-1 md:grid-cols-2 gap-4">
            <img src="img/crowsel.png" alt="Image 1" class="rounded-lg shadow-lg">
            <img src="img/crowsel.png" alt="Image 2" class="rounded-lg shadow-lg">
            <img src="img/crowsel.png" alt="Image 3" class="col-span-2 rounded-lg shadow-lg">
        </div>
    </div>
</section>
<section class="bg-white py-10">
    <div class="max-w-screen-xl mx-auto text-center p-4">
        <!-- Title Section -->
        <h2 class="text-4xl font-bold text-black relative inline-block">
            <span class="relative z-10">5 Isu Strategis</span>
            <!-- Background Effect for Title -->
            <span class="absolute inset-x-0 bottom-0 h-2 bg-blue-300 z-0"></span>
        </h2>
        <p class="mt-4 text-lg font-normal text-gray-700">
            5 Isu Strategis InSPIRASI NTB untuk Mencapai Pembangunan Inklusif dan Berkelanjutan.
        </p>

        <!-- Cards Section -->
        <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mt-8">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex justify-center mb-4">
                    <div class="bg-orange-500 text-white rounded-full p-4">
                        <!-- Icon Kesetaraan -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <!-- Example Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black">Kesetaraan Gender dan Inklusif</h3>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex justify-center mb-4">
                    <div class="bg-yellow-400 text-white rounded-full p-4">
                        <!-- Icon Kesehatan -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <!-- Example Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black">Kesehatan Masyarakat</h3>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex justify-center mb-4">
                    <div class="bg-purple-600 text-white rounded-full p-4">
                        <!-- Icon TIK -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <!-- Example Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black">TIK dan Pengelolaan Pengetahuan</h3>
            </div>

            <!-- Card 4 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex justify-center mb-4">
                    <div class="bg-blue-600 text-white rounded-full p-4">
                        <!-- Icon Kemitraan -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <!-- Example Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black">Kemitraan Pemerintahan - Swasta - Komunitas</h3>
            </div>

            <!-- Card 5 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex justify-center mb-4">
                    <div class="bg-green-600 text-white rounded-full p-4">
                        <!-- Icon Kehutanan -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                            <!-- Example Icon -->
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-bold text-black">Kehutanan dan Lingkungan</h3>
            </div>
        </div>

        <!-- Button Section -->
        <div class="mt-8">
            <a href="#" class="inline-block bg-[#feed00] text-black font-bold py-3 px-6 rounded-lg hover:bg-yellow-400">
                Lihat Selengkapnya
            </a>
        </div>
    </div>
</section>
<section class="relative bg-blue-600 text-white py-16">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="img/crowsel.png" alt="Background Image" class="w-full h-full object-cover opacity-50">
    </div>

    <!-- Overlay Content -->
    <div class="relative max-w-3xl mx-auto text-center px-6">
        <h2 class="text-2xl font-semibold leading-relaxed">
            Membangun Gerakan Perempuan untuk Mencapai Keadilan Sosial, Kesetaraan Gender, Kesadaran Ekologis, Pluralisme, Transparansi, dan Anti Kekerasan.
        </h2>
    </div>
</section>
<section class="py-16">
    <div class="container max-w-screen-xl mx-auto flex flex-col md:flex-row items-center  p-4">
        <!-- Text Section -->
        <div class="md:w-1/3 mb-8 md:mb-0">
            <h2 class="text-4xl font-bold text-black">
                Mitra Kami
            </h2>
            <p class="text-lg text-gray-700 mt-2">
                Jaringan Kemitraan yang Menginspirasi Perubahan Sosial
            </p>
        </div>

        <!-- Logos Section -->
        <div class="md:w-2/3 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4 justify-items-center">
            <!-- Ulangi untuk setiap logo -->
            <div>
                <img src="img/logofoot.png" alt="InSPIRASI NTB Logo" class="h-24">
            </div>
            <div>
                <img src="img/logofoot.png" alt="InSPIRASI NTB Logo" class="h-24">
            </div>
            <div>
                <img src="img/logofoot.png" alt="InSPIRASI NTB Logo" class="h-24">
            </div>
            <div>
                <img src="img/logofoot.png" alt="InSPIRASI NTB Logo" class="h-24">
            </div>
            <div>
                <img src="img/logofoot.png" alt="InSPIRASI NTB Logo" class="h-24">
            </div>
        </div>
    </div>
</section>
<section class="py-16">
    <div class="container mx-auto text-center">
      <!-- Header Section -->
      <h2 class="text-4xl font-bold text-black">Berita InSPIRASI</h2>
      <p class="text-lg text-gray-700 mt-2">
        Menyuarakan Suara perempuan untuk mewujudkan keadilan sosial, kesetaraan gender, dan masyarakat tanpa kekerasan.
      </p>
    </div>
  
    <!-- News Cards Section -->
    <div class="container max-w-screen-xl mx-auto mt-12 grid gap-8 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 p-4">
      <!-- Card 1 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="img/crowsel.png" alt="Berita InSPIRASI" class="w-full h-48 object-cover">
        <div class="p-6">
          <div class="text-blue-500 text-sm font-semibold">InSPIRASI Group • 20 September 2024</div>
          <h3 class="text-xl font-bold mt-2">Komitmen Bersama InSPIRASI dan Kader TB dalam Upaya Eliminasi TB untuk Indonesia Sehat</h3>
          <p class="text-gray-700 mt-2">Angka kematian yang disebabkan oleh TB merupakan salah satu yang tertinggi di Dunia...</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-sm">Eliminasi TB</span>
            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-sm">Kegiatan InSPIRASI</span>
          </div>
        </div>
      </div>
  
      <!-- Card 2 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="img/crowsel.png" alt="Berita InSPIRASI" class="w-full h-48 object-cover">
        <div class="p-6">
          <div class="text-blue-500 text-sm font-semibold">InSPIRASI Group • 20 September 2024</div>
          <h3 class="text-xl font-bold mt-2">Komitmen Bersama InSPIRASI dan Kader TB dalam Upaya Eliminasi TB untuk Indonesia Sehat</h3>
          <p class="text-gray-700 mt-2">Angka kematian yang disebabkan oleh TB merupakan salah satu yang tertinggi di Dunia...</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-sm">Eliminasi TB</span>
            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-sm">Kegiatan InSPIRASI</span>
          </div>
        </div>
      </div>
  
      <!-- Card 3 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="img/crowsel.png" alt="Berita InSPIRASI" class="w-full h-48 object-cover">
        <div class="p-6">
          <div class="text-blue-500 text-sm font-semibold">InSPIRASI Group • 20 September 2024</div>
          <h3 class="text-xl font-bold mt-2">Komitmen Bersama InSPIRASI dan Kader TB dalam Upaya Eliminasi TB untuk Indonesia Sehat</h3>
          <p class="text-gray-700 mt-2">Angka kematian yang disebabkan oleh TB merupakan salah satu yang tertinggi di Dunia...</p>
          <div class="flex flex-wrap gap-2 mt-4">
            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-sm">Eliminasi TB</span>
            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded-full text-sm">Kegiatan InSPIRASI</span>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Button Section -->
    <div class="text-center mt-8">
      <a href="#" class="bg-[#feed00] text-black font-bold py-3 px-6 rounded-lg hover:bg-yellow-400">
        Lihat Selengkapnya
      </a>
    </div>
  </section>
  


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
<div  class="bg-primary-200 text-center mt-0 text-black text-bold p-5">
    ©Copyright Institut Perempuan untuk Perubahan Sosial
</div>

</body>
</html>
