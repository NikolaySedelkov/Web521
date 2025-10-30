<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request) {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8']
        ]);

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);

        $user->saveOrFail();

        $user->createToken('access', ['access-api']);
        Auth::login($user);
        
        $request->session()->regenerate();
        return redirect(route('home'));
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function login(Request $request) {
        $data = $request->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8']
        ]);

        $user = User::query()
            ->where('email', $data['email'])
            ->first();

        if(Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect(route('home'));
        }
    }

    public function showLogin(Request $request) {
        return view('auth.login');
    }

    public function logout(Request $request) {
        $user = $request->user();
        

        if($user && $token = $user->currentAccessToken()) {
            $token->delete();
        }

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
