<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpFoundation\RedirectResponse;

class KontakController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        // Get all kontak
        $kontak = Kontak::latest()->paginate(1);

        // Return the view for admin and public, passing the same $kontak
        return view('admin.kontak.kontak', compact('kontak'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.kontak.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate form
        $request->validate([
            'telpon' => 'required|min:5',
            'alamat' => 'required|min:5',
            'email' => 'required|min:5',
            'url_instagram' => 'required|min:1',
            'url_facebook' => 'required|min:1',
            'url_tiktok' => 'required|min:1',
            'url_youtube' => 'required|min:1',
        ]);

        // Create kontak
        Kontak::create([
            'telpon' => $request->telpon,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'url_instagram' => $request->url_instagram,
            'url_facebook' => $request->url_facebook,
            'url_tiktok' => $request->url_tiktok,
            'url_youtube' => $request->url_youtube,
        ]);

        // Redirect to index
        return redirect()->route('admin.kontak.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        // Get kontak by ID
        $kontak = Kontak::findOrFail($id);

        // Render view with kontak
        return view('admin.kontak.edit', compact('kontak'));
    }


    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        // Validate form
        $request->validate([
            'telpon' => 'required|min:5',
            'alamat' => 'required|min:5',
            'email' => 'required|email|min:5',
            'url_instagram' => 'required|min:1',
            'url_facebook' => 'required|min:1',
            'url_tiktok' => 'required|min:1',
            'url_youtube' => 'required|min:1',
        ]);

        // Get kontak by ID
        $kontak = Kontak::findOrFail($id);

        // Update kontak data
        $kontak->update([
            'telpon' => $request->telpon,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'url_instagram' => $request->url_instagram,
            'url_facebook' => $request->url_facebook,
            'url_tiktok' => $request->url_tiktok,
            'url_youtube' => $request->url_youtube,
        ]);

        // Redirect to index with success message
        return redirect()->route('admin.kontak.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

}
