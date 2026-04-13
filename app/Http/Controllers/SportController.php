<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sport;
use Illuminate\Support\Facades\Storage;
class SportController extends Controller
{
    //
    public function index()
    {
        $Sports = Sport::latest()->get();
        return view('admin.views.admin-Sports', compact('Sports'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:Sports',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5048',
            'description' => 'required|string',
            'benefits' => 'required|string',
            'rules' => 'required|string',
            'status' => 'required|in:active,inactive'
        ]);

        $imagePath = null;
       

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('Sport-images', 'public');
        }

                                                         
        Sport::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'image' => $imagePath,
            'description' => $request->description,
            'Benefits' => $request->benefits,
            'Rules' => $request->rules,
            'status' => $request->status
        ]);

        return back()->with('success', 'Sport added successfully!');
    }
    public function update(Request $request, Sport $sport)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:Sports,slug,' . $sport->id,
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5048',
            'description' => 'required|string',
            'benefits' => 'required|string',
            'rules' => 'required|string',
            'status' => 'required|in:active,inactive'
        ]);

        $imagePath = $sport->image;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('Sport-images', 'public');
        }

       

        $sport->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'image' => $imagePath,
            'description' => $request->description,
            'benefits' => $request->benefits,
            'rules' => $request->rules,
            'status' => $request->status
        ]);

        return back()->with('success', 'Sport updated successfully!');
    }
    public function destroy(Sport $sport)
    {
        if ($sport->image) {
            Storage::disk('public')->delete($sport->image);
        }


        $sport->delete();

        return back()->with('success', 'Sport deleted successfully!');
    }
}
