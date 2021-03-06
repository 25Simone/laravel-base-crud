<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Http\Requests\ComicStoreRequest;
use Illuminate\Http\Request;

class ComicController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $comicsData = Comic::all();

        return view("comics.index", compact("comicsData"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicStoreRequest $request) {
        // Save the validated form's data in a variable


        // $data = $request->validate([
        //     "title"=>"required|min:5",
        //     "description"=>"required|min:20",
        //     "thumb"=>"url|nullable",
        //     "price"=>"required|numeric",
        //     "series"=>"required|min:5",
        //     "sale_date"=>"required|date",
        //     "type"=>"required|min:5",
        // ]);

        // Validation using requests file
        $data = $request->validated();

        // Instance a new line
        $newComic = new Comic();

        // Fills columns
        $newComic->fill($data);

        // Save the line
        $newComic->save();

        // Redirect the page
        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic) {
        return view('comics.show', compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic) {
        // Return the edit form and passes the record to be modified
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(ComicStoreRequest $request, Comic $comic) {
        // Save the validated form's data in a variable

        // $data = $request->validate([
        //     "title"=>"required|min:5",
        //     "description"=>"required|min:20",
        //     "thumb"=>"url|nullable",
        //     "price"=>"required|numeric",
        //     "series"=>"required|min:5",
        //     "sale_date"=>"required|date",
        //     "type"=>"required|min:5",
        // ]);

        // Validation using requests file
        $data = $request->validated();

        // Fills and save the data
        $comic->update($data);

        // Return the show page and passes the modified record
        return view('comics.show', compact('comic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic) {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
