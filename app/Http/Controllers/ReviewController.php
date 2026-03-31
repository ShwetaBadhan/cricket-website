<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
class ReviewController extends Controller
{
    //
    public function index()
    {
        $reviews = Review::latest()->get();
        return view('admin.views.admin-reviews', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'tweet' => 'required|string',
            'tweet_id' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'status' => 'required|in:active,inactive'
        ]);

        Review::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'tweet' => $request->tweet,
            'tweet_id' => $request->tweet_id,
            'date' => $request->date,
            'status' => $request->status
        ]);

        return back()->with('success', 'Review added successfully!');
    }
    public function update(Request $request, Review $review)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'tweet' => 'required|string',
            'tweet_id' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'status' => 'required|in:active,inactive'
        ]);

        $review->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'tweet' => $request->tweet,
            'tweet_id' => $request->tweet_id,
            'date' => $request->date,
            'status' => $request->status
        ]);

        return back()->with('success', 'Review updated successfully!');
    }
    public function destroy(Review $review)
    {
        $review->delete();
        return back()->with('success', 'Review deleted successfully!');
    }
}
