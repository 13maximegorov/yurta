<?php

namespace App\Http\Controllers\Admin;

use App\Cards;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CardsController extends Controller
{
    public function cards() {
        $cards = Cards::orderBy('id', 'desc')->get();
        return view('admin.cards', ['cards' => $cards]);
    }

    public function cardEdit() {
        return view('admin.card_edit');
    }

    public function cardsAdd() {
        return view('admin.cards_add');
    }

    public function addCard(Request $request) {
        $cards = new Cards();

        $this->validate($request, [
            'title' => 'required|max:55',
            'text' => 'required',
            'img' => 'required|file|image|unique:cards'
        ]);

        $pathImg = public_path() . '/img/cards';
        $image = $request->file('img');
        $image->move($pathImg, $image->getClientOriginalName());

        $cards->title = strip_tags($request->title);
        $cards->text = strip_tags($request->text);
        $cards->url = '';
        $cards->img = $image->getClientOriginalName();
        $cards->save();

        Session::flash('success', 'Успешно добавлено');

        return redirect('/yurtaboard/cards/add');
    }

}
