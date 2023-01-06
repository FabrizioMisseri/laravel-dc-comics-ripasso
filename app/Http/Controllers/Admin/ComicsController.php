<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // VALIDATE
        $request->validate([
            'title' => 'required|min:5|max:50',
            'description' => 'required',
            'thumb' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required',
        ]);

        $data = $request->all();
        $comic = new Comic();
        // $comic->fill($data);
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->save();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // VALIDATE
        $request->validate([
            'title' => 'required|min:5|max:50',
            'description' => 'required',
            'thumb' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required',
        ]);

        $data = $request->all();
        // $comic->update($data);
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->update();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }




    // VALIDATION FUNCTION

    // $data = $this->validation($request->all());


    // private function validation($data) {
    //     $validationResult = Validator::make($data, [
    //         'title' => 'required|min:5|max:100',
    //         'image' => 'required',
    //         'type' => 'required',
    //         'coocking_time' => 'required|max:50',
    //         'weight' => 'required|max:50',
    //         'description' => 'required'
    //     ], [
    //         'title.required' => 'Il titolo è obbligatorio',
    //         'title.min' => 'Il titolo deve essere almeno di :min caratteri',
    //         'title.max' => 'Il titolo non può superare :max caratteri',
    //         'image.required' => 'L\'immagine è obbligatoria',
    //         'type.required' => 'La tipologia è obbligatoria',
    //         'coocking_time' => 'Il tempo di cottura sbagliato'
    //         //... 
    //     ])->validate();
    //     return $validationResult;
    // }
}
