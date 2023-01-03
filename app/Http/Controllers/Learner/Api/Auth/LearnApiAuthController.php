<?php

namespace App\Http\Controllers\Learner\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LearnApiAuthController extends Controller
{
    public function login(Request $request)
    {
        \Config::set('auth.defaults.guard', 'learner');
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            $learner = Auth::user();
            $access_token = $learner->createToken('learner')->plainTextToken;
            return response()->json(['status' => 1, 'learner' => $learner, 'token' => $access_token]);
        } else {
            return response()->json(['status' => 2, 'message' => 'Somethin Wrong!']);
        }
    }
}
