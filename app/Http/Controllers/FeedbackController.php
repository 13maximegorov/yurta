<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FeedbackController extends Controller
{
    public function index(Request $request) {
        if ($_POST) {
            $fb = new Feedback;
            $this->validate($request, [
                'inits' => 'required|max:255',
                'email' => 'required|max:32',
                'tel' => 'required|regex:/(01)[0-9]{9}/',
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

            Session::flash('success', 'Ваш запрос успешно отправлен, ожидайте ответа.');

            return redirect('http://localhost:8888/#contact-form');
        }
    }
}
