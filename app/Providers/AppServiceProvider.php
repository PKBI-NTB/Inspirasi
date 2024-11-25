<?php

namespace App\Providers;

use App\Models\Berita;
use App\Models\Program;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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

        // Ambil status dari query string
        $status = request()->query('status', 'semua');

        // Filter program berdasarkan status
        $programQuery = Program::query();

        if ($status === 'sedang-berlangsung') {
            $programQuery->where('status', 'Sedang Berlangsung');
        } elseif ($status === 'telah-selesai') {
            $programQuery->where('status', 'Telah Selesai');
        }
        
        $ambilprogram = Program::all();
        $program = $programQuery->latest()->paginate(9);
        $programTerbaru = Program::latest()->first();
        $totalProgram = $ambilprogram->count();
        $programBerlangsung = $ambilprogram->where('status', 'Sedang Berlangsung')->count();
        $programSelesai = $ambilprogram->where('status', 'Telah Selesai')->count();

        // Share data ke semua view
        View::share('beritaTerbaru', $beritaTerbaru);
        View::share('beritaLainnya', $beritaLainnya);
        View::share('program', $program);
        View::share('selectedStatus', $status);
        View::share('totalProgram', $totalProgram);
        View::share('programBerlangsung', $programBerlangsung);
        View::share('programSelesai', $programSelesai);
        View::share('programTerbaru', $programTerbaru);
    }

}
