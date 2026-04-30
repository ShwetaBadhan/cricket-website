<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auction;


class AuctionController extends Controller
{
    //
    public function index()
    {
        $auctions = Auction::latest()->get();

        return view('admin.views.admin-auction', compact('auctions'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'player_name' => 'required',
            'base_price' => 'required|numeric',
            'category' => 'required',
        ]);

        // if unsold → winning bid null
        if ($request->result == 'unsold') {
            $request->merge(['winning_bid' => null]);
        }

        Auction::create([
            'player_name' => $request->player_name,
            'base_price' => $request->base_price,
            'winning_bid' => $request->winning_bid,
            'category' => $request->category,
            'result' => $request->result,
            'is_active' => 1
        ]);

        return back()->with('success', 'Player added');
    }
    public function update(Request $request, $id)
    {
        $auction = Auction::findOrFail($id);

        if ($request->result == 'unsold') {
            $request->merge(['winning_bid' => null]);
        }

        $auction->update($request->all());

        return back()->with('success', 'Updated');
    }
    public function destroy($id)
    {
        Auction::findOrFail($id)->delete();

        return back()->with('success', 'Deleted');
    }
    public function toggleStatus($id)
    {
        $player = Auction::findOrFail($id);

        $player->is_active = !$player->is_active;
        $player->save();

        return response()->json([
            'status' => 'success',
            'is_active' => $player->is_active
        ]);
    }
}
