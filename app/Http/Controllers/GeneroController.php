<?php

namespace App\Http\Controllers;

use App\Models\genero;
use App\Models\juego;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allGeneros = genero::all();
        return view('index', compact('allGeneros'));
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
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function show(genero $genero)
    {
        $juegos = juego::with('generos')->get();
        return view('games', compact('genero', 'juegos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function edit(genero $genero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, genero $genero)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\genero  $genero
     * @return \Illuminate\Http\Response
     */
    public function destroy(genero $genero)
    {
        //
    }
}
