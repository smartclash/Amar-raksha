<?php

namespace App\Http\Controllers;

use App\Enums\EventType;
use App\Http\Requests\Event\StoreEventRequest;
use App\Http\Requests\Event\UpdateEventRequest;
use App\Http\Resources\EventResource;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        return EventResource::collection(
            Event::all()
        );
    }

    public function store(StoreEventRequest $request, EventType $type)
    {
        $this->authorize('create', [Event::class, $type]);

        $event = Event::create([
            'type' => $type,
            'user_id' => auth()->id(),
            ...$request->all()
        ]);

        if ($request->has('institution') && $type !== EventType::DISASTER) {
            $event->institution()->associate((int) $request->get('institution'));
        }

        return $this->successJsonResponse('Created event successfully', $event);
    }

    public function show(Event $event)
    {
        return new EventResource($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Event\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}