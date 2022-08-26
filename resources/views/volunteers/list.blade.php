@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class="hero-body">
            <div class="container">
                <div class="columns is-multiline">
                    <div class='column is-half is-offset-3'>
                        <div class='mb-6'>
                            <p class='is-size-2'>View Volunteers</p>
                            <a class="is-size-4" href="{{ route('institutions.show', $institution) }}">
                                {{ $institution->name }}
                            </a>
                        </div>
                    </div>
                    @foreach($volunteers as $volunteer)
                        <div class="column is-half is-offset-3">
                            <div class="box">
                                <div class="level">
                                    <div class="level-item">
                                        <p class="is-size-2">{{ $volunteer->name }}</p>
                                    </div>
                                    <div class="level-item">
                                        <div>
                                            <p class="is-size-4">{{ $volunteer->email }}</p>
                                            <p class="is-size-4">{{ $volunteer->phone }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
