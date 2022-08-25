@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class="columns is-multiline">
            <div class='column is-half is-offset-3'>
                <div class='mb-6'>
                    <h1 class='is-size-3 mb-2'>View Institutions</h1>
                </div>

                <div class='card'>
                    <div class="card-content">
                        <p class='is-bold'>Institution Name: <b>Name</b></p>
                        <p class='is-bold'>Institution Address: <b>Address</b></p>
                        <p class='is-bold'>Institution Website: <a>Website</a></p>
                    </div>
                </div>
            </div>
            <div class="column is-half is-offset-3">
                <div class='card'>
                    <div class="card-content">
                        <p class='is-bold'>Institution Name: <b>Name</b></p>
                        <p class='is-bold'>Institution Address: <b>Address</b></p>
                        <p class='is-bold'>Institution Website: <a>Website</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
