<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organizer;
use Illuminate\Support\Facades\Storage;

class OrganizerController extends Controller
{
    //
    public function index()
    {
        $organizers = Organizer::latest()->get();
        return view('admin.views.admin-organizer', compact('organizers'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tag' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5048',
            'designation' => 'required|string',
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'status' => 'required|in:active,inactive'
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('organizer-images', 'public');
        }

        Organizer::create([
            'name' => $request->name,
            'tag' => $request->tag,
            'image' => $imagePath,
            'designation' => $request->designation,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'status' => $request->status
        ]);

        return back()->with('success', 'Organizer added successfully!');
    }
    public function update(Request $request, Organizer $organizer)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tag' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5048',
            'designation' => 'required|string',
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'status' => 'required|in:active,inactive'
        ]);
        $imagePath = $organizer->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('organizer-images', 'public');
        }

        $organizer->update([
            'name' => $request->name,
            'tag' => $request->tag,
            'image' => $imagePath,
            'designation' => $request->designation,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'status' => $request->status
        ]);

        return back()->with('success', 'Organizer updated successfully!');
    }
    

    public function destroy(Organizer $organizer)
    {
        if ($organizer->image) {
            Storage::disk('public')->delete($organizer->image);
        }

        $organizer->delete();

        return back()->with('success', 'Organizer deleted successfully!');
    }
}
