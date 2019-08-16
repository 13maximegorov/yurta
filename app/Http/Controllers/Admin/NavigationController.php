<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Navigation;
use Illuminate\Support\Facades\Session;

class NavigationController extends Controller
{
    public function index () 
    {
        $nav = $this->getAll();
        return view ('admin.nav', ['nav' => $nav]);
    }

    public function getAll() {
       return Navigation::all();
    }

    public function save() {
        if ($_POST) {
            
            unset ($_POST['_token']);

            foreach ($_POST['nav'] as $k => $v) {
                if ( isset ($_POST['nav'][$k]['visible']) ) {
                    Navigation::where('id', '=', $k)->update([
                        'title' => $v['name'],
                        'is_active' => '1'
                    ]);
                } else {
                    Navigation::where('id', '=', $k)->update([
                        'title' => $v['name'],
                        'is_active' => '0'
                    ]);
                }
            }

            Session::flash('success', 'Успешно  отредактировано.');

            return redirect("/yurtaboard/nav");
        }
    }
}
