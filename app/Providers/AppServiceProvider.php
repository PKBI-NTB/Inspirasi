<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Berita;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Ambil berita terbaru (berita pertama), jika ada
        $beritaTerbaru = Berita::latest()->first();

        // Jika berita terbaru ditemukan, ambil berita lainnya kecuali yang terbaru
        if ($beritaTerbaru) {
            $beritaLainnya = Berita::where('id', '!=', $beritaTerbaru->id)
                                ->latest()
                                ->paginate(6);
        } else {
            // Jika tidak ada berita terbaru, ambil semua berita dengan pagination
            $beritaLainnya = Berita::latest()->paginate(6);
        }

        // Share data ke semua view
        View::share('beritaTerbaru', $beritaTerbaru);
        View::share('beritaLainnya', $beritaLainnya);
    }
}
