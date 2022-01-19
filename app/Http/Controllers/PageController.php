<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    //
    }
    public function create(){
        return view('create');
    //
    }
    public function view(){
        return view('view');
    //
    }
    public function update(){
        return view('update');
    //
    }
    public function delete(){
        return view('delete');
    //
    }
}
