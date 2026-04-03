<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Http;
class LeadController extends Controller
{
    //
    public function index()
    {
        $leads = Lead::latest()->get();
        return view('admin.views.admin-leads', compact('leads'));
    }
    public function store(Request $request)
    {
        // Check if request is AJAX
        if ($request->ajax()) {
            try {
                $recaptcha = $request->input('g-recaptcha-response');

                $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                    'secret' => env('RECAPTCHA_SECRET_KEY'),
                    'response' => $recaptcha,
                    'remoteip' => $request->ip(),
                ]);

                $result = $response->json();

                if (!$result['success'] || $result['score'] < 0.5) {
                    return response()->json([
                        'success' => false,
                        'message' => 'reCAPTCHA verification failed. Please try again.'
                    ], 422);
                }
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
    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->back()->with('success', 'Lead deleted successfully!');
    }
    public function deleteSelected(Request $request)
    {
        if (!$request->ids || count($request->ids) == 0) {
            return response()->json(['error' => true, 'message' => 'No IDs received']);
        }

        Lead::whereIn('id', $request->ids)->delete();

        return response()->json(['success' => true, 'message' => 'Deleted successfully']);
    }

}
