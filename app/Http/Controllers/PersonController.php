<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

global $check;

class PersonController extends Controller
{

    public function index(Request $request)
    {
        $items = Person::all();
        return view('person.index', ['items' => $items]);
    }
    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }
     public function search(Request $request)
    {
        // $item = Person::find($request->input);
        // $item = Person::nameEqual($request->input)->first();
        // $param = ['input' => $request->input,'item'=>$item];
        // return view('person.find', $param);

        $min = (int)$request->input;
        $max = $min + 10;
        $item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
        $param = ['input' => $request->input,'item' => $item];
        return view('person.find', $param);
    }

    public function add(Request $request)
    {
        return view('person.add');
    }

    public function create(Request $request)
    {
        $this->validate($request,Person::$rules);
        $person = new Person;
        $form = $request->all();
        // $param_json = json_encode($form['_token']);
        // echo "<script>console.log( '$param_json' );</script>";
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function edit(Request $request)
    {
        $person = Person::find($request->id);
        return view('person.edit',['form' => $person]);
    }

    public function update(Request $request)
    {
        $this->validate($request,Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        // $param_json = json_encode($form['_token']);
        // echo "<script>console.log( '$param_json' );</script>";
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }

    public function delete(Request $request)
    {
        $person = Person::find($request->id);
        return view('person.del',['form' => $person]);
    }

    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect('/person');
    }
}
// p261 edit.blade??????