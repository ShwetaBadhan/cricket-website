<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameMatch;

use Illuminate\Support\Facades\Storage;
class GameMatchController extends Controller
{
    //
    public function index()
    {
        $matchResults = GameMatch::latest()->get();
        return view('admin.views.admin-match-results', compact('matchResults'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'team_1_name' => 'required',
            'team_2_name' => 'required',
            'sport_type' => 'required',
            'match_date' => 'required',
            'match_time' => 'required',
            'team_1_logo' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5048',
            'team_2_logo' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5048',
        ]);

        //  Upload Team 1 Logo
        $team1Logo = null;
        if ($request->hasFile('team_1_logo')) {
            $team1Logo = $request->file('team_1_logo')->store('matches', 'public');
        }

        //  Upload Team 2 Logo
        $team2Logo = null;
        if ($request->hasFile('team_2_logo')) {
            $team2Logo = $request->file('team_2_logo')->store('matches', 'public');
        }

        // Build Score JSON (based on your dynamic form)
        $scoreData = [];

        if ($request->sport_type == 'cricket') {
            $scoreData = [
                'team1' => [
                    'score' => $request->team1_score,
                    'overs' => $request->team1_overs,
                ],
                'team2' => [
                    'score' => $request->team2_score,
                    'overs' => $request->team2_overs,
                ]
            ];
        }

        if ($request->sport_type == 'football') {
            $scoreData = [
                'team1' => ['goals' => $request->team1_goals],
                'team2' => ['goals' => $request->team2_goals],
            ];
        }

        GameMatch::create([
            'title' => $request->title,
            'sport_type' => $request->sport_type,
            'match_type' => $request->match_type,
            'match_status' => $request->match_status,
            'status' => $request->status,

            'team_1_name' => $request->team_1_name,
            'team_2_name' => $request->team_2_name,

            'team_1_logo' => $team1Logo,
            'team_2_logo' => $team2Logo,

            'match_date' => $request->match_date,
            'match_time' => $request->match_time,
            'venue' => $request->venue,
            'result_text' => $request->result_text,

            'score_data' => $scoreData,
            'video_link' => $request->video_link,

            'is_featured' => $request->is_featured ?? 0,
            'is_published' => $request->is_published ?? 1,
        ]);

        return back()->with('success', 'Match created successfully!');
    }
    public function update(Request $request, $id)
    {
        $match = GameMatch::findOrFail($id);

        //  rebuild score JSON exactly like store
        $scoreData = [];

        if ($request->sport_type == 'cricket') {
            $scoreData = [
                'team1' => [
                    'score' => $request->team1_score,
                    'overs' => $request->team1_overs,
                ],
                'team2' => [
                    'score' => $request->team2_score,
                    'overs' => $request->team2_overs,
                ]
            ];
        }

        if ($request->sport_type == 'football') {
            $scoreData = [
                'team1' => [
                    'goals' => $request->team1_goals
                ],
                'team2' => [
                    'goals' => $request->team2_goals
                ]
            ];
        }

        //  image update (optional replace)
        if ($request->hasFile('team_1_logo')) {
            $team1Logo = $request->file('team_1_logo')->store('matches', 'public');
            $match->team_1_logo = $team1Logo;
        }

        if ($request->hasFile('team_2_logo')) {
            $team2Logo = $request->file('team_2_logo')->store('matches', 'public');
            $match->team_2_logo = $team2Logo;
        }

        $match->update([
            'title' => $request->title,
            'sport_type' => $request->sport_type,
            'match_type' => $request->match_type,
            'match_status' => $request->match_status,
            'team_1_name' => $request->team_1_name,
            'team_2_name' => $request->team_2_name,
            'match_date' => $request->match_date,
            'match_time' => $request->match_time,
            'venue' => $request->venue,
            'result_text' => $request->result_text,
            'video_link' => $request->video_link,
            'score_data' => $scoreData, //  THIS IS KEY FIX
            'is_featured' => $request->is_featured ?? 0,
            'is_published' => $request->is_published ?? 1,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Match updated successfully');
    }

    public function destroy($id)
    {
        $match = GameMatch::findOrFail($id);

        // Delete Team 1 Logo
        if ($match->team_1_logo && Storage::disk('public')->exists($match->team_1_logo)) {
            Storage::disk('public')->delete($match->team_1_logo);
        }

        // Delete Team 2 Logo
        if ($match->team_2_logo && Storage::disk('public')->exists($match->team_2_logo)) {
            Storage::disk('public')->delete($match->team_2_logo);
        }

        $match->delete();

        return back()->with('success', 'Match deleted successfully!');
    }
}
