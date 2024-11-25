<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ProgramController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        // Get all program
        $program = Program::latest()->paginate(10);

        // Return the view for admin and public, passing the same $program
        return view('admin.program.program', compact('program'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.program.create');
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
            'nama_program' => 'required|min:3',
            'lokasi' => 'required|min:3',
            'status' => 'required|min:3',
            'deskripsi' => 'required|min:10',
            'tujuan' => 'required|min:3',
            'durasi' => 'required|min:3',
            'mitra.*' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Upload mitra images
        $mitraImages = [];
        if ($request->hasFile('mitra')) {
            foreach ($request->file('mitra') as $mitra) {
                $mitra->storeAs('program/mitra', $mitra->hashName(), 'public');
                $mitraImages[] = $mitra->hashName();
            }
        }

        // Upload image
        $image = $request->file('image');
        $image->storeAs('program', $image->hashName(), 'public');

        // Create program
        Program::create([
            'nama_program' => $request->nama_program,
            'lokasi' => $request->lokasi,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'tujuan' => $request->tujuan,
            'durasi' => $request->durasi,
            'mitra' => json_encode($mitraImages),
            'image' => $image->hashName(),
        ]);

        // Redirect to index
        return redirect()->route('admin.program.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        // Get program by ID
        $program = Program::findOrFail($id);

        // Render view with program
        return view('admin.program.show', compact('program'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        // Get program by ID
        $program = Program::findOrFail($id);

        // Render view with program
        return view('admin.program.edit', compact('program'));
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
        // Validate the form input
        $request->validate([
            'nama_program' => 'required|min:3',
            'lokasi' => 'required|min:3',
            'status' => 'required|min:3',
            'deskripsi' => 'required|min:10',
            'tujuan' => 'required|min:3',
            'durasi' => 'required|min:3',
            'mitra.*' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Validate each mitra image
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Optional image
        ]);

        // Find the program by ID
        $program = Program::findOrFail($id);

        // Prepare data for update
        $updateData = [
            'nama_program' => $request->nama_program,
            'lokasi' => $request->lokasi,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'tujuan' => $request->tujuan,
            'durasi' => $request->durasi,
        ];

        // Handle the main image update
        if ($request->hasFile('image')) {
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('program', $image->hashName(), 'public');

            // Delete old image
            if ($program->image) {
                Storage::delete('public/program/' . $program->image);
            }

            // Add new image name to update data
            $updateData['image'] = $image->hashName();
        }

        // Handle the mitra images update
        if ($request->hasFile('mitra')) {
            // Delete old mitra images
            if ($program->mitra) {
                foreach (json_decode($program->mitra, true) as $oldMitra) {
                    Storage::delete('public/program/mitra/' . $oldMitra);
                }
            }

            // Upload new mitra images
            $mitraImages = [];
            foreach ($request->file('mitra') as $mitra) {
                $mitra->storeAs('program/mitra', $mitra->hashName(), 'public');
                $mitraImages[] = $mitra->hashName();
            }

            // Add new mitra images to update data
            $updateData['mitra'] = json_encode($mitraImages);
        }

        // Update the program
        $program->update($updateData);

        // Redirect to index with success message
        return redirect()->route('admin.program.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $program = Program::findOrFail($id);

        // Delete image
        Storage::delete('public/program/' . $program->image);

        // Delete berita
        $program->delete();

        // Redirect to index
        return redirect()->route('admin.program.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    /**
     * Public show method to show a single berita
     * 
     * @param string $id
     * @return View
     */
    public function publicShow(string $id): View
    {
        // Dapatkan berita berdasarkan ID
        $program = Program::findOrFail($id);

        // Kirim data ke view
        return view('program.detail', compact('program'));
    }

}
