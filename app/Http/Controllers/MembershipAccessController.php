<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use App\Models\MembershipAccess;
class MembershipAccessController extends Controller
{
    //
    public function index()
    {
        $membershipAccessRequests = MembershipAccess::latest()->get();
        return view('admin.views.admin-membership', compact('membershipAccessRequests'));
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
                    'plans' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
                    'benefits' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
                    'occupation' => ['required', 'regex:/^[a-zA-Z\s\.\-]{2,255}$/'],
                    'notes' => ['required', 'string', 'max:900'],
                ]);

                // STORE DATA
                MembershipAccess::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'plan' => $request->plans,
                    'benefits' => $request->benefits,
                    'occupation' => $request->occupation,
                    'notes' => $request->notes,
                    'ip' => $request->ip(),
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
    public function destroy(MembershipAccess $membershipAccess)
    {
        $membershipAccess->delete();
        return redirect()->back()->with('success', 'Membership Access Request deleted successfully!');
    }
    // multiple delete function
    public function deleteSelected(Request $request)
    {
        if (!$request->ids || count($request->ids) == 0) {
            return response()->json(['error' => true, 'message' => 'No IDs received']);
        }

        MembershipAccess::whereIn('id', $request->ids)->delete();

        return response()->json(['success' => true, 'message' => 'Deleted successfully']);
    }
}
