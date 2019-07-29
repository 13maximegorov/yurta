<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // index
    public function index() {
        return view('admin.index');
    }

    public function login() {
        return view('admin.signin');
    }

    public function reg() {
        return view('admin.reg');
    }

    public function card() {
        return view('admin.card');
    }

    public function card_add() {
        return view('admin.card_add');
    }
}
