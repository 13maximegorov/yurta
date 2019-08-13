<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cards;

class MainController extends Controller
{
    public function index() {
        $t1 = 'sections';
        $t2 = 'section_content';
        $data = DB::table($t1)
                ->join(
                    $t2, 
                    'section_content.s_id', 
                    '=', 
                    'sections.id'
                )
                ->select(
                    'sections.id',
                    'sections.name',
                    'sections.position',
                    'sections.id',
                    'section_content.title',
                    'section_content.titles',
                    'section_content.slogan',
                    'section_content.caption',
                    'section_content.background', 
                    'section_content.text')->get();

        foreach ($data as $k => $v) {
            $rows[$data[$k]->name] = $data[$k];
        }
        return view('landing', [
            'data' => $rows,
            'gallery' => $this->getGallery()
        ]);
    }

    public function getGallery() {
        return Cards::orderBy('id', 'DESC')->get();
    }
}
