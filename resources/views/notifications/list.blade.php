@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class='columns is-multiline'>
                    <div class='column is-half is-offset-3'>
                        <h1 class='is-size-3 mb-3'>Notifications</h1>
                        <div class='card'>
                            <div class='card-content'>
                                <div class='columns'>
                                    <div class='column is-half'>
                                        <div class='field'>
                                            <div class='control is-expanded'>
                                                <div class='select is-fullwidth'>
                                                    <select>
                                                        <option value='' disabled selected>Filter</option>
                                                        <option value='All Notifications'>All Notifications</option>
                                                        <option value='NDRF Admins'>NDRF Admins</option>
                                                        <option value='Institutions'>Institutions</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='column is-half'>
                                        <div class='field has-addons'>
                                            <p class='control'>
                                                <input class='input' type='text' placeholder='Find a post' />
                                            </p>
                                            <p class='control'>
                                                <button class='button'>
                                                    Search
                                                </button>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='column is-half is-offset-3'>
                        <div class='card'>
                            <header class='card-header is-flex is-justify-content-space-between'>
                                <p class='card-header-title is-size-5'>
                                    {props.Title}
                                </p>
                                <p class='card-header-title is-flex is-justify-content-flex-end'>
                                    @{props.Author}
                                </p>
                            </header>

                            <div class='card-content'>
                                <div class='content'>
                                    {props.Message}
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class='is-flex is-flex-direction-row-reverse mr-4'>
                            <h1 class='is-size-7'>{props.TimeStamp} seconds ago</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
