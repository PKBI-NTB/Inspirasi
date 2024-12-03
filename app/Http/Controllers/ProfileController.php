<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ProfileController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        // Get all profile
        $profile = Profile::latest()->paginate(10);
    
        return view('admin.profile.profile', compact('profile'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.profile.create');
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
            'posisi' => 'required|min:3',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:1024',
        ]);

        // Upload image
        $image = $request->file('image');
        $image->storeAs('profile', $image->hashName(), 'public');

        // Create profile
        Profile::create([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'image' => $image->hashName(),
        ]);

        // Redirect to index
        return redirect()->route('admin.profile.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
 * edit
 *
 * @param  mixed $id
 * @return View
 */
public function edit($id): View
{
    // Get profile by ID
    $profile = Profile::findOrFail($id);

    return view('admin.profile.edit', compact('profile'));
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
        'nama' => 'required|min:3',
        'posisi' => 'required|min:3',
        'image' => 'nullable|image|mimes:jpeg,jpg,png|max:1024',
    ]);

    // Get profile by ID
    $profile = Profile::findOrFail($id);

    // Check if image is uploaded
    if ($request->hasFile('image')) {
        // Delete old image
        Storage::delete('public/profile/' . $profile->image);

        // Upload new image
        $image = $request->file('image');
        $image->storeAs('profile', $image->hashName(), 'public');

        // Update profile with new image
        $profile->update([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
            'image' => $image->hashName(),
        ]);
    } else {
        // Update profile without changing the image
        $profile->update([
            'nama' => $request->nama,
            'posisi' => $request->posisi,
        ]);
    }

    // Redirect to index
    return redirect()->route('admin.profile.index')->with(['success' => 'Data Berhasil Diupdate!']);
}


    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        // Get profile by ID
        $profile = Profile::findOrFail($id);

        // Delete image
        Storage::delete('public/profile/' . $profile->image);

        // Delete profile
        $profile->delete();

        // Redirect to index
        return redirect()->route('admin.profile.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
