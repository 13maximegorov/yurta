<?php

namespace App\Http\Controllers\Admin;

use App\Cards;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Section;
use App\SectionContent;
use Illuminate\Support\Facades\Session;

class SectionController extends Controller
{
    public function sections() {
        $sections = Section::all();
        return view('admin.sections', [
            'sections' => $sections
        ]);
    }

    public function welcome($id) {
        $section_content = SectionContent::where('s_id', $id)->first();
        return view('admin.sections.welcome', ['section_content' => $section_content]);
    }

    public function editWelcome(Request $request, $id) {
        $section_content = SectionContent::where('s_id', $id)->first();

        $this->validate($request, [
            'title' => 'required',
            'slogan' => 'required',
            'caption' => 'required',
            'img' => 'file|image|unique:cards'
        ]);

        $image = $request->file('img');
        if ($image) {
            $pathImg = public_path() . '/img';
            $image->move($pathImg, $image->getClientOriginalName());
            $section_content->img = $image->getClientOriginalName();
        }
        $section_content->titles = json_encode(['h1' => $request->title, 'h2' => '', 'h3' => '']);
        $section_content->slogan = strip_tags($request->slogan);
        $section_content->caption = strip_tags($request->caption);
        $section_content->save();

        Session::flash('success', 'Успешно редактировано');

        return redirect("/yurtaboard/sections/edit/welcome/{$section_content->s_id}");
    }

    public function about(Request $request, $id) {
        $section_content = SectionContent::where('s_id', $id)->first();
        return view('admin.sections.about', ['section_content' => $section_content]);
    }

    public function editAbout(Request $request, $id) {
        $section_content = SectionContent::where('s_id', $id)->first();

        $this->validate($request, [
            'title' => 'required',
            'slogan' => 'required',
            'caption' => 'required',
            'text' => 'required'
        ]);

        $section_content->titles = json_encode(['h1' => $request->title, 'h2' => $request->title_h2, 'h3' => '']);
        $section_content->slogan = strip_tags($request->slogan);
        $section_content->caption = strip_tags($request->caption);
        $section_content->text =strip_tags($request->text);
        $section_content->save();

        Session::flash('success', 'Успешно редактировано');

        return redirect("/yurtaboard/sections/edit/about/{$section_content->s_id}");
    }

    public function slider() {
        return view('admin.sections.slider');
    }

    public function slider() {
        return view('admin.sections.slider');
    }
}
