<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AlbumController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        // Get all album
        $album = Album::latest()->paginate(10);

    
        return view('admin.album.album', compact('album'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.album.create');
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
            'image' => 'required|image|mimes:jpeg,jpg,png|max:1024',
        ]);

        // Upload image
        $image = $request->file('image');
        $image->storeAs('album', $image->hashName(), 'public');

        // Create album
        Album::create([
            'image' => $image->hashName(),
        ]);

        // Redirect to index
        return redirect()->route('admin.album.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        // Get album by ID
        $album = Album::findOrFail($id);

        // Delete image
        Storage::delete('public/album/' . $album->image);

        // Delete mitra
        $album->delete();

        // Redirect to index
        return redirect()->route('admin.album.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
