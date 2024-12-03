<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Program</title>
        <link rel="icon" href="img/logofoot.png" type="image/png">
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        
        <!-- Tambahkan Google Fonts Poppins -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    
        <style>
            body {
                font-family: 'Poppins', sans-serif;
            }
        </style>
    </head>
<body>
    <nav class="bg-white-50 dark:bg-white-50 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-white-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <a href="{{ route('welcome') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/logonav.png') }}" alt="Logo Navigation" class="h-15">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="text-black bg-secondary-400 hover:bg-secondary-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-secondary-300 dark:hover:bg-secondary-400 dark:focus:ring-blue-800 shadow-lg hover:shadow-xl transition-shadow duration-300">Kontak</button>
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
                    <span class="text-[34px] mb-4 block">Program InSPIRASI</span> <b class="font-extrabold text-[48px] block">{{ $program->nama_program }}</b>
                </h1>
            </div>
        </div>

        <!-- content -->
        <div class="px-4 md:px-24 py-4 md:py-12 w-full grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-0">
            <!-- left -->
            <div class="col-span-1 md:w-fit">
                <div class="w-full h-[541px] md:w-[397px] md:h-[541px]">
                    <img src="{{ asset('storage/program/' . $program->image) }}" alt="program" class="w-full h-full object-cover">
                </div>
            </div>
            
            <!-- right -->
            <div class="col-span-1 md:w-full">
                <!-- deskripsi -->
                 <div class="mb-6">
                    <h1 class="text-2xl font-extrabold text-black">Program InSPIRASI {{ $program->nama_program }}</h1>
                    <p class="text-black text-lg mt-6">{!! $program->deskripsi !!}</p>
                 </div>
                <!-- tujuan program -->
                <div class="mb-6">
                <h1 class="text-2xl font-extrabold text-black">Tujuan Program</h1>
                <p class="text-black text-lg mt-6">{{ $program->tujuan }}</p>
                </div>

                <!-- Lokasi Program -->
                <div class="mb-6">
                    <h1 class="text-2xl font-extrabold text-black">Lokasi Program</h1>
                    <p class="text-black text-lg mt-6">{{ $program->lokasi }}</p>
                </div>

                <!-- Durasi Program -->
                <div class="mb-6">
                    <h1 class="text-2xl font-extrabold text-black">Durasi Program</h1>
                    <p class="text-black text-lg mt-6">{{ $program->durasi }}</p>
                </div>

                <!-- Mitra Program -->
                <div class="mb-6">
                    <h1 class="text-2xl font-extrabold text-black">Mitra Program</h1>
                    <div class="flex flex-wrap mt-6 gap-4"> <!-- Gap diperbesar -->
                        @foreach (json_decode($program->mitra, true) as $mitraImage)
                            <div class="flex-none">
                                <img src="{{ asset('storage/program/mitra/' . $mitraImage) }}" 
                                     alt="Mitra Image" 
                                     class="img-thumbnail rounded-md" 
                                     style="width: 100px; height: 100px; object-fit: cover;">
                            </div>
                        @endforeach
                    </div>
                </div>                
            </div>
        </div>
     </main>

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
                    <li><a href="{{ route('layanan') }}" class="text-gray-600 hover:text-gray-900">Layanan</a></li>
                </ul>
            </div>

            <!-- Google Maps -->
            <div class="md:size-20 mb-8 md:mb-0 mr-20">
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d444.90758671553914!2d116.11770498431231!3d-8.625185303563988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbfa376b1df23%3A0x35743244b0b28910!2sInspirasi%20Coffee%20%26%20Culture%20movement!5e1!3m2!1sid!2sid!4v1728542733878!5m2!1sid!2sid"
                width="300" height="180" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <!-- Kontak Kami -->
            <div class="md:w-1/3 mb-8 md:mb-0 ml-56">
                <h3 class="text-lg font-bold mb-4">Kontak Kami</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="tel:{{ $kontak->telpon }}" class="text-gray-600 hover:text-gray-900 flex items-center">
                            <i class="fas fa-phone-alt mr-2"></i> {{ $kontak->telpon }}
                        </a>
                    </li>
                    <li>
                        <a href="https://www.google.com/maps/place/Inspirasi+Coffee+%26+Culture+movement/@-8.625153,116.11788,415m/data=!3m1!1e3!4m6!3m5!1s0x2dcdbfa376b1df23:0x35743244b0b28910!8m2!3d-8.6251533!4d116.1178795!16s%2Fg%2F11tjgw7gqz?hl=id&entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoASAFQAw%3D%3D" target="_blank" class="text-gray-600 hover:text-gray-900 flex items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            {{ $kontak->alamat }}
                        </a>
                    </li>
                    <li>
                        <a href="mailto:{{ $kontak->email }}" class="text-gray-600 hover:text-gray-900 flex items-center">
                            <i class="fas fa-envelope mr-2"></i> {{ $kontak->email }}
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Sosial Media -->
            <div class="md:size-40 mb-8 md:mb-0 " style="margin-left: 40px; margin-right: 20px;">
                <h3 class="text-lg font-bold mb-4">Sosial Media</h3>
                <div class="flex space-x-6 mt-2">
                    <a href="{{ $kontak->url_instagram }}" class="text-gray-600 hover:text-gray-900">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="{{ $kontak->url_facebook }}" class="text-gray-600 hover:text-gray-900">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="{{ $kontak->url_tiktok }}" class="text-gray-600 hover:text-gray-900">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="{{ $kontak->url_youtube }}" class="text-gray-600 hover:text-gray-900">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>            

        </div>
    </div>
</footer>

<div  class="bg-primary-900 text-center mt-0 text-white-50 text-bold py-2">
    ©Copyright Institut Perempuan untuk Perubahan Sosial
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
