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
            'mitra' => 'required|min:3',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

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
            'mitra' => $request->mitra,
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
        // Validate form
        $request->validate([
            'nama_program' => 'required|min:3',
            'lokasi' => 'required|min:3',
            'status' => 'required|min:3',
            'deskripsi' => 'required|min:10',
            'tujuan' => 'required|min:3',
            'durasi' => 'required|min:3',
            'mitra' => 'required|min:3',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Optional image
        ]);

        // Get program by ID
        $program = Program::findOrFail($id);

        // Check if image is uploaded
        if ($request->hasFile('image')) {
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('program', $image->hashName(), 'public');

            // Delete old image
            Storage::delete('public/program/' . $program->image);

            // Update program with new image
            $program->update([
                'nama_program' => $request->nama_program,
                'lokasi' => $request->lokasi,
                'status' => $request->status,
                'deskripsi' => $request->deskripsi,
                'tujuan' => $request->tujuan,
                'durasi' => $request->durasi,
                'mitra' => $request->mitra,
                'image' => $image->hashName(),
            ]);
        } else {
            // Update program without changing the image
            $program->update([
                'nama_program' => $request->nama_program,
                'lokasi' => $request->lokasi,
                'status' => $request->status,
                'deskripsi' => $request->deskripsi,
                'tujuan' => $request->tujuan,
                'durasi' => $request->durasi,
                'mitra' => $request->mitra,
            ]);
        }

        // Redirect to index
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

}
