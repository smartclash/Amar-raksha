@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class='column is-half is-offset-3'>
                    <div class='mb-6'>
                        <p class='is-size-2'>Events Details</p>
                    </div>

                    <div class='card mb-6'>
                        <header class='card-header'>
                            <p class='card-header-title'>
                                Heading
                            </p>
                            <button class='card-header-icon' aria-label='more options'>
                                <span class='icon'>
                                    <i class='fas fa-angle-down' aria-hidden='true'></i>
                                </span>
                            </button>
                        </header>
                        <div class='card-content'>
                            <div class='content'>
                                <p>
                                    subheading
                                </p>
                                <p>
                                    description
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class='mb-6'>
                        <p class='is-size-2'>Timeline</p>
                    </div>

                    <div class='card mb-6'>
                        <div class='card-content'>
                            <div class='content'>
                                <p>
                                    title
                                </p>
                                <p>
                                    message
                                </p>
                                <p>
                                    Start At
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
