<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Admin\AuthService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function index()
    {
        return view('pages.admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $this->authService->login($credentials, $request->boolean('remember'));

        return redirect()->intended(route('admin.dashboard'))
            ->with('success', 'Welcome back, Admin!');
    }

    public function logout()
    {
        $this->authService->logout();
        return redirect()->route('login');
    }
}
