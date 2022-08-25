@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class="columns is-multiline">
            <div class='column is-half is-offset-3'>
                <div class='mb-6'>
                    <p class='is-size-2 has-text-centered-desktop'><b>View Volunteers</b></p>
                </div>

                <div class='card mb-6'>
                    <div class="card-content">
                        <p class='is-bold'>Volunteer Name: <b>name</b></p>
                        <p class='is-bold'>Volunteer email: <b>email</b></p>
                        <p class='is-bold'>Phone Number:+91 <b>phone</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
