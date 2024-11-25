@extends('layout.main')
@section('title', 'Profile')
@section('content')
<section class="py-8 ">
    <!-- Gambar besar di bagian atas -->
    <div class="mb-8 bg-primary-900">
        <img src="img/berita1.png" alt="Foto Kegiatan InSPIRASI" class="rounded-lg shadow-lg opacity-50 justify-center w-full" style="height: 740px;">
    </div>

  
    <!-- Bagian bawah dengan dua kolom -->
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
      
        <!-- Kolom Kiri: Sub Materi (Sticky) -->
        <div class="lg:col-span-1 sticky top-0 w-full max-w-xs" style="margin-right: 100px">
            <!-- Bagian atas dengan background kuning -->
            <div class="bg-secondary-500 p-4 rounded-t-lg shadow-lg">
                <h3 class="text-xl font-bold text-black">Sub Materi</h3>
            </div>
        
            <!-- Bagian bawah dengan background kuning keputihan -->
            <div class="bg-secondary-50 p-6 rounded-b-lg shadow-lg">
                <ul class="space-y-2">
                    <li><a href="#sejarah" class="text-black hover:text-blue-600">> Sejarah Singkat</a></li>
                    <li><a href="#visi-misi" class="text-black hover:text-blue-600">> Visi & Misi</a></li>
                    <li><a href="#pengurus" class="text-black hover:text-blue-600">> Pengurus</a></li>
                    <li><a href="#struktur" class="text-black hover:text-blue-600">> Struktur Organisasi</a></li>
                    <li><a href="#isu-strategis" class="text-black hover:text-blue-600">> 5 Isu Strategis</a></li>
                </ul>
            </div>
        </div>
        
      <!-- Kolom Kanan: Sejarah, Visi Misi, Pengurus, dll -->
      <div class="lg:col-span-2 space-y-6">

        <!-- Sejarah Singkat -->
        <div id="sejarah" class="bg-white-50 p-6">
            <div class="text-center">
                <div class="relative inline-block">
                    <span class="absolute inset-x-0 top-0 h-9 bg-primary-300"></span>
                    <h2 class="relative text-[48px] font-bold text-black">Sejarah Singkat</h2>
                </div>
                                
            </div>

            <div class="flex items-stretch gap-6 mb-3 mt-4">
                <div class="flex-shrink-0">
                    <img src="img/inspirasi.png" alt="Logo InSPIRASI NTB" class="h-full object-contain bg-secondary-50">
                </div>
                <div class="text-[18px] text-black text-lg text-justify" style="display: inline-block; text-indent: 2em;">
                    <p>
                        Pada awalnya aktivis perempuan di NTB berkumpul mendiskusikan tentang situasi dan kasus-kasus yang dialami perempuan di NTB. Kemudian pada tahun 2009, beberapa aktivis perempuan mendirikan lembaga yang diberi nama Institut Perempuan untuk Perubahan Sosial (InSPIRASI) NTB sebagai bentuk keprihatinan terhadap situasi kekerasan serta kompleksitas persoalan yang dihadapi perempuan NTB diberbagai sektor. <br><br>
                    </p>
                    <p>
                        Disingkat InSPIRASI karena disadari bahwa NTB merupakan Provinsi yang mampu melahirkan perempuan dengan gerakan perubahan yang inovatif, berkemajuan untuk perubahan sosial yang membumi.<br><br>
                    </p>
                </div>
            </div>
            
            <div class="text-[18px] text-black text-lg text-justify" style="display: inline-block; text-indent: 2em;">
                <p>  
                    Untuk memperkuat posisi dan peranannya secara hukum, disepakati melegalkan lembaga ini. Pada tahun 2009 dibentuk menjadi sebuah lembaga yang berbadan hukum dengan nama Institut Perempuan untuk Perubahan Sosial (InSPIRASI) Nusa Tenggara Barat yang diperpanjang pada hari Kamis, tanggal 28 Desember tahun 2017 melalui notaris Munawir Asari, SH. <br><br>  
                </p>
                <p>  
                    Lembaga InSPIRASI NTB berubah menjadi Yayasan InSPIRASI NTB pada hari Selasa tanggal 23 April 2024 melalui notaris Baiq Yuni Indah Damayanti, SH,. M.Kn dan sudah didaftarkan di Kemenkumham.<br><br>  
                </p>
            </div>
        </div>

        <!-- Visi & Misi -->
        <div id="visi-misi" class="bg-primary-750 p-6 border-2  rounded-lg shadow-lg">
            <div class="text-center">
                <div class="relative inline-block">
                    <span class="absolute inset-x-0 top-0 h-9 bg-secondary-400"></span>
                    <h2 class="relative text-[48px] font-bold text-black">Visi & Misi</h2>
                </div>
                                
            </div>
        
            <!-- Bagian Visi -->
            <div class="mb-6">
                <h3 class="text-[34px] font-semibold flex items-center mb-0">
                    <img src="/img/icon_visi.png" alt="Icon Visi" class="h-50 w-50 mr-2" />
                    Visi
                </h3>
                <p class="text-[18px] text-black leading-relaxed text-justify">
                    <span style="display: inline-block; text-indent: 1em; margin-left: 80px">
                        Terwujudnya <b>masyarakat sipil</b>, khususnya <b>gerakan perempuan</b> yang kuat untuk mempercepat terciptanya 
                        <b>masyarakat</b> yang berlandaskan prinsip <b>keadilan gender</b>, <b>kesadaran ekologis</b>, <b>pluralis</b>, 
                        <b>transparan</b>, dan <b>anti kekerasan</b>.
                    </span>
                </p>
            </div>

            <!-- Bagian Misi -->
            <div>
                <h3 class="text-[34px] font-semibold flex items-center mb-0">
                    <img src="/img/icon_misi.png" alt="Icon Misi" class="h-50 w-50 mr-2" />
                    Misi
                </h3>
                <ul class="list-decimal pl-6 text-black space-y-2 mt-2 text-[18px] text-black leading-relaxed text-justify" style="margin-left: 65px; font-weight: bold;">
                    <li><span style="font-weight: normal;"><b>Mengembangkan pendidikan kritis</b> diberbagai sektor khususnya perempuan dan masyarakat sosial serta pemimpin kelompok perempuan marginal.</span></li>
                    <li><span style="font-weight: normal;"><b>Memperkuat advokasi berbasis bukti</b> yang berperspektif keadilan gender, ekologis, pluralis, transparan dan anti kekerasan untuk berbagai kebijakan ditingkat lokal, nasional dan internasional.</span></li>
                    <li><span style="font-weight: normal;"><b>Mengembangkan dan menyebarluaskan pengetahuan </b>melalui penelitian, dokumentasi dan publikasi yang berkaitan dengan isu gender, ekologis, pluralis, dan anti kekerasan</span></li>
                    <li><span style="font-weight: normal;"><b>Melakukan kerjasama dengan multi pihak</b> baik dari tingkat lokal, nasional maupun internasional yang sesuai dengan visi misi InSPIRASI NTB.</span></li>
                    <li><span style="font-weight: normal;"><b>Melakukan usaha-usaha lain</b> yang sesuai dengan nilai-nilai dan prinsip-prinsip InSPIRASI.</span></li>
                    <li><span style="font-weight: normal;"><b>Melakukan pemberdayaan masyarakat kalangan bawah</b> dan kelompok marginal.</span></li>
                </ul>                
            </div>
        </div>
        

        <!-- Pengurus -->
        <section id="pengurus" class="py-8 bg-white">
            <div class="container mx-auto text-center">
                <!-- Judul -->
                <div class="relative inline-block">
                    <span class="absolute inset-x-0 top-0 h-9 bg-primary-300"></span>
                    <h2 class="relative text-[48px] font-bold text-black">Pengurus</h2>
                </div>
        
                <!-- Carousel Wrapper -->
                <div class="relative overflow-hidden">
                    <!-- Carousel Items -->
                    <div id="pengurusCarousel" class="flex transition-transform ease-out duration-500" style="width: 200%;">
        
                        <!-- Slide 1 (3 items) -->
                        <div class="flex w-full space-x-6 justify-between" style="flex: 0 0 50%;">
                            <div class="flex-1 bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                                <img src="img/profile.jpg" alt="Pengurus 1" class="w-full h-60 object-cover">
                                <div class="p-4 bg-blue-900">
                                    <h3 class="text-secondary-400 font-semibold text-lg">Nama Pengurus 1</h3>
                                    <p class="text-white">Posisi</p>
                                </div>
                            </div>
                            <div class="flex-1 bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                                <img src="img/profile.jpg" alt="Pengurus 2" class="w-full h-60 object-cover">
                                <div class="p-4 bg-blue-900">
                                    <h3 class="text-secondary-400 font-semibold text-lg">Nama Pengurus 2</h3>
                                    <p class="text-white">Posisi</p>
                                </div>
                            </div>
                            <div class="flex-1 bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                                <img src="img/profile.jpg" alt="Pengurus 3" class="w-full h-60 object-cover">
                                <div class="p-4 bg-blue-900">
                                    <h3 class="text-secondary-400 font-semibold text-lg">Nama Pengurus 3</h3>
                                    <p class="text-white">Posisi</p>
                                </div>
                            </div>
                        </div>
        
                        <!-- Slide 2 (3 items) -->
                        <div class="flex w-full space-x-6 justify-between" style="flex: 0 0 50%;">
                            <div class="flex-1 bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                                <img src="img/profile.jpg" alt="Pengurus 4" class="w-full h-60 object-cover">
                                <div class="p-4 bg-blue-900">
                                    <h3 class="text-secondary-400 font-semibold text-lg">Nama Pengurus 4</h3>
                                    <p class="text-white">Posisi</p>
                                </div>
                            </div>
                            <div class="flex-1 bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                                <img src="img/profile.jpg" alt="Pengurus 5" class="w-full h-60 object-cover">
                                <div class="p-4 bg-blue-900">
                                    <h3 class="text-secondary-400 font-semibold text-lg">Nama Pengurus 5</h3>
                                    <p class="text-white">Posisi</p>
                                </div>
                            </div>
                            <div class="flex-1 bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                                <img src="img/profile.jpg" alt="Pengurus 6" class="w-full h-60 object-cover">
                                <div class="p-4 bg-blue-900">
                                    <h3 class="text-secondary-400 font-semibold text-lg">Nama Pengurus 6</h3>
                                    <p class="text-white">Posisi</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Tombol Prev -->
                    <button id="prevButton" class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-secondary-500 p-2 rounded-full hover:bg-secondary-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
        
                    <!-- Tombol Next -->
                    <button id="nextButton" class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-secondary-500 p-2 rounded-full hover:bg-secondary-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
        
                <!-- Indicator -->
                <div class="flex justify-center space-x-2 mt-4">
                    <span class="block w-3 h-3 bg-gray-400 rounded-full" id="indicator1"></span>
                    <span class="block w-3 h-3 bg-gray-400 rounded-full" id="indicator2"></span>
                </div>
            </div>
        </section>
          
        <!-- Gambar Struktur Organisasi -->
        <div id="struktur" class="mt-8">
            <img src="{{ asset('img/strukturorganisasi.png') }}" alt="Struktur Organisasi" class="mx-auto w-full max-w-4xl h-auto rounded-lg shadow-md">
        </div>

        <!-- 5 Isu Strategis -->
        <div id="isu-strategis" class="text-center p-6">
            <div class="text-center">
                <div class="relative inline-block">
                    <span class="absolute inset-x-0 top-0 h-9 bg-primary-300"></span>
                    <h2 class="relative text-[48px] font-bold text-black">5 Isu Strategis</h2>
                </div>
                                
            </div>

            <div class="mt-6">
                <img src="{{ asset('img/isu_strategis.png') }}" alt="5 Isu Strategis" class="mx-auto w-full max-w-4xl h-auto">
            </div>

        </div>
        

      </div>
    </div>
</section>
<script>
    const carousel = document.getElementById('pengurusCarousel');
    const totalSlides = 2; // Total jumlah slide (sesuaikan dengan jumlah slide)
    let currentIndex = 0;

    document.getElementById('nextButton').addEventListener('click', function() {
        if (currentIndex < totalSlides - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    });

    document.getElementById('prevButton').addEventListener('click', function() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalSlides - 1;
        }
        updateCarousel();
    });

    function updateCarousel() {
        const width = carousel.offsetWidth / totalSlides; // Set lebar setiap slide
        carousel.style.transform = `translateX(-${currentIndex * width}px)`;
        updateIndicators();
    }

    function updateIndicators() {
        document.getElementById('indicator1').classList.toggle('bg-gray-400', currentIndex !== 0);
        document.getElementById('indicator1').classList.toggle('bg-secondary-500', currentIndex === 0);

        document.getElementById('indicator2').classList.toggle('bg-gray-400', currentIndex !== 1);
        document.getElementById('indicator2').classList.toggle('bg-secondary-500', currentIndex === 1);
    }

    // Inisialisasi posisi carousel
    updateCarousel();
</script>

@endsection