<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class  JoinController extends Controller
{
    public function index() {
        return view('admin.signin');
    }

    public function login(Request $request) {
        if (Auth::attempt(['login' => $request->login, 'password' => $request->password])) {
            return redirect('/yurtaboard');
        } else {
            Session::flash('error_admin', 'Неверные данные');
            return redirect('/yurtaboard/login');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/yurtaboard');
    }
}
