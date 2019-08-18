<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\{Service, ServiceContent};
use Illuminate\Support\Facades\Session;
use Image;

class ServiceController extends Controller
{
    public function index() {
        return view ('admin.service', [
            'service' => Service::all()
        ]);
    }

    public function service(Request $r) {
        $service = DB::table('service')
                ->join(
                    'service_content', 
                    'service_content.s_id', 
                    '=', 
                    'service.id'
                )
                ->where('service.id', $r->id)
                ->select(
                    'service.id',
                    'service.title',
                    'service.img',
                    'service_content.text'
                )->get();
        return view('admin.service_edit', [
            'service' => $service[0]
        ]); 
    }

    public function serviceEdit(Request $r) {
        $service = Service::find($r->id);

        if ($_POST) {
            ini_set('memory_limit', '256M');
            $this->validate($r, [
                'title' => 'required|max:255',
                'text' => 'required',
                'img' => 'required|file|image|unique:service'
            ]);

            $image = $r->file('img');

            if ($image) {
                $pathImg = public_path() . '/img/service';
                $e = 'image' . md5($image->getClientOriginalName()) .'.'. $image->guessExtension();
                $image->move($pathImg, $e);

                //Resize image here
                $thumbnailpath = public_path('img/service/'. $e);
                $img = Image::make($thumbnailpath);
                if ($img->width() >= 500) {
                $img->resize(500, null, function ($constraint) {
                        $constraint->aspectRatio();
                    }); 
                }
                
                $img->save('img/service/thumb/' . $e, 100);

                $service->img = $e;
            }

            $service->title = strip_tags($r->title);

            if ($service->save()) {
                ServiceContent::where('s_id', '=', $r->id)->update([
                    'text' => $r->text
                ]);
            }
    
            Session::flash('success', 'Успешно отредактировано.');
    
            return redirect("/yurtaboard/service/edit/{$r->id}");
        }
    }
}
