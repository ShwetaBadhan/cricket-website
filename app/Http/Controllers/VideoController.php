<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    //
    public function index()
    {
        $videos = Video::latest()->get();
        return view('admin.views.admin-video', compact('videos'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'video' => 'required|file|mimes:mp4,avi,mov|max:20000',
            'thumbnail' => 'required|image|mimes:png,jpg,jpeg,webp|max:5048',
            'status' => 'required|in:active,inactive'
        ]);

        $videoPath = null;
        $thumbnailPath = null;

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('videos', 'public');
        }

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('video-thumbnails', 'public');
        }

        Video::create([
            'video' => $videoPath,
            'thumbnail' => $thumbnailPath,
            'status' => $request->status
        ]);

        return back()->with('success', 'Video added successfully!');
    }
    public function update(request $request, Video $video)
    {
        $request->validate([
            'video' => 'nullable|file|mimes:mp4,avi,mov|max:20000',
            'thumbnail' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5028',
            'status' => 'required|in:active,inactive'
        ]);

        $videoPath = $video->video;
        $thumbnailPath = $video->thumbnail;

        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('videos', 'public');
        }

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('video-thumbnails', 'public');
        }

        $video->update([
            'video' => $videoPath,
            'thumbnail' => $thumbnailPath,
            'status' => $request->status
        ]);

        return back()->with('success', 'Video updated successfully!');
    }
    public function destroy(Video $video)
{
    $video->delete();
    return back()->with('success', 'Video deleted successfully!');
}
}
