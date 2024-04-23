<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        if ($request->isMethod('post')) {
            // Validation can be added here
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required|',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:8|confirmed', // Add confirmed rule for password confirmation
                'password_confirmation' => 'required|string|min:8|same:password',
                'contact' => 'required|numeric|regex:/^[0-9]{8,20}$/',
            ]);

            $model = new User();
            $model->name = $request->first_name . ' ' . $request->last_name;
            $model->email = $request->email;
            $model->contact = $request->contact;
            $model->password = $request->password;
            $model->role_id = 1;
            if ($model->save()) {
                Session::flash('success', 'Signup successful!');

                return redirect('/');
            } else {
                return redirect()->back();
            }
        }
        return view('user.signup');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            // Validation can be added here
            // $userEmail = User::find()->where(['email' => $request->email]);
            $userEmail = User::where('email', $request->email)->first();

            if (!empty($userEmail)) {

                $password = [
                    'email' => $request->email,
                    'password' => $request->password
                ];

                // 2nd method to validate the user password :- Hash::check($credentials['password'], $user->password)

                if (Auth::attempt($password)) {
                    Auth::login($userEmail);
                    Session::flash('success', 'Login successful!');

                    return redirect('/');
                } else {
                    Session::flash('error', 'Password not matched');
                    return redirect()->back();
                }
            } else {
                Session::flash('error', 'User not found');
                return redirect()->back();
            }
        }
        return view('user.login');
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Session::flash('success', 'Logout successful!');

        return redirect('/');
    }
}
