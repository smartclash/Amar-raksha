@extends('layout.app')

@section('content')
    <div class='container'>
        <div class='column is-half is-offset-3'>
            <div class='mb-6'>
                <p class='is-size-2 mt-4'>Title of blog</p>
            </div>

            <div class='card mb-6'>
                <header class='card-header is-justify-content-space-between'>
                    <p class='card-header-title is-size-5'>
                        Author
                    </p>
                </header>
                <div class='card-content'>
                    <div class='content'>
                        content inside
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
