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

    public function cardsAdd() {
        return view('admin.cards_add');
    }

    public function cardEdit($id) {
        $card = Cards::find($id);
        return view('admin.card_edit', ['card' => $card]);
    }

    public function addCard(Request $request) {
        $cards = new Cards();

        $this->validate($request, [
            'title' => 'required|max:255',
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
        if ($request->is_active == "on") {
            $cards->is_active = '1';
        }
        $cards->save();

        Session::flash('success', 'Успешно добавлено');

        return redirect('/yurtaboard/cards/add');
    }

    public function deleteCard($id) {
        Cards::find($id)->delete();
        return redirect('/yurtaboard/cards');
    }

    public function editCard(Request $request, $id) {
        $card = Cards::find($id);

        $this->validate($request, [
            'title' => 'required|max:55',
            'img' => 'file|image|unique:cards'
        ]);

        $image = $request->file('img');
        if ($image) {
            $pathImg = public_path() . '/img/cards';
            $image->move($pathImg, $image->getClientOriginalName());
            $card->img = $image->getClientOriginalName();
        }
        $card->title = strip_tags($request->title);
        $card->text = strip_tags($request->text);
        $card->url = '';
        if ($request->is_active == "on") {
            $card->is_active = '1';
        }
        $card->save();

        Session::flash('success', 'Успешно редактировано');

        return redirect("/yurtaboard/cards/edit/{$card->id}");
    }
}
