<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlayerRegistration;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
class PlayerRegistrationController extends Controller
{
    //
     public function index()
    {
        $playerRegistrations = PlayerRegistration::latest()->get();
        return view('admin.views.admin-player-registration', compact('playerRegistrations'));
    }

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
                    'organization' => ['required', 'string', 'max:255'],
                    'state' => ['required', 'string', 'max:255'],
                    'city' => ['required', 'string', 'max:255'],
                    'address' => ['required', 'string', 'max:500'],
                    'password' => ['required', 'min:6', 'confirmed'],
                ]);

                // STORE DATA
                PlayerRegistration::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'organization' => $request->organization,
                    'state' => $request->state,
                    'city' => $request->city,
                    'address' => $request->address,
                    'password' => Hash::make($request->password),
                    'ip' => $request->ip(),
                    'status' => 'inactive',
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
    // delete function
    public function destroy(PlayerRegistration $nodalRegistration)
    {
        $nodalRegistration->delete();
        return redirect()->back()->with('success', 'Nodal registration deleted successfully!');
    }
    // multiple delete function
    public function deleteSelected(Request $request)
    {
        if (!$request->ids || count($request->ids) == 0) {
            return response()->json(['error' => true, 'message' => 'No IDs received']);
        }

        PlayerRegistration::whereIn('id', $request->ids)->delete();

        return response()->json(['success' => true, 'message' => 'Deleted successfully']);
    }
}
