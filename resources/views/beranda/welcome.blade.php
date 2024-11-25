<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda</title>
  <link rel="icon" href="img/logofoot.png" type="image/png">
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  
  <!-- Tambahkan Google Fonts Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


  <style>
      body {
          font-family: 'Poppins', sans-serif;
      }
  </style>

   <!-- Link ke file CSS hasil compile menggunakan Laravel Mix -->
   <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
  <!-- Navbar -->
<nav class="bg-white-50 dark:bg-white-50 fixed w-full z-50 top-0 start-0 border-b border-gray-200 dark:border-white-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('img/logonav.png') }}" alt="Logo Navigation" class="h-15">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="text-black bg-secondary-400 hover:bg-secondary-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-secondary-400 dark:hover:bg-secondary-500 dark:focus:ring-blue-800 shadow-lg hover:shadow-xl transition-shadow duration-300">Kontak</button>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white dark:border-white">
                <li>
                    <a href="{{ route('welcome') }}" class="block py-2 px-3 text-black font-bold bg-black-900 rounded md:bg-transparent md:text-black-900 md:p-0 md:dark:text-black-900" aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('profile') }}" class="block py-2 px-3 text-black font-light rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Profil</a>
                </li>
                <li>
                    <a href="{{ route('program') }}" class="block py-2 px-3 text-black font-light rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Program</a>
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

<!-- Main Content Section -->
<div class="p-6 mt-8" style="padding-top: 2rem;">
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
                <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-[#06537499] hover:border-2 hover:border-secondary-400" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-[#06537499] hover:border-2 hover:border-secondary-400" aria-current="true" aria-label="Slide 2" data-carousel-slide-to="1"></button>
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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8 py-8">
            <!-- Left Text -->
            <div class="text-left">
                <h2 class="text-5xl font-bold text-black">{{ $programTerbaru->nama_program }}</h2>
            </div>
            <!-- Right Text -->
            <div class="text-justify">
                <p class="text-lg font-normal text-gray-700" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">{{ $programTerbaru->deskripsi }}</p>
                <div class="flex justify-end mt-4">
                    <a href="{{ route('program') }}">
                        <button class="px-6 py-3 text-lg font-bold text-black bg-secondary-400 hover:bg-secondary-500 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                            Baca Selengkapnya >
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="bg-primary-750 py-16 px-6">
    <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center space-y-6 md:space-y-0 md:space-x-6">
        <!-- Text Section -->
        <div class="w-full md:w-1/2">
            <div class="relative inline-block">
                <span class="absolute inset-x-0 top-0 h-9 bg-primary-300"></span>
                <h2 class="relative text-[48px] font-bold text-black">Tentang InSPIRASI</h2>
            </div>
        
            <p class="mt-4 text-lg font-normal text-gray-700">
                <strong>Institut Perempuan untuk Perubahan Sosial</strong> (InSPIRASI NTB), sebuah lembaga yang didirikan pada 7 Mei 2009 dan disahkan secara legal pada 28 Desember 2017. Bertujuan <strong>membangun gerakan perempuan untuk mencapai keadilan sosial, kesetaraan gender, kesadaran ekologis, pluralisme, transparansi, dan anti kekerasan</strong> dengan berfokus pada memperkuat gerakan perempuan melalui pendidikan kritis, advokasi berbasis bukti, penelitian, kerja sama multi-pihak, dan pemberdayaan kelompok marginal.
            </p>
            <a href="{{ route('profile') }}#sejarah" class="inline-block mt-6 bg-secondary-400 text-black font-bold py-2 px-4 rounded-lg hover:bg-secondary-500 shadow-lg hover:shadow-xl transition-shadow duration-300">
                Lihat Selengkapnya >
            </a>
        </div>
        
        <!-- Image Section -->
        <div class="mt-8">
            <img src="img/tentang_inspirasi.png" alt="Image 1">
        </div>
    </div>
</section>
<section class="bg-white py-10">
    <div class="max-w-screen-xl mx-auto text-center p-4">
        <!-- Title Section -->
        <div class="relative inline-block">
            <span class="absolute inset-x-0 top-0 h-9 bg-primary-300"></span>
            <h2 class="relative text-[48px] font-bold text-black">5 Isu Strategis</h2>
        </div>
        <p class="mt-4 text-[18px] font-normal text-gray-700">
            5 Isu Strategis InSPIRASI NTB untuk Mencapai Pembangunan Inklusif dan Berkelanjutan.
        </p>
    
        <!-- Cards gambar -->
        <div class="mt-6">
            <img src="/img/program.png" alt="Program Strategis" class="w-full h-[270px] object-cover">
        </div>
    
        <!-- Button Section -->
        <div class="mt-8">
            <a href="{{ route('profile') }}#isu-strategis" class="inline-block bg-secondary-400 text-black font-bold py-3 px-6 rounded-lg hover:bg-secondary-500 shadow-lg hover:shadow-xl transition-shadow duration-300">
                Lihat Selengkapnya >
            </a>
        </div>
    </div>
    
</section>
<section class="relative bg-primary-900 text-white py-20">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="img/beranda_biru.png" alt="Background Image" class="w-full h-full object-cover opacity-50">
    </div>

    <!-- Overlay Content -->
    <div class="relative max-w-3xl mx-auto text-center px-6">
        <h2 class="text-2xl font-semibold leading-relaxed text-white-50">
            Membangun Gerakan Perempuan untuk Mencapai Keadilan Sosial, Kesetaraan Gender, Kesadaran Ekologis, Pluralisme, Transparansi, dan Anti Kekerasan.
        </h2>
    </div>
</section>

<section class="py-16">
    <div class="container max-w-screen-xl mx-auto flex flex-col md:flex-row items-center  p-4">
        <!-- Text Section -->
        <div class="md:w-1/3 mb-8 md:mb-0">
            <div class="relative inline-block">
                <span class="absolute inset-x-0 top-0 h-9 bg-secondary-400"></span>
                <h2 class="relative text-[48px] font-bold text-black">Mitra Kami</h2>
            </div>
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
    <div class="relative inline-block">
        <span class="absolute inset-x-0 top-0 h-9 bg-primary-300"></span>
        <h2 class="relative text-[48px] font-bold text-black">Berita InSPIRASI</h2>
    </div>
    <p class="text-lg text-gray-700 mt-2">
        Menyuarakan Suara perempuan untuk mewujudkan keadilan sosial, kesetaraan gender, dan masyarakat tanpa kekerasan.
    </p>
    </div>
  
    {{-- list Berita --}}
    <div class="mt-20 px-28 mb-0">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($beritaLainnya as $item)
                <a href="{{ route('detailberita.show', $item->id) }}" class="border rounded-lg shadow-lg overflow-hidden block">
                    <img src="{{ asset('storage/berita/' . $item->image) }}" alt="Berita Image" class="w-full h-auto">
                    <div class="p-4">
                        <p class="text-primary-800 font-semibold">InSPIRASI Group • {{ $item->tanggal }}</p>
                        <h3 class="text-lg font-bold">{{ $item->judul }}</h3>
                        <p class="text-gray-500 mt-2">{{ Str::limit($item->deskripsi, 100) }}</p>
                        <div class="mt-4 space-x-2">
                            @foreach(explode(',', $item->tags) as $tag)
                                <span class="bg-primary-100 text-primary-800 px-3 py-1 rounded-lg text-sm font-medium">{{ trim($tag) }}</span>
                            @endforeach
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
        
    <!-- Button Section -->
    <div class="text-center mt-8">
        <a href="{{ route('berita') }}" 
        class="bg-secondary-400 text-black font-bold py-3 px-6 rounded-lg hover:bg-secondary-500 shadow-lg hover:shadow-xl transition-shadow duration-300">
            Lihat Selengkapnya >
        </a>
    </div>
</section>

<section class="py-4">
    <div class="container max-w-screen-xl mx-auto flex flex-col md:flex-row items-center p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4 py-4">
            <!-- Left -->
            <img src="{{ asset('img/program/Rectangle 34625691.png') }}" alt="InSPIRASI cafe" class="w-full h-full">
            <!-- Right Text -->
            <div class="text-justify">
                <div class="relative h-full">
                    <div class="text-left">
                        <h2 class="text-5xl font-bold text-black">Temukan Jawaban untuk setiap Pertanyaanmu dengan Mudah!</h2>
                    </div>
                    <div class="absolute bottom-0 left-0 md:static mt-4">
                        <a href="{{ route('layanan') }}">
                            <button class="px-6 py-3 text-md font-bold text-black bg-secondary-400 hover:bg-secondary-500 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                                Hubungi InSPIRASI >
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ mix('js/app.js') }}"></script>
</body>

<!-- Footer -->
<footer class="bg-white-50 py-10 mt-12">
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

</html>
