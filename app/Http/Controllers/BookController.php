<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;

class BookController extends Controller
{
    public function home(){
        return view('home');
    //
    }
    public function createSite(){
        return view('create');
    //
    }
    public function list(Book $book){
        $books = Book::all();
        return view('list', compact('books'));
    //
    }

    public function updatePage($id, Request $request){
        $book=Book::findOrFail($id);
        return view('update',compact('book'));
    }


    public function create(Request $request)
    {
        $validated = $request->validate([
            'title'=>['required','string','between:5,20'],
            'author'=>['required','string','between:5,20'],
            'pages'=>['required','integer','min:1'],
            'year'=>['required','integer','min:1999','max:2022'],
        ]);
        if($validated){
            Book::create([
                'title'=>$request->title,
                'author'=>$request->author,
                'pages'=>$request->pages,
                'year'=>$request->year,
            ]);
        };
        return view("create-success");
    }

    
    public function edit(book $book)
    {
        //
    }

   
    public function update($id,Request $request,Book $book)
    {
        Book::findOrFail($id)->update([
            'title'=>$request->title,
            'author'=>$request->author,
            'pages'=>$request->pages,
            'year'=>$request->year,
        ]);
        $books = Book::all();
        return view('list', compact('books'));
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return back();
    }
    
}
