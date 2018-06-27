<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Auth\RegisterController;

class PagesController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function profile()
    {
        return view('profile');
    }

    public function terms()
    {
        return view('terms');
    }

    public function google_signin()
    {
        return view('auth/google_signin');
    }

    public function facebook_signin()
    {
        return view('auth/facebook_signin');
    }

    public function google_signin_submit()
    {
        $email = Input::get('email');
        $pass = Input::get('pass');

        $data = array(
            'f_name' => 'New', 'l_name' => 'User', 'mobile' => '0000000000000',
            'email' => $email, 'gender' => 'Male', 'password' => $pass);

        RegisterController::create($data);

        User::create([
            'f_name' => $data['f_name'], 'l_name' => $data['l_name'],
            'mobile' => $data['mobile'], 'email' => $data['email'],
            'gender' => $data['gender'], 'password' => ($data['password']),]);

        return redirect('/home');
    }

    public function users()
    {
        $users = DB::table('users')->get();
        return view('users', compact('users'));
    }

    public function user($id)
    {
        $users = DB::table('users')->find($id);
        return view('users.show', compact('users'));
    }

}
