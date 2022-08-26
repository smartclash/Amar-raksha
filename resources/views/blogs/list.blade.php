@extends('layout.app')

@section('content')
    <style>
        .overflow {
            text-overflow: ellipsis;
            overflow:hidden;
            white-space:nowrap;
            width: 17px;
        }
    </style>
    <section class='hero has-background-white-bis is-fullheight-with-navbar box'>
        <div class='hero-body'>
            <div class='container'>
                <div class="columns is-multiline">
                    <div class='column is-half is-offset-3'>
                        <div class='mb-6'>
                            <h1 class='is-size-2'>Recent blogs</h1>
                        </div>
                    </div>
                    @foreach($blogs as $blog)
                        <div class='column is-half is-offset-3'>
                            <div class='card mb-6'>
                                <header class='card-header'>
                                    <a class='card-header-title is-size-5' href="{{ route('blogs.show', $blog) }}">
                                        {{ $blog->title }}
                                    </a>
                                    <p class='card-header-title is-flex is-justify-content-flex-end'>
                                        {{ $blog->user->name }}
                                    </p>
                                </header>
                                <div class='card-content'>
                                    <a class='content has-text-black' href="{{ route('blogs.show', $blog) }}">
                                        {!! Str::limit($blog->content, 200, '... <b>read more</b>') !!}
                                        <br />
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
