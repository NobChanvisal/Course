<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::with(['profile', 'personalInfo'])->get();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::with(['profile', 'personalInfo'])->findOrFail($id);
        return view('users.show', compact('user'));
    }
    
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'avatar' => 'nullable|image|max:2048',
            'bio' => 'nullable|string|max:1000',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'DOB' => 'nullable|date',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        $avatar = null;
        if ($request->hasFile('avatar')) {
            $avatar = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('images/avatars'), $avatar);
        }
        $user->profile()->create([
                'avatar' => 'images/avatars/' . $avatar,
                'bio' => $validatedData['bio'] ?? null,
        ]);

        $user->personalInfo()->create([
            'phone' => $validatedData['phone'] ?? null,
            'address' => $validatedData['address'] ?? null,
            'DOB' => $validatedData['DOB'] ?? null,
        ]);
        
        
        return redirect()
            ->route('users.index')
            ->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::with(['profile', 'personalInfo'])->findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'avatar' => 'nullable|image|max:2048',
            'bio' => 'nullable|string|max:1000',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'DOB' => 'nullable|date',
        ]);

        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
        ]);

        // Update password only if provided
        if (!empty($validatedData['password'])) {
            $user->update(['password' => bcrypt($validatedData['password'])]);
        }

        if ($request->hasFile('avatar')) {
            $avatar = time().'.'.$request->avatar->extension();
            $request->avatar->move(public_path('images/avatars'), $avatar);
        }

        $user->profile()->update([
            'avatar' => isset($avatar) ? 'images/avatars/' . $avatar : $user->profile->avatar,
            'bio' => $validatedData['bio'] ?? null,
        ]);

        $user->personalInfo()->update([
            'phone' => $validatedData['phone'] ?? null,
            'address' => $validatedData['address'] ?? null,
            'DOB' => $validatedData['DOB'] ?? null,
        ]);

        return redirect()
            ->route('users.index')
            ->with('success', 'User updated successfully.');
    }

}
