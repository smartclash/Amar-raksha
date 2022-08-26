<?php

namespace App\Http\Controllers;

use App\Http\Requests\Notification\StoreNotificationRequest;
use App\Http\Requests\Notification\UpdateNotificationRequest;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        $notification = Notification::all();

        return view('notifications.list')->with([
            'notifications' => $notification
        ]);
    }

    public function create()
    {
        return view('notifications.create');
    }

    public function store(StoreNotificationRequest $request)
    {
        $numbers = [
            '+919344582248',
            '+917550272650',
            '+919941090162',
            '+919940424134',
            '+919080508847',
            '+917005595182',
            '+919629729142',
        ];

        $specials = [
            '+919344582248',
            '+919629729142',
        ];

        if ($request->get('level') == 'L1') {
            collect($numbers)->each(function ($number) use ($request) {
                app()->make('twilio')->calls->create($number, '+18457123889', [
                    'twiml' => '<Response><Say>' . $request->get('message') . '</Say></Response>'
                ]);
            });
        } elseif ($request->get('level') == 'L3') {
            collect($numbers)->each(function ($number) use ($request) {
                app()->make('twilio')->messages->create($number, [
                    'from' => '+18457123889',
                    'body' => $request->get('message')
                ]);
            });
        } elseif ($request->get('level') == 'L2') {
            collect($specials)->each(function ($number) use ($request) {
                app()->make('twilio')->messages->create($number, [
                    'from' => '+18457123889',
                    'body' => $request->get('message')
                ]);
            });
        }

        Notification::create([
            'title' => $request->get('title'),
            'message' => $request->get('message'),
            'level' => $request->get('level'),
            'latitude' => $request->get('latitude', '12.9725747'),
            'longitude' => $request->get('longitude', '80.2500219'),
        ]);

        return redirect()->route('notifications.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Notification\UpdateNotificationRequest  $request
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotificationRequest $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        //
    }
}
