<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNotableEventRequest;
use App\Http\Requests\UpdateNotableEventRequest;
use App\Models\NotableEvent;

class NotableEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('events/events', [
                'events' => NotableEvent::all()->sortBy('date'),
            ]
        );
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
     * @param \App\Http\Requests\StoreNotableEventRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNotableEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\NotableEvent $notableEvent
     * @return \Illuminate\View\View
     */
    public function show(NotableEvent $event)
    {
        return view('events/event', [
            'event' => $event
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\NotableEvent $notableEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(NotableEvent $notableEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateNotableEventRequest $request
     * @param \App\Models\NotableEvent $notableEvent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotableEventRequest $request, NotableEvent $notableEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\NotableEvent $notableEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotableEvent $notableEvent)
    {
        //
    }
}
