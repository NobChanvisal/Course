<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $role = Auth::user()->role ?? null;
        if ($role === 'user') {
            return redirect()->intended(route('home', absolute: false));
        }
        return redirect()->intended(route('admin.dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // store role before logout
        $role = Auth::user()->role ?? null;

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // redirect based on role
        if ($role === 'admin') {
            return redirect()->route('login'); // admin login page
        }

        return redirect()->route('home'); // user homepage
    }

}
