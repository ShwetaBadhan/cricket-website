<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SelectionProcess;
class SelectionProcessController extends Controller
{
    public function index()
    {
        $section = SelectionProcess::firstOrCreate(
            ['id' => 1],
            [
                'step_1' => ' Application Submission',
                'step_2' => ' Initial Screening',
                'step_3' => ' Interview Process',
                'step_4' => ' Final Evaluation',
                'step_5' => ' Selection Announcement',
                'is_active' => true,
            ]
        );

        return view('admin.views.admin-selection-process', compact('section'));
    }

    public function update(Request $request, SelectionProcess $section)
    {
        // dd($section);
        $validated = $request->validate([
            'step_1' => 'required|string',
            'step_2' => 'required|string',
            'step_3' => 'required|string',
            'step_4' => 'required|string',
            'step_5' => 'required|string',
        ]);

        $section->update($validated);

        return back()->with('success', 'Selection process section updated successfully!');
    }
}
