<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use App\Models\ResetPasswordToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function getToken(Request $request)
    {
        $resetPasswordToken = new ResetPasswordToken();
        $resetPasswordToken->email = $request->email;
        $resetPasswordToken->token = Str::random(32);
        $resetPasswordToken->valid = 1;
        $resetPasswordToken->save();

        $user = User::where('email', $request->email)->first();

        $name = $user->name;
        $resetPasswordUrl = env("WEB_URL") . "/reset-password/" . $resetPasswordToken->token;
        Mail::to($request->email)->send(new ResetPassword($name, $resetPasswordUrl));


        return redirect("/reset-password/sent");
    }

    public function sent()
    {
        return view("reset-password.sent");
    }

    public function invalid()
    {
        return view("reset-password.invalid");
    }

    public function resetView($token)
    {
        $resetPasswordToken = ResetPasswordToken::where('token', $token)->first();
        if ($resetPasswordToken == null || $resetPasswordToken->valid == 0) {
            return redirect("/reset-password/invalid");
        }

        return view("reset-password.index", compact('resetPasswordToken'));
    }



    public function resetAction(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed'
        ]);

        $resetPasswordToken = ResetPasswordToken::where('token', $request->resetToken)->first();

        $user = User::where('email', $resetPasswordToken->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();
        $resetPasswordToken->valid = 0;
        $resetPasswordToken->save();
        return redirect("/reset-password/success");
    }

    public function success()
    {
        return view("reset-password.success");
    }
}
