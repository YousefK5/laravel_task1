<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
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
        $booksArr = Book::all();
        // dd($booksArr);
        return view('books', ['booksArr' => $booksArr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        // dd($authors);
        return view('add', ['authorsArr' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $book = Book::create($request->all());
        // return view('home',['booksArr'=>$book]);

        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'author_id' => 'required',
            'image' => 'required',
        ]);
        $image = base64_encode(file_get_contents($request->file('image')));

        $book = new Book();
        $book->name = $request->name;
        $book->description = $request->description;
        $book->author_id = $request->author_id;
        $book->image = $image;
        $book->save();

        return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'author' => 'required',
        ]);
        if ($request->image) {
            $image = base64_encode(file_get_contents($request->file('image')));
            $book->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $image,
                'author' => $request->author,
            ]);
        } else {
            $book->update([
                'name' => $request->name,
                'description' => $request->description,
                'author' => $request->author,
            ]);
        }

        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Book::find($request->bookid)->delete();
        return redirect('/books');
    }

    public function trash()
    {
        $booksArr = Book::onlyTrashed()->get();
        return view('trash', ['booksArr' => $booksArr]);
    }

    public function restored($id)
    {
        Book::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect('/books');
    }

    public function forceDelete(Request $request)
    {
        Book::withTrashed()
            ->where('id', $request->bookid)
            ->forceDelete();
        return redirect('/trash');
    }
}
