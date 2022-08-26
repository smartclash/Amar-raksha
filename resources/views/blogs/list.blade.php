@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar box'>
        <div class='hero-body'>
            <div class='container'>
                <div class='column is-half is-offset-3'>
                    <div class='mb-6'>
                        <h1 class='is-size-2'>Recent blogs</h1>
                    </div>

                    <div class='card mb-6'>
                        <header class='card-header'>
                            <p class='card-header-title is-size-5'>
                                Title
                            </p>
                            <p class='card-header-title is-flex is-justify-content-flex-end'>
                                Author
                            </p>
                        </header>
                        <div class='card-content'>
                            <div class='content '>
                                content bro
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
