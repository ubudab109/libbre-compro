<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->only('username', 'password'), [
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => true,
                'message' => $validator->errors()->all(),
                'data' => null,
            ], 422);
        }

        $user = User::where('username', $request->username)->first();
        if (!$user) {
            return response()->json([
                'error' => true,
                'message' => 'Username not found',
                'data' => null
            ], 400);
        }
        if (Hash::check($request->password, $user->password)) {
            $token = $user->createToken('user_token')->plainTextToken;
            return response()->json([
                'error' => false,
                'message' => 'Logged In Successfully',
                'data' => [
                    'token' => $token,
                    'user' => $user,
                ]
            ], 201);
        } else {
            return response()->json([
                'error' =>  true,
                'message' => 'Wrong Password',
                'data' => null
            ], 400);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(null, 204);
    }

    public function validateToken(Request $request)
    {
        return response()->json([
            'error' => false,
            'message' => 'Token is valid',
            'data' => $request->user()
        ], 200);
    }
}
