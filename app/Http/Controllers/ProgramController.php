<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Models\Isu;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        // Get all programs, paginated
        $program = Program::latest()->paginate(10);

        // Return the view for admin and public, passing the same $program
        return view('admin.program.program', compact('program'));
    }

    /**
     * Show the form for creating a new program.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('admin.program.create');
    }

    /**
     * Store a newly created program in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the form
        $request->validate([
            'nama_program' => 'required|min:3',
            'lokasi' => 'required|min:3',
            'status' => 'required|min:3',
            'deskripsi' => 'required|min:10',
            'tujuan' => 'required|min:3',
            'durasi' => 'required|min:3',
            'isu' => 'nullable|string|min:3', // Validate isu field
            'mitra.*' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Validate mitra images
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048', // Main program image
        ]);

        // Upload mitra images if any
        $mitraImages = [];
        if ($request->hasFile('mitra')) {
            foreach ($request->file('mitra') as $mitra) {
                $mitra->storeAs('program/mitra', $mitra->hashName(), 'public');
                $mitraImages[] = $mitra->hashName();
            }
        }

        // Upload the main program image
        $image = $request->file('image');
        $imagePath = $image->storeAs('program', $image->hashName(), 'public');

        // Create the program
        Program::create([
            'nama_program' => $request->nama_program,
            'lokasi' => $request->lokasi,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'tujuan' => $request->tujuan,
            'durasi' => $request->durasi,
            'isu' => $request->isu, // Store isu field
            'mitra' => json_encode($mitraImages), // Store mitra images as JSON
            'image' => basename($imagePath), // Store only the image filename
        ]);

        // Redirect to the index page
        return redirect()->route('admin.program.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Show the details of the specified program.
     *
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    public function show(string $id): View
    {
        // Find program by ID
        $program = Program::findOrFail($id);

        // Show the program details
        return view('admin.program.show', compact('program'));
    }

    /**
     * Show the form for editing the specified program.
     *
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    public function edit(string $id): View
    {
        // Get program by ID
        $program = Program::findOrFail($id);

        // Show the edit form
        return view('admin.program.edit', compact('program'));
    }

    /**
     * Update the specified program in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Validate form input
        $request->validate([
            'nama_program' => 'required|min:3',
            'lokasi' => 'required|min:3',
            'status' => 'required|min:3',
            'deskripsi' => 'required|min:10',
            'tujuan' => 'required|min:3',
            'durasi' => 'required|min:3',
            'isu' => 'nullable|string|min:3', // Validate isu field
            'mitra.*' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Validate mitra images
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Main image is optional
        ]);

        // Find the program by ID
        $program = Program::findOrFail($id);

        // Prepare update data
        $updateData = [
            'nama_program' => $request->nama_program,
            'lokasi' => $request->lokasi,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'tujuan' => $request->tujuan,
            'durasi' => $request->durasi,
            'isu' => $request->isu, // Update isu field
        ];

        // Handle main image update if provided
        if ($request->hasFile('image')) {
            // Upload new image
            $image = $request->file('image');
            $imagePath = $image->storeAs('program', $image->hashName(), 'public');

            // Delete the old image
            if ($program->image) {
                Storage::delete('public/program/' . $program->image);
            }

            // Update the image data
            $updateData['image'] = basename($imagePath);
        }

        // Handle mitra images update if provided
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

            // Update mitra images
            $updateData['mitra'] = json_encode($mitraImages);
        }

        // Update the program
        $program->update($updateData);

        // Redirect back to index with success message
        return redirect()->route('admin.program.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified program from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        // Find program by ID
        $program = Program::findOrFail($id);

        // Delete the main image
        if ($program->image) {
            Storage::delete('public/program/' . $program->image);
        }

        // Delete mitra images
        if ($program->mitra) {
            foreach (json_decode($program->mitra, true) as $mitra) {
                Storage::delete('public/program/mitra/' . $mitra);
            }
        }

        // Delete the program
        $program->delete();

        // Redirect to the program index page
        return redirect()->route('admin.program.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    /**
     * Show a single program publicly.
     *
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    public function publicShow(string $id): View
    {
        // Find program by ID
        $program = Program::findOrFail($id);

        // Show the program detail page
        return view('program.detail', compact('program'));
    }
}
