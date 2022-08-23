<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
    return view('pages.home');
}
public function addBooks(){
    return view('pages.add-books');
}
public function store(request $request){
    $validated = $request->validate([
        'books'=>'required|unique:books|max:255',
        'code'=>'required'
    ]);
   dd($request->all());
}

}
