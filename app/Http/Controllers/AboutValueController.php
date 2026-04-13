<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AboutValue;
class AboutValueController extends Controller
{
    //
    public function index()
    {
        $section = AboutValue::firstOrCreate(
            ['id' => 1],
            [
                'small_card_1_description' => 'To provide a platform where individuals can showcase their talent, compete with confidence, and grow through sports and talent contests.',
                'small_card_2_description' => 'To become a leading platform where emerging talents can be discovered and nurtured, and where excellence is encouraged, especially in the field of sports and talents.',
                'small_card_3_description' => 'We value fair competition, teamwork, passion, and equal opportunities, creating an environment where every talent gets the chance to shine..',
                'is_active' => true,
            ]
        );

        return view('admin.views.admin-about-values', compact('section'));
    }

    public function update(Request $request, AboutValue $section)
    {
        // dd($section);
        $validated = $request->validate([
            'small_card_1_description' => 'required|string',
            'small_card_2_description' => 'required|string',
            'small_card_3_description' => 'required|string',
        ]);

        $section->update($validated);

        return back()->with('success', 'Values section updated successfully!');
    }
}
