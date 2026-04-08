<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeBenefit;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class HomeBenefitController extends Controller
{
    //
    public function index()
    {
        $section = HomeBenefit::firstOrCreate(
            ['id' => 1],
            [
                'main_title' => 'JSL Cricket Facilities',
                'small_card_1_title' => 'Professional Training',
                'small_card_1_description' => 'Structured training sessions and expert coaching to improve your cricket skills.',
                'small_card_2_title' => 'Tournament Opportunities',
                'small_card_2_description' => 'Compete in league matches and tournaments to display your skills.',
                'small_card_3_title' => 'Career Opportunities',
                'small_card_3_description' => 'Progress from block-level competitions to district and state-level championships.',
                'small_card_4_title' => 'Recognition & Exposure',
                'small_card_4_description' => 'Professionalized league matches to gain visibility, rewards and recognition.',
                'is_active' => true,
            ]
        );

        return view('admin.views.admin-home-benefits', compact('section'));
    }

    public function update(Request $request, HomeBenefit $section)
    {
        // dd($section);
        $validated = $request->validate([
            'main_title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'small_card_1_title' => 'required|string|max:255',
            'small_card_2_title' => 'required|string|max:255',
            'small_card_3_title' => 'required|string|max:255',
            'small_card_4_title' => 'required|string|max:255',
            'small_card_1_description' => 'required|string',
            'small_card_2_description' => 'required|string',
            'small_card_3_description' => 'required|string',
            'small_card_4_description' => 'required|string',
            'small_card_1_image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'small_card_2_image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'small_card_3_image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'small_card_4_image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        // MAIN IMAGE
        if ($request->hasFile('image')) {
            if ($section->image) {
                Storage::disk('public')->delete($section->image);
            }

            $validated['image'] = $request->file('image')->store('home_benefits', 'public');
        }

        // SMALL CARDS
        for ($i = 1; $i <= 4; $i++) {
            $field = "small_card_{$i}_image";

            if ($request->hasFile($field)) {
                if ($section->$field) {
                    Storage::disk('public')->delete($section->$field);
                }

                $validated[$field] = $request->file($field)->store('home_benefits', 'public');
            }
        }

        $section->update($validated);

        return back()->with('success', 'Benefit section updated successfully!');
    }
}
