<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeAboutSection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class HomeAboutSectionController extends Controller
{
    //
    public function index()
    {
        $aboutSection = HomeAboutSection::firstOrCreate(
            [],
            [
                'main_title' => 'Where Every Game Turns into Glory',
                'description_1' => 'The Jharkhand Super League (JSL) is a premier platform where talent meets opportunities. Our mission is to provide individuals with a stage to showcase their skills, compete with passion, and celebrate excellence.',
                'description_2' => 'From exciting sporting events like Cricket, Football, and Marathon to exciting talent hunts like Dance, Modeling, and Singing, JSL brings together participants from different backgrounds to discover their potential and shine. In our view, each talent deserves to get a stage and every dream deserves a platform.',
                'is_active' => true
            ]
        );

        return view('admin.views.admin-home-about', compact('aboutSection'));
    }

    public function update(Request $request)
    {
        $aboutSection = HomeAboutSection::firstOrFail();

        $request->validate([

            'main_title' => 'required|string|max:200',
            'description_1' => 'required|string',
            'description_2' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'side_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'boolean'
        ]);

        $data = $request->only([

            'main_title',
            'description_1',
            'description_2',
            'is_active'
        ]);

        // Handle main image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($aboutSection->image && Storage::disk('public')->exists($aboutSection->image)) {
                Storage::disk('public')->delete($aboutSection->image);
            }

            $imagePath = $request->file('image')->store('about-sections', 'public');
            $data['image'] = $imagePath;

            // Log for debugging
            Log::info('Main image uploaded: ' . $imagePath);
        }

        // Handle icon 1 upload
        if ($request->hasFile('side_image')) {
            if ($aboutSection->side_image && Storage::disk('public')->exists($aboutSection->side_image)) {
                Storage::disk('public')->delete($aboutSection->side_image);
            }
            $data['side_image'] = $request->file('side_image')->store('about-sections-side', 'public');
        }


        $aboutSection->update($data);

        return back()->with('success', 'About section updated successfully!');
    }
}
