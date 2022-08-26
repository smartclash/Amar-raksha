@extends('layout.app')

@section('content')
    <section class='hero is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class="container">
                <p class='title'>
                    Amar-raksha
                </p>
                <p class='subtitle'>
                    Connect and engage, the modern way
                </p>
                <a class='button is-primary is-outlined' href="{{ route('login') }}">
                    Login
                    <span class='ml-2'>&#10230;</span>
                </a>
            </div>
        </div>
    </section>
@endsection
