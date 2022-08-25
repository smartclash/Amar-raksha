<?php

namespace App\Http\Controllers;

use App\Http\Requests\Timeline\StoreTimelineRequest;
use App\Http\Requests\Timeline\UpdateTimelineRequest;
use App\Http\Resources\TimelineResource;
use App\Models\Event;
use App\Models\Timeline;

class TimelineController extends Controller
{
    public function store(StoreTimelineRequest $request, Event $event)
    {
        $this->authorize('create', [Timeline::class, $event]);

        $timeline = $event->timeline()->createMany($request->get('timeline'));

        return $this->successJsonResponse('Created timeline successfully', $timeline);
    }

    public function show(Timeline $timeline)
    {
        return new TimelineResource($timeline);
    }

    public function update(UpdateTimelineRequest $request, Timeline $timeline)
    {
        $this->authorize('update', $timeline);
    }

    public function destroy(Timeline $timeline)
    {
        $this->authorize('delete', $timeline);
    }
}
