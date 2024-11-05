<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserSignInController extends Controller
{
    public function userSignIn(Request $request)
    {
        return response()->json([
            'first_name' => 'test',
            'last_name' => 're',
            'user_token' => 'sa'
        ]);
    }
}
