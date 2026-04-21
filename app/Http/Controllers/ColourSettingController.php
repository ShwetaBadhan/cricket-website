<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ColourSetting;
use Illuminate\Support\Facades\Cache;
class ColourSettingController extends Controller
{
    //
    public function index()
    {

        $colourSetting = ColourSetting::first();

        if (!$colourSetting) {
            $colourSetting = ColourSetting::create([
                'primary_color' => null,
                'secondary_color' => null,
                'gradient_colors' => [],
                'light_color1' => null,
                'light_color2' => null,
                'primary_button_color' => null,
                'is_active' => true
            ]);
        }

        return view('admin.views.admin-colour-setting', compact('colourSetting'));
    }

    public function update(Request $request)
    {
        $colourSetting = ColourSetting::first();

        if (!$colourSetting) {
            return redirect()->back()->with('error', 'Colour settings not found.');
        }

        $request->validate([
            'primary_color' => ['nullable', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
            'secondary_color' => ['nullable', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
            'gradient_colors' => 'nullable|array',
            'gradient_colors.*' => ['nullable', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
            'light_color1' => ['nullable', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
            'light_color2' => ['nullable', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
            'primary_button_color' => ['nullable', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/']
        ]);

        $data = $request->only([
            'primary_color',
            'secondary_color',
            'light_color1',
            'light_color2',
            'primary_button_color'                    
        ]);

        $data['gradient_colors'] = collect($request->gradient_colors)
            ->filter()
            ->values()
            ->toArray();

        $data['gradient_colors'] = !empty($data['gradient_colors'])
            ? $data['gradient_colors']
            : null;

        $data['is_active'] = $request->has('is_active');

        $colourSetting->update($data);

        Cache::forget('theme_settings');

        return redirect()->back()->with('success', 'Colour settings updated successfully.');
    }





}
