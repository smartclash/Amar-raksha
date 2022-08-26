@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <section class="section">
            <div class="columns is-multiline">
                <div class='column is-half is-offset-3'>
                    <div class='mb-6'>
                        <h1 class='is-size-3 mb-2'>View Institutions</h1>
                    </div>
                </div>
                @foreach($institutions as $institution)
                    <div class="column is-half is-offset-3">
                        <div class="box">
                            <div class="level">
                                <div class="level-item">
                                    <div>
                                        <p class="is-size-3">{{ $institution->name }}</p>
                                        <a class="is-size-6" href="{{ $institution->website }}">{{ $institution->website }}</a>
                                    </div>
                                </div>
                                <div class="level-item">
                                    <a href="{{ route('institutions.show', $institution) }}" class="button is-primary is-outlined">
                                        View
                                        <span class='ml-2'>&#10230;</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </section>
@endsection
