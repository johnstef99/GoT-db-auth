<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;
use Illuminate\Http\Response;
use Illuminate\View\View;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('characters/characters', [
            'characters' => Character::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreCharacterRequest $request
     * @return Response
     */
    public function store(StoreCharacterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Character $character
     * @return View
     */
    public function show(Character $character)
    {
        $char = $character->loadMissing(
            'house',
            'religions',
            'relatives',
            'friends',
            'owns',
            'titles'
        );
        return view('characters/character', [
            'char' => $char,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Character $character
     * @return Response
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCharacterRequest $request
     * @param \App\Models\Character $character
     * @return Response
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Character $character
     * @return Response
     */
    public function destroy(Character $character)
    {
        //
    }
}
