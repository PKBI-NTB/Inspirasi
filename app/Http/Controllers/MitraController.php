<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\RedirectResponse;

class MitraController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        // Get all mitra
        $mitra = Mitra::latest()->paginate(10);

    
        return view('admin.mitra.mitra', compact('mitra'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.mitra.create');
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
            'nama' => 'required|min:3',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:1024',
        ]);

        // Upload image
        $image = $request->file('image');
        $image->storeAs('mitra', $image->hashName(), 'public');

        // Create mitra
        Mitra::create([
            'nama' => $request->nama,
            'image' => $image->hashName(),
        ]);

        // Redirect to index
        return redirect()->route('admin.mitra.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        // Get mitra by ID
        $mitra = Mitra::findOrFail($id);

        // Delete image
        Storage::delete('public/mitra/' . $mitra->image);

        // Delete mitra
        $mitra->delete();

        // Redirect to index
        return redirect()->route('admin.mitra.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
