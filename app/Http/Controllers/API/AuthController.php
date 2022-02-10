<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    use ApiResponser;

    public function register(Request $request)
    {
        $validate = \Validator::make($request->all(),[
            'name' => 'bail|required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed'
        ]);
         if ($validate->fails()) {
            return $this->error($validate->errors(),401);
        }

            $user = User::create([
                'name' => $request['name'],
                'password' => bcrypt($request['password']),
                'email' => $request['email'],
                'role' => 'user'
            ]);

            // event(new Registered($user));
            return $this->success([
                'user' => $user->only(['id', 'name','email_verified_at']),
                'token' => $user->createToken('API Token')->plainTextToken
            ]);
        
    }

    public function login(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:6'
        ]);

        if (!Auth::attempt($attr)) {
            return $this->error('Email atau password anda salah!', 401);
        }

        return $this->success([
            'user' => auth()->user()->only(['id', 'name','email_verified_at']),
            'token' => auth()->user()->createToken('API Token')->plainTextToken
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
}
