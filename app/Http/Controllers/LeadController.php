<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
            ],
            'email' => [
                'required',
                'regex:/^[^<>{}()*$!;:=\[\]]+$/'
            ],
            'phone' => [
                'required',
                'regex:/^\+91[6-9]\d{9}$/'
            ],
            'subject' => [
                'nullable',
                'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
            ],
            'message' => [
                'nullable',
                'max:5000',
                'regex:/^(?!.*(<|>|script|onload|onclick|javascript:)).*$/i'
            ],

        ]);

        Lead::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'ip' => $request->ip(),

        ]);

        return redirect()->back()->with('success', 'Thankyou for contact us , We will et back to you soon !');

    }

}
