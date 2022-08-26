@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class="columns is-multiline">
                    <div class='column is-half is-offset-3'>
                        <div class='mb-6'>
                            <p class='is-size-2'>View events</p>
                        </div>
                    </div>
                    @foreach($events as $event)
                        <div class="column is-half is-offset-3">
                            <div class="card">
                                <div class="card-content">
                                    <p class="is-size-3">{{ $event->title }}</p>
                                    <p class="is-size-6">{{ $event->subtitle }}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="card-footer-item">
                                        <div class="tags has-addons">
                                            <tag class="tag is-dark">TYPE</tag>
                                            <tag class="tag is-info">{{ $event->type->name }}</tag>
                                        </div>
                                    </div>
                                    <div class="card-footer-item">
                                        <a href="{{ route('events.show', $event) }}" class="button is-primary is-outlined is-fullwidth">
                                            Details &rightarrow;
                                        </a>
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
