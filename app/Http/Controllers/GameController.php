<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use Illuminate\Contracts\View\View;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $juegos = array();
        return view("index", ['games' => $juegos]);
    }

    public function help($game, $tag = null): View
    {
        $date = Now();
        return view('categoria', ['juegoCategoria' => $tag, 'juego' => $game, 'fecha' => $date]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('game.show', ['game' => $game]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGameRequest $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
}
