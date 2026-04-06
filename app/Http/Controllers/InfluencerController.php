<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Influencer;
class InfluencerController extends Controller
{

    public function index()
    {
        $influencers = Influencer::latest()->get();
        return view('admin.views.admin-influencer', compact('influencers'));
    }
    //
    public function store(Request $request)
    {
        if ($request->ajax()) {

            try {

                // GOOGLE CAPTCHA VERIFY
                $recaptcha = $request->input('g-recaptcha-response');

                $response = Http::asForm()->post(
                    'https://www.google.com/recaptcha/api/siteverify',
                    [
                        'secret' => env('RECAPTCHA_SECRET_KEY'),
                        'response' => $recaptcha,
                        'remoteip' => $request->ip(),
                    ]
                );

                $result = $response->json();

                if (!$result['success'] || $result['score'] < 0.5) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Captcha verification failed'
                    ], 422);
                }

                // VALIDATION
                $request->validate([
                    'name' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
                    'email' => ['required', 'email'],
                    'phone' => ['required', 'digits:10'],
                    'state' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
                    'city' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
                    'facebook' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
                    'instagram' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
                    'youtube' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
                    'other' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
                    'message' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,900}$/'],

                ]);

                // STORE DATA
                Influencer::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'state' => $request->state,
                    'city' => $request->city,
                    'facebook' => $request->facebook,
                    'instagram' => $request->instagram,
                    'youtube' => $request->youtube,
                    'other' => $request->other,
                    'message' => $request->message,
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Registration submitted successfully!'
                ]);

            } catch (\Illuminate\Validation\ValidationException $e) {

                return response()->json([
                    'success' => false,
                    'errors' => $e->errors()
                ], 422);

            } catch (\Exception $e) {

                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong'
                ], 500);
            }
        }
    }
}
