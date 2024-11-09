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
        return view('admin.berita.berita', compact('berita'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.berita.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'judul'         => 'required|min:5',
            'penulis'       => 'required|min:5',
            'tanggal'       => 'required',
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi'     => 'required|min:10',
            'tags'          => 'required|min:5'
        ]);

        //upload image
        $image = $request->file(key: 'image');
        $image->storeAs('berita', $image->hashName(), 'public');

        //create berita
        Berita::create([
            'judul'         => $request->judul,
            'penulis'       => $request->penulis,
            'tanggal'       => $request->tanggal,
            'image'         => $image->hashName(),
            'deskripsi'     => $request->deskripsi,
            'tags'          => $request->tags,
        ]);

        //redirect to index
        return redirect()->route('admin.berita.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get berita by ID
        $berita = Berita::findOrFail($id);

        //render view with berita
        return view('admin.berita.show', compact('berita'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get berita by ID
        $berita = Berita::findOrFail($id);

        //render view with berita
        return view('admin.berita.edit', compact('berita'));
    }
        
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Validate form
        $request->validate([
            'judul'         => 'required|min:5',
            'penulis'       => 'required|min:5',
            'tanggal'       => 'required',
            'image'         => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Make image optional
            'deskripsi'     => 'required|min:10',
            'tags'          => 'required|min:5'
        ]);

        // Get berita by ID
        $berita = Berita::findOrFail($id);

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('berita', $image->hashName(), 'public');

            // Delete old image
            Storage::delete('public/berita/' . $berita->image);

            // Update berita with new image
            $berita->update([
                'judul'         => $request->judul,
                'penulis'       => $request->penulis,
                'tanggal'       => $request->tanggal,
                'image'         => $image->hashName(),
                'deskripsi'     => $request->deskripsi,
                'tags'          => $request->tags,
            ]);
        } else {
            // Update berita without changing the image
            $berita->update([
                'judul'         => $request->judul,
                'penulis'       => $request->penulis,
                'tanggal'       => $request->tanggal,
                'deskripsi'     => $request->deskripsi,
                'tags'          => $request->tags,
            ]);
        }

        // Redirect to index
        return redirect()->route('admin.berita.index')->with(['success' => 'Data Berhasil DiUbah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        //get berita by ID
        $berita = Berita::findOrFail($id);

        //delete image
        Storage::delete('public/berita/' . $berita->image);

        //delete berita
        $berita->delete();

        //redirect to index
        return redirect()->route('admin.berita.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
