<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Carbon\Carbon;
class BeritaController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        // Get all berita
        $berita = Berita::latest()->paginate(10);

        // Return the view for admin and public, passing the same $berita
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
        // Validate form
        $request->validate([
            'judul' => 'required|min:5',
            'penulis' => 'required|min:5',
            'tanggal' => 'required|date', // Validasi tanggal
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'deskripsi' => 'required|min:10',
            'tags' => 'required|min:5'
        ]);

        // Format tanggal
        $formattedDate = Carbon::parse($request->tanggal)->locale('id')->translatedFormat('l, d F Y');

        // Upload image
        $image = $request->file('image');
        $image->storeAs('berita', $image->hashName(), 'public');

        // Create berita
        Berita::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tanggal' => $formattedDate, // Simpan tanggal yang sudah diformat
            'image' => $image->hashName(),
            'deskripsi' => $request->deskripsi,
            'tags' => $request->tags,
        ]);

        // Redirect to index
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
        // Get berita by ID
        $berita = Berita::findOrFail($id);

        // Render view with berita
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
        // Get berita by ID
        $berita = Berita::findOrFail($id);

        // Render view with berita
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
            'judul' => 'required|min:5',
            'penulis' => 'required|min:5',
            'tanggal' => 'required|date', // Validasi tanggal
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Make image optional
            'deskripsi' => 'required|min:10',
            'tags' => 'required|min:5'
        ]);

        // Get berita by ID
        $berita = Berita::findOrFail($id);

        // Format tanggal
        $formattedDate = Carbon::parse($request->tanggal)->locale('id')->translatedFormat('l, d F Y');

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('berita', $image ->hashName(), 'public');

            // Delete old image
            Storage::delete('public/berita/' . $berita->image);

            // Update berita with new image
            $berita->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'tanggal' => $formattedDate, // Simpan tanggal yang sudah diformat
                'image' => $image->hashName(),
                'deskripsi' => $request->deskripsi,
                'tags' => $request->tags,
            ]);
        } else {
            // Update berita without changing the image
            $berita->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'tanggal' => $formattedDate, // Simpan tanggal yang sudah diformat
                'deskripsi' => $request->deskripsi,
                'tags' => $request->tags,
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
        // Get berita by ID
        $berita = Berita::findOrFail($id);

        // Delete image
        Storage::delete('public/berita/' . $berita->image);

        // Delete berita
        $berita->delete();

        // Redirect to index
        return redirect()->route('admin.berita.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    /**
     * Public show method to show a single berita
     * 
     * @param string $id
     * @return View
     */
    public function publicShow(string $id): View
    {
        // Get berita by ID for public view
        $berita = Berita::findOrFail($id);
        return view('berita.detailberita', compact('berita'));
    }
    
}