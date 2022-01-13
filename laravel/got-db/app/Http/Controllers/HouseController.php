<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorehouseRequest;
use App\Http\Requests\UpdatehouseRequest;
use App\Models\House;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('houses/houses', [
            'houses' => House::all()->load('leaders'),
        ]);
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
     * @param \App\Http\Requests\StorehouseRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehouseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\House $house
     * @return \Illuminate\View\View
     */
    public function show(House $house)
    {
        return view('houses/house', [
            'house' => $house,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\House $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatehouseRequest $request
     * @param \App\Models\House $house
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehouseRequest $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\House $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        //
    }
}
