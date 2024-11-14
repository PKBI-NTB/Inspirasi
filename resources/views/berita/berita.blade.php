<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Berita</title>
        <link rel="icon" href="img/logofoot.png" type="image/png">
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
                        <a href="{{ route('welcome') }}" class="block py-2 px-3 text-black font-light rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('profile') }}" class="block py-2 px-3 text-black font-light rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Profil</a>
                    </li>
                    <li>
                        <a href="{{ route('program') }}" class="block py-2 px-3 text-black font-light rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Program</a>
                    </li>
                    <li>
                        <a href="{{ route('berita') }}" class="block py-2 px-3 text-black font-bold bg-black-900 rounded md:bg-transparent md:text-black-900 md:p-0 md:dark:text-black-900" aria-current="page">Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('layanan') }}" class="block py-2 px-3 text-black font-light rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-black dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Layanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="flex flex-col md:flex-row items-center justify-between pt-0 pb-0">
        <!-- Bagian Teks -->
        <div class="md:w-1/2 pl-28 mt-28 ">
            <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-primary-900 md:text-3xl lg:text-4xl dark:text-white">
                <span class="text-primary-600 dark:text-blue-500">Berdiri untuk keadilan dan anti kekerasan</span>, InSPIRASI NTB terus mendorong perubahan sosial yang berlandaskan kesetaraan.
            </h1>
            <p class="text-m font-normal text-gray-500 lg:text-m dark:text-gray-400">
                Selama lebih dari 15 tahun, kami selalu berusaha mengatasi persoalan yang dihadapi perempuan.
            </p>
        </div>
    
        <!-- Bagian Gambar -->
        <div class="md:w-1/2 flex justify-center mt-28">
            <img src="{{ asset('img/berita1.png') }}" alt="CRM Image" class="w-full h-auto max-w-xl">
        </div>
    </div>

    {{-- berita utama --}}
    <div class="flex flex-col md:flex-row items-center justify-between mt-20 p-28 pt-0 px-24 pb-0">
        @if($beritaTerbaru)
            <a href="{{ route('detailberita.show', $beritaTerbaru->id) }}" class="flex md:w-full">
                <div class="md:w-1/2">
                    <img src="{{ asset('storage/berita/' . $beritaTerbaru->image) }}" alt="Berita Image" class="w-auto h-auto">
                </div>
                <div class="md:w-1/2 pl-6">
                    <p class="text-primary-800 font-semibold">{{ $beritaTerbaru->penulis }} • {{ $beritaTerbaru->tanggal }}</p>
                    <h2 class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">{{ $beritaTerbaru->judul }}</h2>
                    <p class="text-gray-500 dark:text-gray-400 mt-2">{{ Str::limit($beritaTerbaru->deskripsi, 150) }}...</p>
                    <div class="mt-4 space-x-2">
                        @foreach(explode(',', $beritaTerbaru->tags) as $tag)
                            <span class="bg-primary-100 text-primary-800 px-3 py-1 rounded-lg text-sm font-medium">{{ trim($tag) }}</span>
                        @endforeach
                    </div>
                </div>
            </a>
        @endif
    </div>
    
    {{-- list Berita --}}
    <div class="mt-20 p-8">
        <h2 class="text-2xl font-bold mb-4">Semua Postingan Berita</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($beritaLainnya as $item)
                <a href="{{ route('detailberita.show', $item->id) }}" class="border rounded-lg shadow-lg overflow-hidden block">
                    <img src="{{ asset('storage/berita/' . $item->image) }}" alt="Berita Image" class="w-full h-auto">
                    <div class="p-4">
                        <p class="text-primary-800 font-semibold">{{ $item->penulis }} • {{ $item->tanggal }}</p>
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
    
</body>

<div class="flex justify-between items-center px-24 mt-8">
    @if($beritaLainnya->previousPageUrl())
        <a href="{{ $beritaLainnya->previousPageUrl() }}" class="p-2 px-3 bg-secondary-400 hover:bg-secondary-500 font-bold rounded-lg shadow">Sebelumnya</a>
    @else
        <span class="p-2 px-3 bg-gray-300 font-bold rounded-lg shadow text-gray-500">Sebelumnya</span>
    @endif

    <div class="flex gap-4 items-center">
        @for($i = 1; $i <= $beritaLainnya->lastPage(); $i++)
            <a href="{{ $beritaLainnya->url($i) }}" class="{{ $beritaLainnya->currentPage() == $i ? 'text-primary-600' : 'text-gray-600' }}">
                {{ $i }}
            </a>
        @endfor
    </div>

    @if($beritaLainnya->nextPageUrl())
        <a href="{{ $beritaLainnya->nextPageUrl() }}" class="p-2 px-3 bg-secondary-400 hover:bg-secondary-500 font-bold rounded-lg shadow">Selanjutnya</a>
    @else
        <span class="p-2 px-3 bg-gray-300 font-bold rounded-lg shadow text-gray-500">Selanjutnya</span>
    @endif
</div>

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
