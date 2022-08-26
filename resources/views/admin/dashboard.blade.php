@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class="columns is-multiline">
                    <div class='column is-half is-offset-3'>
                        <div class='mb-6'>
                            <p class='is-size-2'>Welcome, {{ auth()->user()->name }}</p>
                        </div>
                        <div class='card'>
                            <div class='card-header'>
                                <p class='card-header-title'>Events</p>
                            </div>
                            <div class='card-content'>
                                <div class='columns is-half'>
                                    <div class='column'>
                                        <a class='button is-primary is-outlined is-fullwidth' href="{{ route('events.index') }}">
                                            View Events
                                        </a>
                                    </div>
                                    <div class='column'>
                                        <a class='button is-fullwidth' href="{{ route('events.create') }}">
                                            Create Events
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-half is-offset-3">
                        <div class='card'>
                            <div class='card-header'>
                                <p class='card-header-title'>Institutions</p>
                            </div>
                            <div class='card-content'>
                                <div class='columns is-half'>
                                    <div class='column'>
                                        <a class='button is-primary is-outlined is-fullwidth' href="{{ route('institutions.index') }}">
                                            View Institutions
                                        </a>
                                    </div>
                                    <div class='column'>
                                        <a class='button is-fullwidth' href="{{ route('institutions.create') }}">
                                            Create Institution
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-half is-offset-3">
                        <div class='card'>
                            <div class='card-header'>
                                <p class='card-header-title'>Notifications</p>
                            </div>
                            <div class='card-content'>
                                <div class='columns is-half'>
                                    <div class='column'>
                                        <a class='button is-primary is-outlined is-fullwidth' href="{{ route('notifications.index') }}">
                                            View Notifications
                                        </a>
                                    </div>
                                    <div class='column'>
                                        <a class='button is-fullwidth' href="{{ route('notifications.create') }}">
                                            Create Notification
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-half is-offset-3">
                        <div class='card'>
                            <div class='card-header'>
                                <p class='card-header-title'>Blogs</p>
                            </div>
                            <div class='card-content'>
                                <div class='columns is-half'>
                                    <div class='column'>
                                        <a class='button is-primary is-outlined is-fullwidth' href="{{ route('blogs.index') }}">
                                            View Blogs
                                        </a>
                                    </div>
                                    <div class='column'>
                                        <a class='button is-fullwidth' href="{{ route('blogs.create') }}">
                                            Create Blog
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
