<?php

namespace App\Http\Controllers;
use App\Models\HomeWorkSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class HomeWorkSectionController extends Controller
{
    //
    public function index()
    {
        $workSection = HomeWorkSection::firstOrCreate(
            [],
            [
                'main_title' => 'How We Work',
                'step_1' => 'JSL Register',
                'description_1' => 'Players or teams complete the online registration by submitting their details, contact information, and registration fee to join the league.',
                'step_2'=>'JSL Compete',
                'description_2' => 'Participants take part in block-level matches and tournaments, where teams compete and showcase their skills.',
                'step_3'=>'JSL Advance',
                'description_3'=>'Top performers advance from Block → District → State Level, gaining recognition and opportunities to grow in their sports career.',
                'is_active' => true
            ]
        );

        return view('admin.views.admin-home-work', compact('workSection'));
    }

    public function update(Request $request)
    {
        $workSection = HomeWorkSection::firstOrFail();

        $request->validate([

            'main_title' => 'required|string|max:200',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'step_1' => 'required|string|max:200',
            'description_1' => 'required|string',
            'step_2' => 'required|string|max:200',
            'description_2' => 'required|string',
            'step_3' => 'required|string|max:200',
            'description_3' => 'required|string',
            'is_active' => 'boolean'
        ]);

        $data = $request->only([

            'main_title',
            'step_1',
            'description_1',
            'step_2',
            'description_2',
            'step_3',
            'description_3',
            'is_active'
        ]);

        // Handle main image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($workSection->image && Storage::disk('public')->exists($workSection->image)) {
                Storage::disk('public')->delete($workSection->image);
            }

            $imagePath = $request->file('image')->store('work-sections', 'public');
            $data['image'] = $imagePath;

            // Log for debugging
            Log::info('Main image uploaded: ' . $imagePath);
        }

       


        $workSection->update($data);

        return back()->with('success', 'How we Work section updated successfully!');
    }
}
