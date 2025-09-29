<?php

namespace App\Http\Controllers\Auth;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'avatar' => ['required','image','mimes:jpg,jpeg,png,webp','max:2048'],
        ]);

        $user = $request->user();
        $path = $request->file('avatar')->store('uploads/avatars', 'public');

        // optional: remove old avatar
        if ($user->image) {
            Storage::disk($user->image->disk)->delete($user->image->path);
            $user->image()->delete();
        }

        $user->image()->create([
            'disk' => 'public',
            'path' => $path,
            'original_name' => $request->file('avatar')->getClientOriginalName(),
            'mime' => $request->file('avatar')->getMimeType(),
            'size' => $request->file('avatar')->getSize(),
            'is_primary' => true,
        ]);

        return back()->with('success', 'Avatar updated successfully.');
    }

    public function update(Request $request, Image $image)
    {
        $request->validate([
            'avatar' => ['required','image','mimes:jpg,jpeg,png,webp','max:2048'],
        ]);

        $file = $request->file('avatar');

        // delete old file
        Storage::disk($image->disk)->delete($image->path);

        // store new file
        $path = $file->store('uploads/avatars', 'public');

        // update record
        $image->update([
            'path'          => $path,
            'original_name' => $file->getClientOriginalName(),
            'mime'          => $file->getClientMimeType(),
            'size'          => $file->getSize(),
        ]);

        return back()->with('success','Avatar updated successfully.');
    }
}
