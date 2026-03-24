<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NodalRegisteration;

class NodalRegisterationController extends Controller
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
                    'organization' => [
                        'required',
                        'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
                    ],
                    'city' => [
                        'required',
                        'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
                    ],
                    'state' => [
                        'required',
                        'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
                    ],
                    'address' => [
                        'required',
                        'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
                    ],
                    'password' => [
                        'required',
                        'regex:/^[a-zA-Z\s\.\-]{2,255}$/'
                    ],

                ]);

                NodalRegisteration::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'organization' => $request->organization,
                    'state' => $request->state,
                    'city' => $request->city,
                    'address' => $request->address,
                    'password' => $request->password,

                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for registration , We will get back to you soon!'
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
            'organization' => ['nullable', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'state' => ['nullable', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'city' => ['nullable', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'address' => ['nullable', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'password' => ['nullable', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],

        ]);

        NodalRegisteration::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'organization' => $request->organization,
            'state' => $request->state,
            'city' => $request->city,
            'address' => $request->address,
            'password' => $request->password,
        ]);

        return redirect()->back()->with('success', 'Thank you for Registration, We will get back to you soon!');
    }
}
