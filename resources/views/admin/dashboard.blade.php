@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class="columns is-multiline">
                    <div class='column is-half is-offset-3'>
                        <div class='mb-6'>
                            <p class='is-size-2'>Welcome, Kiridharan</p>
                        </div>
                        <div class='card'>
                            <div class='card-header'>
                                <p class='card-header-title'>Events</p>
                            </div>
                            <div class='card-content'>
                                <div class='columns is-half'>
                                    <div class='column'>
                                        <a class='button is-primary is-outlined is-fullwidth'>
                                            View Events
                                        </a>
                                    </div>
                                    <div class='column'>
                                        <a class='button is-fullwidth'>
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
                                        <a class='button is-primary is-outlined is-fullwidth'>
                                            View Institutions
                                        </a>
                                    </div>
                                    <div class='column'>
                                        <a class='button is-fullwidth'>
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
                                        <a class='button is-primary is-outlined is-fullwidth'>
                                            View Notifications
                                        </a>
                                    </div>
                                    <div class='column'>
                                        <a class='button is-fullwidth'>
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
                                        <a class='button is-primary is-outlined is-fullwidth'>
                                            View Blogs
                                        </a>
                                    </div>
                                    <div class='column'>
                                        <a class='button is-fullwidth'>
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
