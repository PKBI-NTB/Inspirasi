<?php

namespace App\Http\Controllers;

use App\Models\Isu;
use App\Models\Program;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\RedirectResponse;

class IsuController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        // Get all isu
        $isu = Isu::latest()->paginate(5);

        // Return the view for admin and public, passing the same $isu
        return view('admin.isu.isu', compact('isu'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.isu.create');
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
            'isu' => 'required|min:3',
            'deskripsi' => 'required|min:10',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Upload image
        $image = $request->file(key: 'image');
        $image->storeAs('isu', $image->hashName(), 'public');

        // Create isu
        Isu::create([
            'isu' => $request->isu,
            'deskripsi' => $request->deskripsi,
            'image' => $image->hashName(),
        ]);

        // Redirect to index
        return redirect()->route('admin.isu.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        // Get isu by ID
        $isu = Isu::findOrFail($id);

        // Render view with isu
        return view('admin.isu.show', compact('isu'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        // Get isu by ID
        $isu = Isu::findOrFail($id);

        // Render view with isu
        return view('admin.isu.edit', compact('isu'));
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
        // Validate the form input
        $request->validate([
            'isu' => 'required|min:3',
            'deskripsi' => 'required|min:10',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Image is optional for update
        ]);

        // Find the isu by ID
        $isu = Isu::findOrFail($id);

        // Prepare data for update
        $updateData = [
            'isu' => $request->isu,
            'deskripsi' => $request->deskripsi,
        ];

        // Handle image update
        if ($request->hasFile('image')) {
            // Upload new image
            $image = $request->file('image');
            $image->storeAs('isu', $image->hashName(), 'public');

            // Delete old image
            if ($isu->image) {
                Storage::delete('public/isu/' . $isu->image);
            }

            // Add new image name to update data
            $updateData['image'] = $image->hashName();
        }

        // Update the isu
        $isu->update($updateData);

        // Redirect to index with success message
        return redirect()->route('admin.isu.index')->with(['success' => 'Data Berhasil Diubah!']);
    }



    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        // Get isu by ID
        $isu = Isu::findOrFail($id);

        // Delete image
        Storage::delete('public/isu/' . $isu->image);

        // Delete isu
        $isu->delete();

        // Redirect to index
        return redirect()->route('admin.isu.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    /**
     * Show a single program publicly.
     *
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    public function publicShow(string $id): View
    {
        // Find isu by ID
        $isu = Isu::findOrFail($id);

        $status = request()->query('status', 'semua');

        // Filter program berdasarkan status
        $programQuery = Program::where('isu', $isu->isu);  // Filter berdasarkan isu

        // Menambahkan kondisi filter status
        if ($status === 'sedang-berlangsung') {
            $programQuery->where('status', 'Sedang Berlangsung');
        } elseif ($status === 'telah-selesai') {
            $programQuery->where('status', 'Telah Selesai');
        }

        // Mendapatkan hasil query dengan pagination
        $program = $programQuery->paginate(10); // sesuaikan dengan pagination yang diinginkan

        // Show the isu detail page
        return view('isu.detail', compact('isu', 'program'));
    }
}
