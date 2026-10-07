<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Endpoint Login
    public function login(Request $request)
    {
        // Input Validation
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->only('email', 'password');

        // Verifikasi kredensial dan generate JWT token
        if (! $token = auth()->guard('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized / Kredensial salah'], 401);
        }

        return response()->json([
            'message' => 'Login berhasil',
            'token' => $token,
            'user' => auth()->guard('api')->user()
        ], 200);
    }

    // Endpoint Profile (Protected)
    public function profile()
    {
        return response()->json(auth()->guard('api')->user());
    }

    // Endpoint Logout
    public function logout()
    {
        auth()->guard('api')->logout();
        return response()->json(['message' => 'Successfully logged out']);
    }
}