<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cards;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index', [
            'counter' => [
                'gallery' => Cards::count()
            ]
        ]);
    }

}
