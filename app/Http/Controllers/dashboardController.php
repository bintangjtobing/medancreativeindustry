<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\User;

class dashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
    public function account()
    {
        $users = User::orderBy('created_at', 'DESC')->paginate(5);
        return view('dashboard.user', [
            'users' => $users,
        ]);
    }
    public function deleteAccount($id)
    {
        $user = User::find($id);
        $user->delete();
        return back()->with('success', 'User has been deleted!');
    }
    public function login()
    {
        return view('dashboard.login');
    }
    public function loginProcess(Request $request)
    {
        $remember_me = $request->has('remember') ? true : false;
        $request->merge(['status' => '1']);
        if (Auth::attempt($request->only('username', 'password', 'status'), $remember_me)) {
            $user = User::where(['username' => $request->username])->first();
            return redirect('/app/dashboard');
            // return back()->with('gagal', ' Please check your auth status or your input!');
        }
        // return 200;
    }
    public function logout(Request $request)
    {
        header("cache-Control: no-store, no-cache, must-revalidate");
        header("cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

        $request->session()->flush();
        Auth::logout();
        $request->session()->regenerate();
        return redirect('/v/login');
    }
}
