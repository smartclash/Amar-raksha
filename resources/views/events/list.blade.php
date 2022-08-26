@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class='column is-half is-offset-3'>
                    <div class='mb-6'>
                        <p class='is-size-2'>Welcome, Kiridharan</p>
                    </div>

                    <div class='card mb-6'>
                        <header class='card-header'>
                            <a class='card-header-title'>
                                Heading
                            </a>
                            <button class='card-header-icon' aria-label='more options'>
                                <span class='icon'>
                                    <i class='fas fa-angle-down' aria-hidden='true'></i>
                                </span>
                            </button>
                        </header>
                        <div class='card-content'>
                            <div class='content'>
                                Subheading
                                <br/>
                            </div>
                        </div>
                        <footer class='card-footer'>
                            <a href='#' class='card-footer-item'>Details</a>
                        </footer>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
