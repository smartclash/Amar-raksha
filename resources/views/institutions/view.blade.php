@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <section class='section'>
            <div class='column is-half is-offset-3'>
                <div class='mb-6'>
                    <p class='is-size-2'>Institutions details</p>
                </div>

                <div class='card mb-6 column'>
                    <div class='column'>
                        <p class='is-bold'>Institution Name: <b>Name</b></p>
                    </div>
                    <div class='column'>
                        <p class='is-bold'>Institution Address: <b>Address</b></p>
                    </div>
                    <div class='column'>
                        <p class='is-bold'>Institution Website: <a>Website</a></p>
                    </div>
                    <section class='hero is-medium'>
                        <div class='hero-body is-justify-content-center'>
                            <p class='title'>
                                Bing Map
                            </p>
                        </div>
                    </section>
                </div>

                <div class='card'>
                    <div class='card-header'>
                        <p class='card-header-title'>Add Admin</p>
                    </div>
                    <div class='card-content'>
                        <form action=''>
                            <div class='field'>
                                <label for='title' class='label'>Name</label>
                                <div class='control'>
                                    <input type='text' class='input' id='title' />
                                </div>
                            </div>
                            <div class='field'>
                                <label for='title' class='label'>Email</label>
                                <div class='control'>
                                    <input type='text' class='input' id='title' />
                                </div>
                            </div>
                            <div class='field'>
                                <label for='title' class='label'>Phone</label>
                                <div class='control'>
                                    <input type='text' class='input' id='title' />
                                </div>
                            </div>
                            <div class='field'>
                                <label for='title' class='label'>Password</label>
                                <div class='control'>
                                    <input type='text' class='input' id='title' />
                                </div>
                            </div>
                            <div class='field'>
                                <div class='control pt-2'>
                                    <input type='submit' value='Submit' class='button is-primary is-outlined is-fullwidth' />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class='card mt-6'>
                    <div class='card-content'>
                        <div class='columns is-half'>
                            <div class='column'>
                                <a class='button is-primary is-outlined is-fullwidth'>
                                    View Admin
                                </a>
                            </div>
                            <div class='column'>
                                <a class='button is-fullwidth'>
                                    View Volunteers
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
