<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{
    public function single() {

    }

    public function multiply() {

    }

    public function sections() {
        return view('admin.sections');
    }

    public function edit() {
        return view('admin.section_edit');
    }
}
