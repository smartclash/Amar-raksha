@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class="columns">
                    <div class='column is-half is-offset-3'>
                        <p class='is-size-2 mt-4'>{{ $blog->title }}</p>
                        <div class="card mt-4">
                            <div class="card-header">
                                <p class="card-header-title">Author: {{ $blog->user->name }}</p>
                            </div>
                            <div class="card-content">
                                <div class="content">
                                    {{ $blog->content }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
