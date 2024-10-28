@extends('layout.main')
@section('title', 'Profile')
@section('content')
<section class="py-8 ">
    <!-- Gambar besar di bagian atas -->
    <div class="mb-8 bg-blue-600">
      <img src="img/crowsel.png" alt="Foto Kegiatan InSPIRASI" class="w-full h-auto rounded-lg shadow-lg opacity-50">
    </div>
  
    <!-- Bagian bawah dengan dua kolom -->
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
      
      <!-- Kolom Kiri: Sub Materi -->
        <div class="lg:col-span-1 ">
        <!-- Bagian atas dengan background kuning -->
            <div class="bg-secondary-500 p-6 rounded-t-lg shadow-lg">
                <h3 class="text-xl font-bold text-black">Sub Materi</h3>
            </div>
        
        <!-- Bagian bawah dengan background kuning keputihan -->
            <div class="bg-yellow-50 p-6 rounded-b-lg shadow-lg">
                <ul class="space-y-2">
                 <li><a href="#sejarah" class="text-black hover:text-blue-600">Sejarah Singkat</a></li>
                 <li><a href="#visi-misi" class="text-black hover:text-blue-600">Visi & Misi</a></li>
                 <li><a href="#pengurus" class="text-black hover:text-blue-600">Pengurus</a></li>
                 <li><a href="#struktur" class="text-black hover:text-blue-600">Struktur Organisasi</a></li>
                 <li><a href="#isu-strategis" class="text-black hover:text-blue-600">5 Isu Strategis</a></li>
                </ul>
            </div>
        </div>
      
  
      <!-- Kolom Kanan: Sejarah, Visi Misi, Pengurus, dll -->
      <div class="lg:col-span-2 space-y-8">
        
        <!-- Sejarah Singkat -->
        <div id="sejarah" class="bg-white p-6 rounded-lg shadow-lg">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-black relative inline-block mb-8">
                    <span class="relative z-10">Sejarah Singkat</span>
                    <!-- Background Effect for Title -->
                    <span class="absolute inset-x-0 bottom-0 h-2 bg-blue-300 z-0"></span>
                  </h2>
                                
            </div>
          <div class="flex items-start gap-6 mb-3">
            <div class="flex-shrink-0">
              <img src="img/inspirasi.png" alt="Logo InSPIRASI NTB" class="w-70 h-auto">
            </div>
            <div class="text-gray-700 text-lg text-justify">
              <p>  Pada awalnya aktivis perempuan di NTB berkumpul mendiskusikan tentang situasi dan kasus-kasus yang dialami perempuan di NTB. Kemudian pada tahun 2009, beberapa aktivis perempuan mendirikan lembaga yang diberi nama Institut Perempuan untuk Perubahan Sosial (InSPIRASI) NTB sebagai bentuk keprihatinan terhadap situasi kekerasan serta kompleksitas persoalan yang dihadapi perempuan NTB diberbagai sektor. <br><br>   Disingkat InSPIRASI karena disadari bahwa NTB merupakan Provinsi yang mampu melahirkan perempuan dengan gerakan perubahan yang inovatif, berkemajuan untuk perubahan sosial yang membumi.</p>
            </div>
           
          </div>
          <div class="text-gray-700 text-lg text-justify">
            <p>  Untuk memperkuat posisi dan peranannya secara hukum, disepakati melegalkan lembaga ini. Pada tahun 2009 dibentuk menjadi sebuah lembaga yang berbadan hukum dengan nama Institut Perempuan untuk Perubahan Sosial (InSPIRASI) Nusa Tenggara Barat yang diperpanjang pada hari Kamis, tanggal 28 Desember tahun 2017 melalui notaris Munawir Asari, SH. <br><br>  Lembaga InSPIRASI NTB berubah menjadi Yayasan InSPIRASI NTB pada hari Selasa tanggal 23 April 2024 melalui notaris Baiq Yuni Indah Damayanti, SH,. M.Kn dan sudah didaftarkan di Kemenkumham.</p>
          </div>
        </div>

        <!-- Visi & Misi -->
        <div id="visi-misi" class="bg-white p-6 border-2  rounded-lg shadow-lg">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-black relative inline-block mb-8">
                    <span class="relative z-10">Visi & Misi</span>
                    <!-- Background Effect for Title -->
                    <span class="absolute inset-x-0 bottom-0 h-2 bg-blue-300 z-0"></span>
                  </h2>
                                
            </div>
            
        
            <!-- Bagian Visi -->
            <div class="mb-6">
                <h3 class="text-2xl font-semibold flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                    Visi
                </h3>
                <p class="text-gray-700 leading-relaxed mt-2">
                    Terwujudnya masyarakat sipil yang kuat, khususnya gerakan perempuan yang berperan aktif dalam pembangunan yang berkeadilan, inklusif, dan berkelanjutan.
                </p>
            </div>
        
            <!-- Bagian Misi -->
            <div>
                <h3 class="text-2xl font-semibold flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M13 5v6a1 1 0 001 1h3m5 6h-6a1 1 0 01-1-1v-3a1 1 0 011-1h6m-7 6h2" />
                    </svg>
                    Misi
                </h3>
                <ul class="list-decimal pl-6 text-gray-700 space-y-2 mt-2">
                    <li>Mengembangkan pendidikan kritis diberbagai sektor khususnya perempuan, untuk memperkuat partisipasi mereka dalam pengambilan keputusan.</li>
                    <li>Mengadvokasi kebijakan yang berpihak pada kesetaraan gender dan keadilan sosial.</li>
                    <li>Mendorong pemberdayaan ekonomi perempuan melalui program-program berbasis komunitas.</li>
                    <li>Meningkatkan kesadaran masyarakat terhadap pentingnya kesehatan reproduksi dan perlindungan hak asasi perempuan.</li>
                    <li>Membangun jaringan solidaritas antara organisasi masyarakat sipil yang berfokus pada isu perempuan dan kesetaraan gender.</li>
                </ul>
            </div>
        </div>
        

        <!-- Pengurus -->
        <section class="py-8 bg-white">
            <div class="container mx-auto text-center">
                <!-- Judul -->
                <h2 class="text-4xl font-bold text-black  relative inline-block mb-8">
                    <span class="relative z-10">Pengurus</span>
                    <!-- Background Effect for Title -->
                    <span class="absolute inset-x-0 bottom-0 h-2 bg-blue-300 z-0"></span>
                </h2>
        
                <!-- Carousel Wrapper -->
                <div class="relative overflow-hidden">
                    <!-- Carousel Items -->
                    <div id="pengurusCarousel" class="flex transition-transform ease-out duration-500" style="width: 200%;">
        
                        <!-- Slide 1 (3 items) -->
                        <div class="flex w-full space-x-6 justify-between" style="flex: 0 0 50%;">
                            <div class="flex-1 bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                                <img src="img/profile.jpg" alt="Pengurus 1" class="w-full h-60 object-cover">
                                <div class="p-4 bg-blue-900">
                                    <h3 class="text-yellow-400 font-semibold text-lg">Nama Pengurus 1</h3>
                                    <p class="text-white">Posisi</p>
                                </div>
                            </div>
                            <div class="flex-1 bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                                <img src="img/profile.jpg" alt="Pengurus 2" class="w-full h-60 object-cover">
                                <div class="p-4 bg-blue-900">
                                    <h3 class="text-yellow-400 font-semibold text-lg">Nama Pengurus 2</h3>
                                    <p class="text-white">Posisi</p>
                                </div>
                            </div>
                            <div class="flex-1 bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                                <img src="img/profile.jpg" alt="Pengurus 3" class="w-full h-60 object-cover">
                                <div class="p-4 bg-blue-900">
                                    <h3 class="text-yellow-400 font-semibold text-lg">Nama Pengurus 3</h3>
                                    <p class="text-white">Posisi</p>
                                </div>
                            </div>
                        </div>
        
                        <!-- Slide 2 (3 items) -->
                        <div class="flex w-full space-x-6 justify-between" style="flex: 0 0 50%;">
                            <div class="flex-1 bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                                <img src="img/profile.jpg" alt="Pengurus 4" class="w-full h-60 object-cover">
                                <div class="p-4 bg-blue-900">
                                    <h3 class="text-yellow-400 font-semibold text-lg">Nama Pengurus 4</h3>
                                    <p class="text-white">Posisi</p>
                                </div>
                            </div>
                            <div class="flex-1 bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                                <img src="img/profile.jpg" alt="Pengurus 5" class="w-full h-60 object-cover">
                                <div class="p-4 bg-blue-900">
                                    <h3 class="text-yellow-400 font-semibold text-lg">Nama Pengurus 5</h3>
                                    <p class="text-white">Posisi</p>
                                </div>
                            </div>
                            <div class="flex-1 bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                                <img src="img/profile.jpg" alt="Pengurus 6" class="w-full h-60 object-cover">
                                <div class="p-4 bg-blue-900">
                                    <h3 class="text-yellow-400 font-semibold text-lg">Nama Pengurus 6</h3>
                                    <p class="text-white">Posisi</p>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <!-- Tombol Prev -->
                    <button id="prevButton" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-yellow-500 p-2 rounded-full hover:bg-yellow-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
        
                    <!-- Tombol Next -->
                    <button id="nextButton" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-yellow-500 p-2 rounded-full hover:bg-yellow-600 transition-colors">
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
          
          <!-- Struktur Organisasi -->
        
        
          <div id="struktur" class="text-center p-6 bg-white rounded-lg shadow-lg">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-black relative inline-block mb-8">
                    <span class="relative z-10">Struktur Organisasi</span>
                    <!-- Background Effect for Title -->
                    <span class="absolute inset-x-0 bottom-0 h-2 bg-blue-300 z-0"></span>
                  </h2>
                                
            </div>
        
          <div class="grid grid-cols-3 gap-6">
            <div class="bg-secondary-200 p-4 rounded-lg shadow-md">Pengawas</div>
            <div class="bg-secondary-300 p-4 rounded-lg shadow-md">Direktur</div>
            <div class="bg-gray-400 p-4 rounded-lg shadow-md">Divisi-divisi</div>
          </div>
        </div>

        <!-- 5 Isu Strategis -->
        <div id="isu-strategis" class="text-center p-8 bg-gray-50">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-black relative inline-block mb-8">
                    <span class="relative z-10">5 Isu Strategis</span>
                    <!-- Background Effect for Title -->
                    <span class="absolute inset-x-0 bottom-0 h-2 bg-blue-300 z-0"></span>
                  </h2>
                                
            </div>
        
            <div class="space-y-6">
        
                <!-- Isu Strategis 1 -->
                <div class="flex bg-red-200 p-6 rounded-lg shadow-md">
                    <div class="flex-shrink-0 w-16 h-16 bg-red-400 flex items-center justify-center rounded-full text-white text-3xl">1</div>
                    <div class="ml-6 text-left">
                        <h3 class="text-xl font-semibold text-red-600">Kesetaraan Gender dan Inklusif</h3>
                        <p class="text-gray-700">InSPIRASI NTB percaya bahwa kesetaraan gender adalah kunci untuk mencapai masyarakat yang inklusif dan adil.</p>
                    </div>
                </div>
        
                <!-- Isu Strategis 2 -->
                <div class="flex bg-blue-200 p-6 rounded-lg shadow-md">
                    <div class="flex-shrink-0 w-16 h-16 bg-blue-400 flex items-center justify-center rounded-full text-white text-3xl">2</div>
                    <div class="ml-6 text-left">
                        <h3 class="text-xl font-semibold text-blue-600">Pemberdayaan Ekonomi Perempuan</h3>
                        <p class="text-gray-700">Pemberdayaan ekonomi perempuan merupakan fokus utama untuk menciptakan peluang usaha dan akses ke sumber daya.</p>
                    </div>
                </div>
        
                <!-- Isu Strategis 3 -->
                <div class="flex bg-green-200 p-6 rounded-lg shadow-md">
                    <div class="flex-shrink-0 w-16 h-16 bg-green-400 flex items-center justify-center rounded-full text-white text-3xl">3</div>
                    <div class="ml-6 text-left">
                        <h3 class="text-xl font-semibold text-green-600">Kesehatan Reproduksi dan Hak Asasi</h3>
                        <p class="text-gray-700">Akses terhadap kesehatan reproduksi adalah hak dasar setiap individu untuk mencapai kualitas hidup yang lebih baik.</p>
                    </div>
                </div>
        
                <!-- Isu Strategis 4 -->
                <div class="flex bg-secondary-200 p-6 rounded-lg shadow-md">
                    <div class="flex-shrink-0 w-16 h-16 bg-secondary-600 flex items-center justify-center rounded-full text-white text-3xl">4</div>
                    <div class="ml-6 text-left">
                        <h3 class="text-xl font-semibold text-secondary-600">Partisipasi Perempuan dalam Kepemimpinan</h3>
                        <p class="text-gray-700">Peningkatan partisipasi perempuan dalam pengambilan keputusan menjadi prioritas untuk mencapai keseimbangan gender di semua sektor.</p>
                    </div>
                </div>
        
                <!-- Isu Strategis 5 -->
                <div class="flex bg-purple-200 p-6 rounded-lg shadow-md">
                    <div class="flex-shrink-0 w-16 h-16 bg-purple-400 flex items-center justify-center rounded-full text-white text-3xl">5</div>
                    <div class="ml-6 text-left">
                        <h3 class="text-xl font-semibold text-purple-600">Perlindungan Hukum dan Keadilan Gender</h3>
                        <p class="text-gray-700">Mendorong perlindungan hukum yang adil dan berpihak pada isu-isu gender merupakan upaya utama untuk mencapai keadilan sosial.</p>
                    </div>
                </div>
        
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
        document.getElementById('indicator1').classList.toggle('bg-yellow-500', currentIndex === 0);

        document.getElementById('indicator2').classList.toggle('bg-gray-400', currentIndex !== 1);
        document.getElementById('indicator2').classList.toggle('bg-yellow-500', currentIndex === 1);
    }

    // Inisialisasi posisi carousel
    updateCarousel();
</script>


@endsection