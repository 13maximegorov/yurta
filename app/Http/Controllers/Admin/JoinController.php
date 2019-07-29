<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JoinController extends Controller
{
    public function index() {
        return view('admin.signin');
    }

    public function login(Request $request) {
        if (Auth::attempt(['login' => $request->login, 'password' => $request->password])) {
            return redirect('/yurtaboard');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/yurtaboard');
    }
}
