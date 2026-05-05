<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequiredDocument;
class RequiredDocumentController extends Controller
{
    //
    public function index()
    {
        $section = RequiredDocument::firstOrCreate(
            ['id' => 1],
            [
                'main_title_1' => 'Our Mission',
                'main_title_2' => 'Our Vision',
                'main_title_3' => 'Our Values',
                'main_title_4' => 'Our Commitment',
                'sub_title_1' => 'To provide a platform where individuals can showcase their talent, compete with confidence, and grow through sports and talent contests.',
                'sub_title_2' => 'To become a leading platform where emerging talents can be discovered and nurtured, and where excellence is encouraged, especially in the field of sports and talents.',
                'sub_title_3' => 'We value fair competition, teamwork, passion, and equal opportunities, creating an environment where every talent gets the chance to shine..',
                'sub_title_4' => 'We value fair competition, teamwork, passion, and equal opportunities, creating an environment where every talent gets the chance to shine..',
                'small_card_1_description' => 'To provide a platform where individuals can showcase their talent, compete with confidence, and grow through sports and talent contests.',
                'small_card_2_description' => 'To become a leading platform where emerging talents can be discovered and nurtured, and where excellence is encouraged, especially in the field of sports and talents.',
                'small_card_3_description' => 'We value fair competition, teamwork, passion, and equal opportunities, creating an environment where every talent gets the chance to shine..',
                'small_card_4_description' => 'We value fair competition, teamwork, passion, and equal opportunities, creating an environment where every talent gets the chance to shine..',
                'is_active' => true,
            ]
        );

        return view('admin.views.admin-required-documents', compact('section'));
    }

    public function update(Request $request, RequiredDocument $section)
    {
        // dd($section);
        $validated = $request->validate([
            'main_title_1' => 'required|string|max:200',
            'main_title_2' => 'required|string|max:200',
            'main_title_3' => 'required|string|max:200',
            'main_title_4' => 'required|string|max:200',
            'sub_title_1' => 'required|string',
            'sub_title_2' => 'required|string',
            'sub_title_3' => 'required|string',
            'sub_title_4' => 'required|string',
            'small_card_1_description' => 'required|string',
            'small_card_2_description' => 'required|string',
            'small_card_3_description' => 'required|string',
            'small_card_4_description' => 'required|string',
        ]);

        $section->update($validated);

        return back()->with('success', 'Required documents section updated successfully!');
    }
}
