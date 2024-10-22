<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all berita
        $berita = Berita::latest()->paginate(10);

        //render view with Berita
        return view('admin.berita', compact('berita'));
    }
}
