<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtpVerificationController extends Controller
{
    public function show(Request $request)
    {
        return view('auth.verify-code', ['email' => session('email')]);
    }

    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required'
        ]);

        $user = User::where('email', $request->email)
                    ->where('email_verification_code', $request->code)
                    ->first();

        if (!$user) {
            return back()->withErrors(['code' => 'Kode salah atau tidak valid']);
        }

        $user->email_verified_at = now();
        $user->email_verification_code = null;
        $user->save();

        Auth::login($user);
        return redirect('/dashboard');
    }
}

