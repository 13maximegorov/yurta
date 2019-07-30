<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\{Settings, Cards};

class AdminController extends Controller
{
    public function index()
    {
        $settings = Settings::all();
        $data = [];
        foreach ($settings as $value) {
            $data[$value->key] = $value->value;
        }
        return view('admin.index', ['settings' => $data]);
    }

    public function cards() {
        $cards = Cards::orderBy('id', 'desc')->get();
        return view('admin.cards', ['cards' => $cards]);
    }

    public function cards_add() {
        return view('admin.cards_add');
    }
}
