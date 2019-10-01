<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;

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
}
