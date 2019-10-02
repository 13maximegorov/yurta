<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use Illuminate\Support\Facades\Session;

class FeedbackController extends Controller
{
    public function index() {
        $feedback = Feedback::all();
        return view('admin.feedback', ['feedback' => $feedback]);
    }

    public function deleteFeedback($id) {
        Feedback::find($id)->delete();
        return redirect('/yurtaboard/feedback');
    }

    public function feedback($id) {
        $feedback = Feedback::find($id);
        return view('admin.feedback_edit', ['feedback' => $feedback]);
    }

    public function editFeedback(Request $request, $id) {
        $fb = Feedback::find($id);
        $this->validate($request, [
            'inits' => 'required|max:255',
            'email' => 'required|max:32',
            'tel' => 'required',
            'old' => 'required',
            'dis' => 'required',
            'com' => 'required'
        ]);

        $fb->inits = strip_tags($request->inits);
        $fb->email = strip_tags($request->email);
        $fb->tel = strip_tags($request->tel);
        $fb->old = strip_tags($request->old);
        $fb->dis = strip_tags($request->dis);
        $fb->com = strip_tags($request->com);

        $fb->save();

        Session::flash('success', 'Успешно отредактировано.');

        return redirect("/yurtaboard/feedback/edit/{$fb->id}");
    }
}
