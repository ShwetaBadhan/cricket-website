<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSlider;
use Illuminate\Support\Facades\Storage;
class HomeSliderController extends Controller
{
    //
    public function index()
    {
        $sliders = HomeSlider::latest()->get();
        return view('admin.views.admin-home-slider', compact('sliders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5048',
            'caption' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive'
        ]);

        $path = $request->file('image')->store('slider', 'public');

        HomeSlider::create([
            'image' => $path,
            'caption' => $request->caption,
            'status' => $request->status
        ]);

        return back()->with('success', 'Image added to Slider!');
    }

    public function update(Request $request, HomeSlider $slider)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5048',
            'caption' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive'
        ]);

        $data = [
            'caption' => $request->caption,
            'status' => $request->status
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::disk('public')->delete($slider->image);
            $data['image'] = $request->file('image')->store('slider', 'public');
        }

        $slider->update($data);

        return back()->with('success', 'Image updated successfully!');
    }

    public function destroy(HomeSlider $slider)
    {
        Storage::disk('public')->delete($slider->image);
        $slider->delete();

        return back()->with('success', 'Image deleted permanently!');
    }
}
