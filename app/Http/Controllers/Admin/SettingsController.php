<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    public function settings() {
        $settings = Settings::all();
        $data = [];
        foreach ($settings as $value) {
            $data[$value->key] = ['id' => $value->id, 'value' => $value->value];
        }
        return view('admin.settings', ['settings' => $data]);
    }

    public function editSettings(Request $request) {

        $i = 1;
        $qty = count(Settings::all());

        $this->validate($request, [
            'site_title' => 'required',
            'site_name' => 'required',
            'site_footer' => 'required',
            'site_meta_desc' => 'required',
            'site_meta_key' => 'required',
            'site_meta_author' => 'required'
        ]);

        unset ($_POST['_token']);

        foreach ($_POST as $v) {
            $updated = Settings::where('id', '=', $i)->update(['value' => $v]);
            ++$i;
        }

        Session::flash('success', 'Успешно отредактировано.');

        return redirect("/yurtaboard/settings");

    }
}
