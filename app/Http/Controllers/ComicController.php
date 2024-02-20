<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic :: all();
        return view('pages.index', compact('comics'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();

        $newcomic = new comic();

        $newcomic -> title = $data['title'];
        $newcomic -> ID_Comic = $data['code'];
        $newcomic -> type = $data['type'];
        $newcomic -> price = $data['price'];
        $newcomic -> description = $data['desc'];
        $newcomic -> title = $data['title'];

        $newcomic -> save();

        return redirect() -> route('users.index', $newcomic -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic:: find($id);
        return view('pages.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);

        return view('pages.update', compact('comic'));
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
        $comic = Comic::find($id);
        $data = $request -> all();

        $comic -> title = $data['title'];
        $comic -> ID_Comic = $data['code'];
        $comic -> type = $data['type'];
        $comic -> price = $data['price'];
        $comic -> description = $data['desc'];
        $comic -> title = $data['title'];

        $comic -> save();

        return redirect() -> route('users.index', $comic -> id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic:: find($id);
        $comic -> delete();

        return redirect() -> route('users.index');
    }
}
