<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;

class SectionController extends Controller
{
    public function sections() {
        $sections = Section::all();
        return view('admin.sections', [
            'sections' => $sections
        ]);
    }

    public function edit() {
        return view('admin.sections.welcome');
    }

    public function about() {
        return view('admin.sections.about');
    }

    public function slider() {
        return view('admin.sections.slider');
    }
}
