<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    //
    public function store(Request $request)
    {
        // Check if request is AJAX
        if ($request->ajax()) {
            try {
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
                        'regex:/^[6-9]\d{9}$/'
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

                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for contacting us, We will get back to you soon!'
                ], 200);

            } catch (\Illuminate\Validation\ValidationException $e) {
                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong. Please try again.'
                ], 500);
            }
        }

        // Normal form submission (fallback)
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'email' => ['required', 'regex:/^[^<>{}()*$!;:=\[\]]+$/'],
            'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
            'subject' => ['nullable', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'message' => ['nullable', 'max:5000', 'regex:/^(?!.*(<|>|script|onload|onclick|javascript:)).*$/i'],
        ]);

        Lead::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'ip' => $request->ip(),
        ]);

        return redirect()->back()->with('success', 'Thank you for contacting us, We will get back to you soon!');
    }

}
