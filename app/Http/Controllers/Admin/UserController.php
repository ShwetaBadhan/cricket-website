<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    //    show all users
    public function index()
    {
        $users = User::latest()->get();
        $roles = Role::all();

        return view('admin.views.admin-users', compact('users', 'roles'));
    }

    //   add user
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'role' => 'required'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->assignRole($request->role);

        return redirect()->back()->with('success', 'User created successfully');

    }
    // update
    public function update(Request $request, User $user)
    {

        $request->validate([
            'name' => 'required',
            'email' => "required|email|unique:users,email,$user->id",
            'role' => 'required',
            'status' => 'required|in:0,1'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status
        ];

        // update password only if entered
        if (!empty($request->password)) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        $user->syncRoles([$request->role]);

        return redirect()->back()->with('success', 'User updated successfully');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }
}