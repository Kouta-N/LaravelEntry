<?php

namespace App\Http\Controllers;
use App\Models\Board;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(Request $request)
    {
        $items = Board::all();
        return view('board.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('board.add');
    }

    public function create(Request $request)
    {
        $this->validate($request,Board::$rules);
        $board = new Board;
        $form = $request->all();
        // $param_json = json_encode($form['_token']);
        // echo "<script>console.log( '$param_json' );</script>";
        unset($form['_token']);
        $board->fill($form)->save();
        return redirect('/board');
    }
}