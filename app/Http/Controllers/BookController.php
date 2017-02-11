<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $books = \App\Book::all();

        // dd($books);

        return view('book.index', compact('books'));

        // return "labas";
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $book = new \App\Book();

        $book->pavadinimas   = $request->pavadinimas; 
        $book->metai         = $request->metai;
        $book->zanras        = $request->zanras; 
        $book->autorius      = $request->autorius;  
        $book->nuotrauka     = $request->nuotrauka;  
        $book->apibudinimas  = $request->apibudinimas;  

        $book->save();

        // isaugojimo 2 varijntas
        // $new_book_id \App\Book::create($request->all());

        return redirect()->route('index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = \App\Book::find($id);
        // dd($book);
        return view('book.show', compact('book'));

    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
