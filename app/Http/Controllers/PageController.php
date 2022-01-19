<?php

namespace App\Http\Controllers;
use App\Models\book;
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
    public function list(){
        return view('list');
    //
    }
}
