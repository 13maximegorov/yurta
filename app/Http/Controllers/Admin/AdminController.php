<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Settings;

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
        return view('admin.cards');
    }

    public function cards_add() {
        return view('admin.cards_add');
    }

    public function settings() {
        return view('admin.settings');
    }
}
