<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Sponsor;
class SponsorController extends Controller
{
    //
    //
    public function index()
    {
        $sponsors = Sponsor::latest()->get();
        return view('admin.views.admin-sponsor', compact('sponsors'));
    }
    public function store(Request $request)
    {
        if ($request->ajax()) {

            try {

                // CAPTCHA TOKEN
                $recaptcha = $request->input('g-recaptcha-response');

                if (!$recaptcha) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Captcha token missing'
                    ], 422);
                }

                // VERIFY CAPTCHA
                $response = Http::asForm()->post(
                    'https://www.google.com/recaptcha/api/siteverify',
                    [
                        'secret' => env('RECAPTCHA_SECRET_KEY'),
                        'response' => $recaptcha,
                        'remoteip' => $request->ip(),
                    ]
                );

                $result = $response->json();

                if (!$result['success'] || ($result['score'] ?? 0) < 0.5) {
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
                    'address' => ['required', 'string', 'max:255'],

                    'company_name' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
                    'company_website' => ['required', 'url'],
                    'company_address' => ['required', 'string', 'max:255'],
                    'company_phone' => ['required', 'digits:10'],

                    'message' => ['nullable', 'string', 'max:900'],
                ]);

                // STORE
                Sponsor::create($request->all());

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
    public function destroy(Sponsor $sponsor)
    {
        $sponsor->delete();
        return redirect()->back()->with('success', 'Sponsor deleted successfully!');
    }
    // multiple delete function
    public function deleteSelected(Request $request)
    {
        if (!$request->ids || count($request->ids) == 0) {
            return response()->json(['error' => true, 'message' => 'No IDs received']);
        }

        Sponsor::whereIn('id', $request->ids)->delete();

        return response()->json(['success' => true, 'message' => 'Deleted successfully']);
    }
}
