<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    //
    public function index()
    {
        $teams = Team::latest()->get();
        return view('admin.views.admin-team', compact('teams'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5048',
            'designation' => 'required|string',
            'description' => 'required|string',
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'status' => 'required|in:active,inactive'
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team-images', 'public');
        }

        Team::create([
            'name' => $request->name,
            'image' => $imagePath,
            'designation' => $request->designation,
            'description' => $request->description,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'status' => $request->status
        ]);

        return back()->with('success', 'Team member added successfully!');
    }
    public function update(Request $request, Team $team){   
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5048',
            'designation' => 'required|string',
            'description' => 'required|string',
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'status' => 'required|in:active,inactive'
        ]);

        $imagePath = $team->image;

        if ($request->hasFile('image')) {
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }
            $imagePath = $request->file('image')->store('team-images', 'public');
        }

        $team->update([
            'name' => $request->name,
            'image' => $imagePath,
            'designation' => $request->designation,
            'description' => $request->description,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'status' => $request->status
        ]);

        return back()->with('success', 'Team member updated successfully!');

    }
    public function destroy(Team $team)
    {
        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }

        $team->delete();
        return back()->with('success', 'Team member deleted successfully!');
    }
   
}
