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
        $books = [
            [
                'id' => '1',
                'name' => 'TestBook1',
                'author' => 'Ahmed',
                'desc' => 'lorem',
                'img' =>
                    'http://smartmobilestudio.com/wp-content/uploads/2012/06/leather-book-preview.png',
            ],
            [
                'id' => '2',
                'name' => 'TestBook2',
                'author' => 'Mohammed',
                'desc' => 'lorem',
                'img' =>
                    'http://smartmobilestudio.com/wp-content/uploads/2012/06/leather-book-preview.png',
            ],
            [
                'id' => '3',
                'name' => 'TestBook3',
                'author' => 'Ali',
                'desc' => 'lorem',
                'img' =>
                    'http://smartmobilestudio.com/wp-content/uploads/2012/06/leather-book-preview.png',
            ],
        ];
        return view('book', ['booksArr' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
