@extends('layout.app')

@section('content')
    <section class='hero has-background-white-bis is-fullheight-with-navbar'>
        <div class='hero-body'>
            <div class='container'>
                <div class='columns'>
                    <div class='column is-half is-offset-3'>
                        <div class='card'>
                            <div class='card-header'>
                                <p class='card-header-title'>Create Event</p>
                            </div>
                            <div class='card-content'>
                                <form action="{{ route('events.store') }}" method="post" id="map-form">
                                    @csrf

                                    <div class='field'>
                                        <label class='label'>Title</label>
                                        <div class='control'>
                                            <input class='input' type='text' name="title" />
                                        </div>
                                    </div>

                                    <div class='field'>
                                        <label class='label'>Sub Title</label>
                                        <div class='control'>
                                            <input class='input' type='text' name="subtitle" />
                                        </div>
                                    </div>

                                    <div class='field'>
                                        <label class='label'>Location</label>
                                        <div class='control'>
                                            <div id="map" style="height: 580px" class="is-fullwidth"></div>
                                        </div>
                                    </div>

                                    <div class='field'>
                                        <label class='label' for="type">Type</label>
                                        <div class='control is-expanded'>
                                            <div class='select is-fullwidth'>
                                                <select name="type" id="type">
                                                    <option value="disaster">Disaster</option>
                                                    <option value="contest">Contest</option>
                                                    <option value="fundraising">Fundraising</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='field'>
                                        <label class='label'>Message</label>
                                        <div class='control'>
                                            <textarea class='textarea' name="content" rows="15"></textarea>
                                        </div>
                                    </div>
                                    <div class='field'>
                                        <div class='control'>
                                            <input type='submit' value='Submit' class='button is-primary is-outlined is-fullwidth' />
                                        </div>
                                    </div>
                                    <input type="hidden" name="lat" id="lat" value="" />
                                    <input type="hidden" name="lng" id="lng" value="" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('head')
    @vite(['resources/js/leaflet.js'])
@endpush
