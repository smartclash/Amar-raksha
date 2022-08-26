@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class="columns is-multiline">
                    <div class='column is-half is-offset-3'>
                        <div class='mb-6'>
                            <p class='is-size-2'>{{ $event->title }} event's Details</p>
                            <p class='is-size-5'>{{ $event->subtitle }}</p>
                        </div>

                        <div class='card mb-6'>
                            <header class='card-header'>
                                <p class='card-header-title'>
                                    Description
                                </p>
                            </header>
                            <div class='card-content'>
                                <div class='content'>
                                    {{ $event->content }}
                                </div>
                            </div>

                        </div>

                        <div class='mb-6'>
                            <p class='is-size-2'>Timeline</p>
                        </div>
                    </div>

                    @foreach($timelines as $timeline)
                        <div class="column is-half is-offset-3">
                            <div class="box">
                                <div class="level">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <p class="is-size-4">{{ $timeline->title }}</p>
                                        </div>
                                    </div>
                                    <div class="level-right">
                                        <div class="tags has-addons">
                                            <tag class="tag is-dark">Starts At</tag>
                                            <tag class="tag is-info">{{ $timeline->starts_at }}</tag>
                                        </div>
                                    </div>
                                </div>

                                <hr />

                                {{ $timeline->message }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
