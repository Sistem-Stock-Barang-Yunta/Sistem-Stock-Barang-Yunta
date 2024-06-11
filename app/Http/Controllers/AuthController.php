<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Handle registration request
     */

    public function formlogin()
    {
        return view('auth.login');
    }

    public function formregister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:admin,staff', // Pastikan role hanya 'admin' atau 'staff'
        ]);
    
        // Pastikan role yang disimpan adalah sesuai dengan yang dipilih oleh pengguna
        $role = $request->role === 'admin' ? 'admin' : 'staff';
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $role, // Simpan role sesuai dengan yang dipilih oleh pengguna
        ]);
    
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
    
        $user = Auth::user();
    
        if ($user->role === 'staff') {
            return view('frontend.staff.dashboard');
        }
    
        return response()->json(['message' => 'User logged in successfully', 'user' => $user], 200);
    }
    
}
