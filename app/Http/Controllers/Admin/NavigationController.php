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

            foreach ($_POST as $k => $v) {
                $updated = Navigation::where('id', '=', $k)->update(['title' => $v]);
            }

            Session::flash('success', 'Успешно  отредактировано.');

            return redirect("/yurtaboard/nav");
        }
    }
}
