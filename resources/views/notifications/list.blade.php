@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class='columns is-multiline'>
                    <div class='column is-half is-offset-3'>
                        <h1 class='is-size-3 mb-3'>Notifications</h1>
                    </div>
                    @foreach($notifications as $notification)
                        <div class='column is-half is-offset-3'>
                            <div class='card'>
                                <header class='card-header is-flex is-justify-content-space-between'>
                                    <p class='card-header-title is-size-5'>
                                        {{ $notification->title }}
                                    </p>
                                    <p class='card-header-title is-flex is-justify-content-flex-end'>
                                        {{ $notification->user }}
                                    </p>
                                </header>

                                <div class='card-content'>
                                    <div class='content'>
                                        {{ $notification->message }}
                                        <br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
