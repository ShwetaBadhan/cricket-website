<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;
use App\Models\Bid;
class AuctionController extends Controller
{
    //
    public function index()
    {
        $auctions = Auction::where('status', 'live')->get();
        return view('admin.views.admin-auction', compact('auctions'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'player_name' => 'required',
            'base_price' => 'required|integer'
        ]);

        // image upload
        $image = null;
        if ($request->hasFile('player_image')) {
            $image = $request->file('player_image')->store('players', 'public');
        }

        Auction::create([
            'player_name' => $request->player_name,
            'player_image' => $image,
            'base_price' => $request->base_price,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Auction created');
    }
    public function update(Request $request, $id)
    {
        $auction = Auction::findOrFail($id);

        if ($request->hasFile('player_image')) {
            $image = $request->file('player_image')->store('players', 'public');
            $auction->player_image = $image;
        }

        $auction->update([
            'player_name' => $request->player_name,
            'base_price' => $request->base_price,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Auction updated');
    }
    public function destroy($id)
    {
        $auction = Auction::findOrFail($id);
        $auction->delete();

        return back()->with('success', 'Deleted');
    }
    public function placeBid(Request $request, $id)
    {
        $auction = Auction::findOrFail($id);

        $request->validate([
            'bidder_name' => 'required',
            'bid_amount' => 'required|integer'
        ]);

        $current = $auction->current_bid ?? $auction->base_price;

        if ($request->bid_amount <= $current) {
            return back()->with('error', 'Bid must be higher than current bid');
        }

        // Save bid
        Bid::create([
            'auction_id' => $auction->id,
            'bidder_name' => $request->bidder_name,
            'bid_amount' => $request->bid_amount,
        ]);

        // Update auction
        $auction->update([
            'current_bid' => $request->bid_amount,
            'highest_bidder' => $request->bidder_name,
        ]);

        return back()->with('success', 'Bid placed successfully!');
    }
}
