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
        // Validasi input
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        // Cek kredensial pengguna
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'USER GA ADAAAAAAAAAAAAA'], 401);
        }
    
        // Ambil pengguna yang sedang login
        $user = Auth::user();
    
        // Arahkan berdasarkan peran pengguna
        if ($user->role === 'staff') {
            return view('staff.dashboard');
        }

        if ($user->role === 'admin') {
            return view('admin.dashboard');
        }
    
        // Jika peran lain, arahkan ke halaman default
        return response()->json(['message' => 'User logged in successfully', 'user' => $user], 200);
    }
}
