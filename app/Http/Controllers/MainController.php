<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyMatch;

class MainController extends Controller
{
    // GENERALE
     private function getValidationRules() {
     return [
        'team1' => 'required|string|min:3|max:255',
        'team2' => 'required|string|min:3|max:255',
        'point1' => 'required|integer|min:0|max:100',
        'point2' => 'required|integer|min:0|max:100',
        'result' => 'required|boolean',
     ];
     }
    // HOME
    public function home(){

    $matches = MyMatch::all();
    return view('pages.home',compact('matches'));
    }

    // SINGOLA PARTITA
    public function match($id) {
    $matches = MyMatch::findOrFail($id);  

    return view('pages.match', compact('matches'));
    }

    // CREA SINGOLA PARTITA
    public function create(){

    return view('pages.create');
    }
    // ---------------------------------
    public function store(Request $request) {
    // dd($request -> all());

    $validate = $request -> validate($this -> getValidationRules());
    // dd($validate);

    $matches = MyMatch::create($validate);
    return redirect() -> route('match', $matches -> id);
    }

    // MODIFICA SINGOLA PARTITA
    public function edit($id){
    $matches = MyMatch::findOrFail($id);

    return view('pages.edit', compact('matches'));
    }
    // ---------------------------------
    public function update(Request $request, $id) {

    // dd($request -> all(), $id);
    $matches = MyMatch::findOrFail($id);

    $validate = $request -> validate($this -> getValidationRules());

    $matches -> update($validate);

    return redirect() -> route('home');
    }

    // CANCELLA SINGOLA PARTITA
    public function destroy($id) {
    $matches = MyMatch::findOrFail($id);

    $matches -> delete();
    // dd($employee);

    return redirect() -> route('home');
    }

}
