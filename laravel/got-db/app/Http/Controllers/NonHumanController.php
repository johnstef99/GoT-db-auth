<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNonHumanRequest;
use App\Http\Requests\UpdateNonHumanRequest;
use App\Models\NonHuman;

class NonHumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreNonHumanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNonHumanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NonHuman  $nonHuman
     * @return \Illuminate\Http\Response
     */
    public function show(NonHuman $nonHuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NonHuman  $nonHuman
     * @return \Illuminate\Http\Response
     */
    public function edit(NonHuman $nonHuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNonHumanRequest  $request
     * @param  \App\Models\NonHuman  $nonHuman
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNonHumanRequest $request, NonHuman $nonHuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NonHuman  $nonHuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonHuman $nonHuman)
    {
        //
    }
}
