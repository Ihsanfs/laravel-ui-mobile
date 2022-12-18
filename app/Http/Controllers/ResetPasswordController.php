<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;

class ResetPasswordController extends Controller
{
    public function create(Request $request)
    {
        return view('auth.reset-password', [
            'email' => $request->email,
            'token' => $request->route('token'),
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => bcrypt($request->password),
                    'remember_token' => str::random(60),
                ])->save();
                event(new PasswordReset($user));
            }
        );
        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', __($status));
        }
        throw ValidationException::withMessages([
            'email' => [trans($status)],
        ]);
        //     $status = Password::reset(
        //         $request->only('email', 'password', 'password_confirmation', 'token'),
        //         function ($user, $password) {
        //             $user->forceFill([
        //                 'password' => bcrypt($password)
        //             ])->setRememberToken(Str::random(60));

        //             $user->save();

        //             event(new PasswordReset($user));
        //         }
        //     );

        //     return $status === Password::PASSWORD_RESET
        //                 ? redirect()->route('login')->with('status', __($status))
        //                 : back()->withErrors(['email' => [__($status)]]);
        // }->middleware('guest')->name('password.update');
    }
}
