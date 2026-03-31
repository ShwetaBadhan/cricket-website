<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;
class PartnerController extends Controller
{
    //
    public function index()
    {
        $partners = Partner::latest()->get();
        return view('admin.views.admin-partner', compact('partners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,webp|max:5048',
            'caption' => 'nullable|string|max:255',
            'status' => 'required|in:active,inactive'
        ]);

        $path = $request->file('image')->store('partner', 'public');

        Partner::create([
            'image' => $path,
            'caption' => $request->caption,
            'status' => $request->status
        ]);

        return back()->with('success', 'Image added to partner!');
    }

    public function update(Request $request, Partner $partner)
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

            if ($partner->image && Storage::disk('public')->exists($partner->image)) {
                Storage::disk('public')->delete($partner->image);
            }

            $data['image'] = $request->file('image')->store('partner', 'public');
        }

        $partner->update($data);

        return back()->with('success', 'Image updated successfully!');
    }

    public function destroy(Partner $partner)
    {
        if ($partner->image && Storage::disk('public')->exists($partner->image)) {
            Storage::disk('public')->delete($partner->image);
        }

        $partner->delete();

        return back()->with('success', 'Image deleted permanently!');
    }
}
