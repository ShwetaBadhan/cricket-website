<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventCategory;
use Illuminate\Support\Facades\Storage;
class EventCategoryController extends Controller
{
    //
    public function index()
    {
        $eventCategories = EventCategory::latest()->get();
        return view('admin.views.admin-event-category', compact('eventCategories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:event_categories',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5048',
            'author' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|string',
            'status' => 'required|in:active,inactive'
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('event-category-images', 'public');
        }


        EventCategory::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $imagePath,
            'author' => $request->author,
            'date' => $request->date,
            'description' => $request->description,
            'status' => $request->status
        ]);

        return back()->with('success', 'Event category added successfully!');
    }
    public function update(Request $request, EventCategory $eventCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:event_categories,slug,' . $eventCategory->id,
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5048',
            'author' => 'required|string|max:255',
            'date' => 'required|date',
            'description' => 'required|string',
            'status' => 'required|in:active,inactive'
           
        ]);

        $imagePath = $eventCategory->image;
       
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('event-category-images', 'public');
        }

       

        $eventCategory->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $imagePath,
            'author' => $request->author,
            'date' => $request->date,
            'description' => $request->description,
            'status' => $request->status
        ]);

        return back()->with('success', 'Event category updated successfully!');
    }
    public function destroy(EventCategory $eventCategory)
    {
        if ($eventCategory->image) {
            Storage::disk('public')->delete($eventCategory->image);
        }

        
        $eventCategory->delete();

        return back()->with('success', 'Event category deleted successfully!');
    }
}
