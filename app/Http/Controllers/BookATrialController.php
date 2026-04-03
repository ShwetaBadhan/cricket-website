<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookATrial;
use Illuminate\Support\Facades\Http;
class BookATrialController extends Controller
{

    // to get data
    public function index()
    {
        $trials = BookATrial::latest()->get();
        return view('admin.views.admin-booking', compact('trials'));
    }
    // to store data
    public function store(Request $request)
    {
        if ($request->ajax()) {

            try {

                // Verify reCAPTCHA
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
                        'message' => 'reCAPTCHA verification failed. Please try again.'
                    ], 422);
                }

                // Validation
                $request->validate([
                    'name' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
                    'email' => ['required', 'email'],
                    'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
                    'sports' => ['required', 'string'],
                    'dob' => ['required', 'date'],
                    'gender' => ['required', 'string'],
                    'level' => ['required', 'string'],
                    'message' => ['nullable', 'max:1000'],
                ]);

                // Store
                BookATrial::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'sports' => $request->sports,
                    'dob' => $request->dob,
                    'gender' => $request->gender,
                    'level' => $request->level,
                    'message' => $request->message,
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Trial booked successfully!'
                ]);

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

        // Fallback (non-AJAX)

        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
            'sports' => ['required', 'string'],
            'dob' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'level' => ['required', 'string'],
            'message' => ['nullable', 'max:1000'],
        ]);

        BookATrial::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'sports' => $request->sports,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'level' => $request->level,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Trial booked successfully!');
    }
    // delete function
    public function destroy(BookATrial $trial)
    {
        $trial->delete();
        return redirect()->route('admin-booking')->with('success', 'Trial lead deleted successfully!');
    }
    // for multiple delete
    public function deleteSelected(Request $request)
    {
        $ids = $request->input('ids');
        BookATrial::whereIn('id', $ids)->delete();
        return response()->json(['success' => 'Selected trial leads deleted successfully!']);
    }
}
