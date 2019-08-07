<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\{Settings, Navigation};

class MainController extends Controller
{
    public static $settings = [];
    public static $nav = [];

    public function __construct() {
        self::$settings = Settings::all();
        self::$nav = Navigation::all();
    }

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
                    'section_content.titles',
                    'section_content.slogan',
                    'section_content.caption',
                    'section_content.background',
                    'section_content.slides',
                    'section_content.text')->get();

        $keys = ['welcome', 'offer'];
        foreach ($keys as $key => $value) {
            $rows[$value] = $data[$key];
        }
        return view('landing', ['data' => $rows]);
    }
}
